<?php

require_once "./class/classDot.php";

class Circle extends Dot
{
  private $x;
  private $y;
  private $radius;

  public function __construct($x, $y, $radius)
  {
    $this->x = $x;
    $this->y = $y;
    $this->radius = $radius;
  }

  public function draw()
  {
    echo 'La valeur x du cercle est ' . $this->x . ', La valeur y du cercle est ' . $this->y . ', et la valeur rayon du cercle est ' . $this->radius . PHP_EOL;
  }
  function move($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
  }
}
