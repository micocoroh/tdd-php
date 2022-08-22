<?php declare(strict_types=1);

namespace Ikucmknk\TddMoney\Entity;

class Money
{
    protected int $amount;

    public function equals(Money $Money): bool
    {
        return $Money->amount === $this->amount;
    }

}
