<?php
require_once "./class/classDot.php";
require_once "./class/classSquare.php";
require_once "./class/classCircle.php";
require_once "./class/classCompoundGraphic.php";
require_once "./class/classRectangle.php";

class ImageEditor implements graphic
{
  private $all;

  public function __construct()
  {
    $this->all = new CompoundGraphic();
    $this->all->add(new Dot(1, 2));
    $this->all->add(new Circle(5, 3, 10));
  }
  public function addNewGroup($components)
  {
    $group = new CompoundGraphic;
    foreach ($components as $component) {
      $group->add($component);
    }

    $this->all->add($group);
  }
  public function draw()
  {
    $this->all->draw();
  }
  public function move($x, $y)
  {
    $this->all->move($x, $y);
  }
}
