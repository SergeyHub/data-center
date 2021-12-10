<?php

namespace App\Services;

use GuzzleHttp\Client;
use Cache;
use GuzzleHttp\Exception\GuzzleException;
use \Psr\SimpleCache\InvalidArgumentException;

class AmoService
{
    /**
     * @var string
     */
    private $token;

    /**
     * @var string
     */
    private $url;

    /**
     * @var Client
     */
    private $client;

    /**
     * @var PriceRepository
     */
    private $priceRepository;
    /**
     * @var LogJob
     */
    private $logJobService;

    public function __construct(PriceRepository $priceRepository, LogJob $logJobService)
    {
        $this->priceRepository = $priceRepository;
        $this->client = new Client();
        $this->url = env('AMO_URL');
        $this->token = Cache::get('token');
        \Log::info($this->token);
        if (empty($this->token)) {
            $this->getToken();
        }
        $this->logJobService = $logJobService;
    }

    /**
     * @throws GuzzleException
     * @throws InvalidArgumentException
     */
    protected function getToken(): void
    {
        $user = env('AMO_USER');
        $password = env('AMO_PASSWORD');

        $response = $this->client->get($this->url . '/v1/auth/', [
            'auth' => [
                $user, $password
            ]
        ]);

        if ($response->getStatusCode() === 200) {
            $this->token = json_decode($response->getBody());

            Cache::set('token', $this->token, 24 * 60 * 60);
        } else {
            throw new Exception('Не удалось обработать запрос');
        }
    }

    /**
     * @param array $data
     * @return bool
     */
    public function sendData(array $data): bool
    {
        $this->logJobService->info(LogJob::TYPE_API, ['begin send data', 'data' => $data]);
        $data_url = parse_url($data['page']);
        $query = null;
        if (isset($data_url['query'])) {
            $query = $data_url['query'];
            $query = explode('&', $query);
        }

        $sendData = [
            'site_version' => app()->getLocale(),
            'user_name' => $data['name'],
            'url_params' => $query,
            'company_name' => $data['organization'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'text' => $data['message'],
            'is_rus' => (int)$data['place'] ? (bool)$data['place'] : null,
            'form_name' => $data['type'],
            // 'form_name' => urlencode($data['type']),
            'form_page' => $data['page'],
            'url_param' => $query
        ];

        \Log::info('send data form', $sendData);
        $this->logJobService->info(LogJob::TYPE_API, ['before send to api', 'send-data' => $sendData]);
        try {
            $response = $this->client->post($this->url . '/v1/form', [
                'headers' => ['x-auth' => $this->token],
                'body' => json_encode($sendData, JSON_UNESCAPED_UNICODE)
            ]);
        } catch (GuzzleException $e) {
            \Log::error('amo send data', ['error' => $e->getMessage()]);
        }

        return true;
    }

    /**
     * @param array $data
     * @return bool
     */
    public function sendDataCalc(array $data): bool
    {
        \Log::info('Send data calc before', $data);
        $this->logJobService->info(LogJob::TYPE_API, ['begin send data calc']);
        $data_url = parse_url($data['page']);
        $query = null;
        if (isset($data_url['query'])) {
            $query = $data_url['query'];
            $query = explode('&', $query);
        }

       /* $sendData = [
            'is_ad' => (bool)false,
            'site_version' => (string)app()->getLocale(),
            'url_param' => $query,
            'user_name' => (string)$data['name'],
            'company_name' => (string)$data['organization'],
            'phone' => (string)$data['phone'],
            'email' => (string)$data['email'],
            'text' => (string)$data['message'],
            'is_rus' => (bool)$data['place'],
            'form_name' => urlencode($data['type']),
            'form_page' => (string)$data['page'],
           // 'url_params' => $query,
            'calc' => (object)[
                'location' => (string)$data['location'],
                'vcpu' => (int)$data['vcpu'],
                'ram' => (int)$data['ram'],
                'sas' => (int)$data['sas'],
                'ssd' => (int)$data['ssd'],
                'price_resource' => (float)$data['resource'],
                'price_internet' => (int)$this->priceRepository->getPrice('internet_access')->value,
                'backup_value' => (int)$data['vm'],
                'capacity' => (int)$data['disk_space'],
                'price_backup' => (float)$data['backup'],
                'method' => 'null',
                'price_total' => (float)$data['total']
            ]
        ];*/

        $sendData = [
            "is_ad" => true,
            "site_version" =>  "ru",
            "url_param" =>  ["utm_source=yandex","utm_medium=cpc","utm_campaign=kry_brand_spb_poisk"],
            "user_name" =>  "Alex",
            "company_name" =>  "OOO Roga",
            "phone" =>  "+79123456789",
            "email" =>  "roga@kopita.net",
            "text" =>  "text message for request",
            "is_rus" =>  false,
            "form_name" =>  "[55] Запрос на бесплатную консультацию",
            "form_page" =>  "https://www.admindatacenter.com/cloud/152/",
            "calc" =>  [
                "location" =>  "Москва",
                "vcpu" =>  1,
                "ram" =>  1,
                "sata" =>  1,
                "sas" =>  1,
                "ssd" =>  1,
                "price_resources" =>  1606,
                "channel" =>  10,
                "ip_addresses" =>  3,
                "price_internet" =>  3,
                "backup_value" =>  1,
                "capacity" =>  1,
                "price_backup" =>  3840,
                "method" =>  "PAYG",
                "price_total" =>  10485
            ]
        ];




/*

        \Log::info('send data calc', $sendData);
        $this->logJobService->info(LogJob::TYPE_API, ['before send to api calc', 'send-data' => $sendData]);

*/

        $data_string = json_encode ($sendData, JSON_UNESCAPED_UNICODE);
        $curl = curl_init( 'https://svc.admindatacenter.com/crm/integration/v1/calc');
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        // Принимаем в виде массива. (false - в виде объекта)
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                'x-auth: ' . $this->token)
        );
        $result = curl_exec($curl);
        curl_close($curl);


/*
        try {
            $response = $this->client->post($this->url . '/v1/calc', [
              //  'headers' => ['x-auth' => $this->token, 'content-type' => 'application/json'],
                'headers' => ['x-auth' => $this->token],
                'body' => json_encode($sendData, JSON_UNESCAPED_UNICODE)]);
            \Log::info('response calc', ['body' => $response->getBody()->getContents()]);
        } catch (GuzzleException $e) {
            \Log::error('amo send data calc', ['error', $e->getMessage()]);
        }
*/
        return true;
    }
}


