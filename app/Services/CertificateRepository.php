<?php

namespace App\Services;

use App\Models\Certificate;

class CertificateRepository
{
    public function getAllCertificates()
    {
        return Certificate::published()->with('translation')->lang()->orderBy('sort', 'asc')->get();
    }
}
