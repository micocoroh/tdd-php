<?php declare(strict_types=1);

namespace Ikucmknk\TddMoney\Entity;

class Franc extends Money
{
    protected int $amount;
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Franc
    {
        return new Franc($this->amount * $multiplier);
    }
}
