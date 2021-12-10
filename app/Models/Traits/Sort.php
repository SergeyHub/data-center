<?php

namespace App\Models\Traits;

trait Sort
{
    public static function bootSort()
    {
        static::creating(function ($model) {
            $model->setNextSortNumber();
        });
    }

    public function setNextSortNumber()
    {
        $parentId = $this->parent_id;
        $tableHasSort = in_array('sort', $this->columns());
        $tableHasParentId = in_array('parent_id', $this->columns());

        if (!$tableHasSort) {
            return;
        }

        $max = static::when($tableHasParentId, function ($q) use ($parentId) {
            return $q->where('parent_id', $parentId);
        })->max('sort');

        $this->sort = $max === null ? 0 : $max + 1;
    }

    public function scopeSorted($query)
    {
        return $query->orderBy('sort');
    }
}
