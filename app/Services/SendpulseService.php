<?php

namespace App\Services;

use GuzzleHttp\Client;
use Cache;
use GuzzleHttp\Exception\GuzzleException;
use Psr\SimpleCache\InvalidArgumentException;

class SendpulseService
{
    public const ADDRESS_BOOK_SERVICES = 88912335;
    public const ADDRESS_BOOK_SERVICES_ENG = 88912345;
    public const ADDRESS_BOOK_GUESTS = 88980622;
    public const ADDRESS_BOOK_GUESTS_ENG = 88980621;
    public const PRESS_ROOM = 88950514;
    public const PRESS_ROOM_ENG = 88950526;
    public const ADDRESS_BOOK_RESEARCH = 1929705;
    public const ADDRESS_BOOK_RESEARCH_ENG = 2432257;

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
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $secret;

    public function __construct()
    {
        $this->client = new Client();
        $this->url = env('SENDPULSE_URL');
        $this->secret = env('SENDPULSE_SECRET');
        $this->id = env('SENDPULSE_ID');
        $this->token = Cache::get('sendpulse_token');
        if (empty($this->token)) {
            $this->getToken();
        }
    }

    /**
     * @throws GuzzleException
     * @throws InvalidArgumentException
     */
    protected function getToken(): void
    {
        $data = [
            'grant_type' => 'client_credentials',
            'client_id' => $this->id,
            'client_secret' => $this->secret
        ];

        $response = $this->client->post($this->url . '/oauth/access_token', ['form_params' => $data]);

        $data = json_decode($response->getBody(), true);
        if (isset($data['access_token'])) {
            $this->token = $data['access_token'];
            Cache::set('sendpulse_token', $this->token, 60 * 60);
        }
    }

    /**
     * @param int $bookId
     * @param array $data
     * @return bool
     */
    public function addEmail(int $bookId, array $data): bool
    {
        \Log::info("Send pulse book id = $bookId", $data);
        try {
            $response = $this->client->post($this->url . "/addressbooks/$bookId/emails", [
                'form_params' => ['emails' => serialize([$data])],
                'headers' => ['Authorization' => "Bearer {$this->token}"]
            ]);
        } catch (GuzzleException $e) {
            \Log::error('send pulse', ['error' => $e->getMessage()]);
            return false;
        }

        $data = json_decode($response->getBody(), true);

        return (bool)$data['result'];
    }
}
