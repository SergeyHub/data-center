<?php

namespace App\Services;

class BlocksHelper
{
    public function getBlocksByType($type, array $fields): array
    {
        return array_filter($fields, function ($item) use ($type) {
            return $item['type'] === $type;
        });
    }
}
