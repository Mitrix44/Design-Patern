<?php
require_once "./class/interfaceGraphic.php";

class Dot implements Graphic
{
  private $x;
  private $y;

  public function __construct($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
  }

  function move($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
  }

  function draw()
  {
    echo 'La valeur x du point est ' . $this->x . ', La valeur y du point est ' . $this->y . PHP_EOL;
  }
}
