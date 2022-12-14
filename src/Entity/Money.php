<?php

declare(strict_types=1);

namespace Ikucmknk\TddMoney\Entity;

class Money
{
  protected int $amount;
  protected string $currency;

  public function __construct(int $amount, string $currency)
  {
      $this->amount = $amount;
      $this->currency = $currency;
  }


    function times(int $multiplier): Money
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

  public function equals(Money $Money): bool
  {
    return $Money->amount === $this->amount
      && $this->currency === $Money->currency();
  }

  public static function dollar(int $amount): Money
  {
    return new Dollar($amount, "USD");
  }

  public static function franc(int $amount): Money
  {
    return new Franc($amount, "CHF");
  }

  public function currency(): string
  {
      return $this->currency;
  }

}
