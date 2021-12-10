<?php

namespace App\Services;

use LogicException;
use App\Models\Price;
use Illuminate\Database\Eloquent\Collection;

class PriceRepository
{
    /**
     * @var Price[]|Collection|null
     */
    public $prices = null;

    /**
     * PriceRepository constructor.
     */
    public function __construct()
    {
        $this->prices = Price::all()->keyBy('name');
    }

    /**
     * @param string $name
     * @return Price
     * @throws Exception
     */
    public function getPrice(string $name): Price
    {
        if (!isset($this->prices[$name])) {
            throw new LogicException("Price $name not found");
        }

        return $this->prices[$name];
    }
}
