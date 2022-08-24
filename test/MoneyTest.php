<?php declare(strict_types=1);

use Ikucmknk\TddMoney\Entity\Dollar;
use Ikucmknk\TddMoney\Entity\Franc;
use Ikucmknk\TddMoney\Entity\Money;
use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    public function testMultiplication()
    {
        $Five = Money::dollar(5);
        $this->assertEquals(Money::dollar(10), $Five->times(2));
        $this->assertEquals(Money::dollar(15), $Five->times(3));
    }

    public function testEquality()
    {
        $this->assertTrue((Money::dollar(5))->equals(Money::dollar(5)));
        $this->assertFalse((Money::dollar(5))->equals(Money::dollar(6)));
        $this->assertTrue((Money::franc(5))->equals(Money::franc(5)));
        $this->assertFalse((Money::franc(5))->equals(Money::franc(6)));
        $this->assertFalse((Money::franc(5))->equals(Money::dollar(5)));
    }

    public function testFrancMultiplication()
    {
        $Five = Money::franc(5);
        $this->assertEquals(Money::franc(10), $Five->times(2));
        $this->assertEquals(Money::franc(15), $Five->times(3));
    }

    public function testDifferentClassEquality()
    {
        $this->assertTrue((new Money(10, "CHF"))->equals(new Franc(10, 'CHF')));
    }

    public function testCurrency()
    {
        $this->assertEquals("USD", Money::dollar(1)->currency());
        $this->assertEquals("CHF", Money::franc(1)->currency());
    }
}
