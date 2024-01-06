<?php
require_once "./class/classCircle.php";
require_once "./class/classCompoundGraphic.php";
require_once "./class/classDot.php";
require_once "./class/classImageEditor.php";
require_once "./class/classSquare.php";
require_once "./class/classRectangle.php";

$imageEditor = new ImageEditor;
$compoundGraphic = new compoundGraphic;
$compoundGraphic->add(new Circle(20, 20, 20));
$imageEditor->addNewGroup([$compoundGraphic, new Square(10, 10, 10), new Rectangle(50, 20, 5, 4)]);

$imageEditor->draw();
$imageEditor->move(5, 5);
$imageEditor->draw();
