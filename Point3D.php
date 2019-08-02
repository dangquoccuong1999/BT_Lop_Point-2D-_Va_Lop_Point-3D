<?php


class Point3D extends Point2D
{
    public $z;

    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = floatval($z);
    }


    public function getZ()
    {
        return $this->z;
    }


    public function setZ($z)
    {
        $this->z = $z;
    }

    public function setXYZ($x, $y, $z)
    {
        $this->x = floatval($x);
        $this->y = floatval($y);
        $this->z = floatval($z);
    }

    public function getXYZ()
    {
        return $arr = [$this->x, $this->y, $this->z];
    }

    public function toString()
    {
        parent::toString();
        echo 'Z : ' . $this->z;
    }
}