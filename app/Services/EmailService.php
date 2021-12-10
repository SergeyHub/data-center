<?php

namespace App\Services;

use App\Mail\FeedbackEmail;
use App\Mail\FormsEmail;
use App\Mail\JobEmail;
use Egulias\EmailValidator\Exception\ExpectingCTEXT;
use Illuminate\Support\Facades\DB;

class EmailService
{
    /**
     * @var bool
     */
    private $is_email_send;
    /**
     * @var LogJob
     */
    private $logJobService;

    public function __construct(SettingsService $settings, LogJob $logJobService)
    {

        $this->is_email_send = (bool)$settings->is_email_send;
        $this->logJobService = $logJobService;
    }

    /**
     * @var object
     */
    private $settings;

    /**
     * @param array $data
     */
    public function forms(array $data): void
    {
        \Log::info("Send email forms before");
        $this->logJobService->info(LogJob::TYPE_EMAIL, ['Send email begin forms']);
        if ($this->is_email_send) {
            try {
                \Log::info("Send emeil forms", $data);
                $this->logJobService->info(LogJob::TYPE_EMAIL, ['send email forms', ['data' => $data]]);
                \Mail::send(new FormsEmail($data));
                if (count(\Mail::failures()) > 0) {
                    foreach (\Mail::failures() as $error) {
                        \Log::error($error);
                    }
                }
            } catch (\Exception $e) {
                \Log::error($e->getMessage());
            }
        }
    }

    /**
     * @param array $data
     */
    public function job(array $data): void
    {
        \Log::info("Send emeil job before", $data);
        if ($this->is_email_send) {
            try {
                \Log::info("Send emeil job", $data);
                \Mail::send(new JobEmail($data));
                if (count(\Mail::failures()) > 0) {
                    foreach (\Mail::failures() as $error) {
                        \Log::error($error);
                    }
                }
            } catch (\Exception $e) {
                \Log::error($e->getMessage());
            }
        }
    }

    /**
     * @param array $data
     */
    public function feedback(array $data): void
    {
        \Log::info("Send emeil feedback before", $data);
        if ($this->is_email_send) {
            try {
                \Log::info("Send emeil feedback", $data);
                \Mail::send(new FeedbackEmail($data));
                if (count(\Mail::failures()) > 0) {
                    foreach (\Mail::failures() as $error) {
                        \Log::error($error);
                    }
                }
            } catch (\Exception $e) {
                \Log::error($e->getMessage());
            }
        }
    }
}
