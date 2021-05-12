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
        $this->assertSame($this->y+$this->x,9);

    }
    public function testMinus()
    {
        $c = new Calculator;
        
        $c->setX(5);
        $c->setY(4);
        $this->assertSame($this->x-$this->y,1);

    }
    public function testKrat()
    {
        $c = new Calculator;
        
        $c->setX(5);
        $c->setY(4);
        $this->assertSame($this->x*$this->y,20);

    }
    public function testDeleno()
    {
        $c = new Calculator;
        
        $c->setX(10);
        $c->setY(2);
        $this->assertSame($this->x/$this->y,5);

    }


}

