<?php

declare(strict_types=1);

namespace Ikucmknk\TddMoney\Entity;

class Dollar extends Money
{
  public function __construct(int $amount)
  {
    $this->amount = $amount;
  }

  public function times(int $multiplier): Money
  {
    return new Dollar($this->amount * $multiplier);
  }
}
