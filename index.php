<?php
include 'Point2D.php';
include 'Point3D.php';

$point2D = new Point2D(10, 50);
$point3D = new Point3D(10, 20, 30);

$point2D->toString();
$point3D->toString();