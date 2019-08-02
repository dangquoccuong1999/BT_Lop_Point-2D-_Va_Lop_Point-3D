<?php


class Point2D
{
    public $x, $y;

    public function __construct($x, $y)
    {
        $this->x = floatval($x);
        $this->y = floatval($y);
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getXY()
    {
        $arr = [$this->x, $this->y];
        return [0];
    }

    public function toString()
    {
        echo 'X : ' . $this->x . '<br>';
        echo 'Y : ' . $this->y . '<br>';
    }

}