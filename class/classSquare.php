<?php

require_once "./class/classDot.php";

class Square extends Dot
{
  private $x;
  private $y;
  private $side;

  public function __construct($x, $y, $side)
  {
    $this->x = $x;
    $this->y = $y;
    $this->side = $side;
  }

  public function draw()
  {
    echo 'La valeur x du carré est ' . $this->x . ', La valeur y du carré est ' . $this->y . ', et son coté est de ' . $this->side . PHP_EOL;
  }
  function move($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
  }
}
