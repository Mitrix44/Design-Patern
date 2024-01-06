<?php
require_once "./class/interfaceGraphic.php";

class CompoundGraphic implements Graphic
{
  private $children = [];

  public function add(Graphic $child)
  {
    $this->children[] = $child;
  }

  public function remove(Graphic $child)
  {
    $index = array_search($child, $this->children);
    if ($index !== false) {
      unset($this->children[$index]);
    }
  }

  public function move(Int $x, Int $y)
  {
    foreach ($this->children as $child) {
      $child->move($x, $y);
    }
  }
  public function draw()
  {
    $output = "";
    foreach ($this->children as $child) {
      $output .= $child->draw() . PHP_EOL;
    }
    echo $output;
  }
}
