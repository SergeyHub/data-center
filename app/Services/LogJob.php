<?php

namespace App\Services;

class LogJob
{
    public const TYPE_EMAIL = 'email';
    public const TYPE_API = 'api';
    public const TYPE_SENDPULSE = 'sendpulse';

    /**
     * @param string $type
     * @param array $data
     */
    public function info(string $type, array $data, $class = __CLASS__): void
    {
        $logJob = new \App\Models\LogJob();
        $logJob->class = $class;
        $logJob->type = $type;
        $logJob->data = $data;
        $logJob->save();
    }
}
