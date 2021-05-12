<?php



use Cal\math\Calculator;

 final class CalculatorTest extends PHPUnit\Framework\TestCase {
    public function testSettersAndGetters()
    {
        $c = new Calculator;
        $c->setX(5);
        $c->setY(4);
        $this->assertSame($c->getX(), 5);
        $this->assertSame($c->getY(), 4);

    }


    public function testPlus()
    {
        $c = new Calculator;
        
        $c->setX(5);
        $c->setY(4);
        $result=$c->Plus();
        $this->assertSame(9,$result);

    }
    public function testMinus()
    {
        $c = new Calculator;
        
       $c->setX(5);
        $c->setY(4);
        $result=$c->Minus();
        $this->assertSame(1,$result);

    }
    public function testKrat()
    {
        $c = new Calculator;
        
        $c->setX(5);
        $c->setY(4);
        $result=$c->Krat();
        $this->assertSame(20,$result);

    }
    public function testDeleno()
    {
        $c = new Calculator;
        
        $c->setX(10);
        $c->setY(2);
        $result=$c->Deleno();
        $this->assertSame(5,$result);

    }


}

