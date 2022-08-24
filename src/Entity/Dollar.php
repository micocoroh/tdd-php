<?php declare(strict_types=1);

namespace Ikucmknk\TddMoney\Entity;

class Dollar extends Money
{
    public function __construct(int $amount, string $currency)
    {
        parent::__construct($amount, $currency);
    }
}
