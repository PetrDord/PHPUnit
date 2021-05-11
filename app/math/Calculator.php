<?php 
namespace Cal\math;

class Calculator{
    private $x;
    private $y;
    

    public function setX($x)
    {
        $this->x = $x;
        return $this;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function setY($y)
    {
        $this->y = $y;
        return $this;
    }

    public function getY()
    {
        return $this->y;
    }


    public function Plus(){
        return $this->y+$this->x;
    }
    public function Minus(){
        return $this->x-$this->y;
    }
    public function Krat(){
        return $this->x*$this->y;
    }
    public function Deleno(){
        return $this->x/$this->y;
    }
}
