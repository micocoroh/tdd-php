<?php declare(strict_types=1);

use Ikucmknk\TddMoney\Entity\Dollar;
use Ikucmknk\TddMoney\Entity\Franc;
use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    public function testMultiplication()
    {
        $Five = new Franc(5);
        $this->assertEquals(new Franc(10), $Five->times(2));
        $this->assertEquals(new Franc(15), $Five->times(3));
    }

    public function testEquality()
    {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));
        $this->assertTrue((new Franc(5))->equals(new Franc(5)));
        $this->assertFalse((new Franc(5))->equals(new Franc(6)));
        $this->assertFalse((new Franc(5))->equals(new Dollar(5)));
    }

    public function testFrancMultiplication()
    {
        $Five = new Franc(5);
        $this->assertEquals(new Franc(10), $Five->times(2));
        $this->assertEquals(new Franc(15), $Five->times(3));
    }

}
