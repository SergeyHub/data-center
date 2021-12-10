<?php

namespace App\Services;

use App\Models\Vacancy;

class VacancyRepository
{
    public function getAllVacancies()
    {
        return Vacancy::published()->with('translation')->lang()->orderBy('created_at', 'asc')->get();
    }
}
