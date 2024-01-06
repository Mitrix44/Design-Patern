<?php

require_once "./class/classDot.php";

class Rectangle extends Dot
{
  private $x;
  private $y;
  private $height;
  private $width;

  public function __construct($x, $y, $height, $width)
  {
    $this->x = $x;
    $this->y = $y;
    $this->height = $height;
    $this->width = $width;
  }

  public function draw()
  {
    echo 'La valeur x du rectangle est ' . $this->x . ', La valeur y du rectangle est ' . $this->y . ', sa hauteur est de ' . $this->height . ', et sa largeur est de ' . $this->width . PHP_EOL;
  }
  function move($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
  }
}
