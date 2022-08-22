<?php

declare(strict_types=1);

namespace Ikucmknk\TddMoney\Entity;

abstract class Money
{
  protected int $amount;

  abstract function times(int $multiplicatier): Money;

  public function equals(Money $Money): bool
  {
    return $Money->amount === $this->amount
      && get_class($this) === get_class($Money);
  }

  public static function dollar(int $amount): Money
  {
    return new Dollar($amount);
  }

  public static function franc(int $amount): Money
  {
    return new Franc($amount);
  }
}
