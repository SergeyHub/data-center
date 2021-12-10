<?php

namespace App\Services;

class SendpulseFactory
{
    /**
     * @var SendpulseService
     */
    private $sendpulseService;
    /**
     * @var string
     */
    private $locale;

    public function __construct(SendpulseService $sendpulseService)
    {
        $this->sendpulseService = $sendpulseService;
    }

    public function setLocale(string $locale)
    {
        $this->locale = $locale;
    }

    /**
     * @param array $data
     * @return bool
     */
    public function consultation(array $data): bool
    {
        $data_send = [
            'email' => $data['email'],
            'phone' => $data['phone'],
            'variables' => [
                'Имя' => $data['name'],
                'Телефон' => $data['phone'],
                'Организация' => $data['organization']
            ]
        ];
        $book_id = null;

        if ($this->locale === 'ru') {
            $book_id = SendpulseService::ADDRESS_BOOK_SERVICES;
        } elseif ($this->locale === 'en') {
            $book_id = SendpulseService::ADDRESS_BOOK_SERVICES_ENG;
        }

        $this->sendpulseService->addEmail($book_id, $data_send);

        return true;
    }

    /**
     * @param array $data
     * @return bool
     */
    public function event(array $data): bool
    {
        $data_send = [
            'email' => $data['email'],
            'phone' => $data['phone'],
            'variables' => [
                'Имя' => $data['name'],
                'Телефон' => $data['phone'],
                'Организация' => $data['organization']
            ]
        ];
        $book_id = null;

        if ($this->locale === 'ru') {
            $book_id = SendpulseService::ADDRESS_BOOK_GUESTS;
        } elseif ($this->locale === 'en') {
            $book_id = SendpulseService::ADDRESS_BOOK_GUESTS_ENG;
        }

        $this->sendpulseService->addEmail($book_id, $data_send);

        return true;
    }

    /**
     * @param array $data
     * @return bool
     */
    public function subscribe(array $data): bool
    {
        $data_send = [
            'email' => $data['email']
        ];

        $book_id = null;

        if ($this->locale === 'ru') {
            $book_id = SendpulseService::PRESS_ROOM;
        } elseif ($this->locale === 'en') {
            $book_id = SendpulseService::PRESS_ROOM_ENG;
        }

        $this->sendpulseService->addEmail($book_id, $data_send);

        return true;
    }

    public function research(array $data): bool
    {
        \Log::info("Sendpulse factory research");
        $data_send = [
            'email' => $data['email'],
            'variables' => [
                'Имя' => $data['name'],
                'Организация' => $data['company']
            ]
        ];

        $book_id = null;

        if ($this->locale === 'ru') {
            $book_id = SendpulseService::ADDRESS_BOOK_RESEARCH;
        } elseif ($this->locale === 'en') {
            $book_id = SendpulseService::ADDRESS_BOOK_RESEARCH_ENG;
        }

        $this->sendpulseService->addEmail($book_id, $data_send);

        return true;
    }

    public function __call($name, $args)
    {
        throw new \RuntimeException("Type $name not found");
    }
}
