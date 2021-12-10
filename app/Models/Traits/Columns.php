<?php

namespace App\Models\Traits;

use Illuminate\Support\Facades\Schema;

trait Columns
{
    public $columns;

    public function columns()
    {
        if ($this->columns) {
            return $this->columns;
        }

        $this->columns = Schema::getColumnListing($this->getTable());

        return $this->columns;
    }
}
