<?php

use DrawingTool\Draw\Rectangle;
use DrawingTool\Shape\Rectangle as ShapeRectangle;
use DrawingTool\CanvasProvider\Canvas;

class RectangleDrawTest extends PHPUnit_Framework_TestCase
{
  private $rectangle;

  public function __construct()
  {
    parent::__construct();
    $this->rectangle = new Rectangle(new ShapeRectangle(11, 0, 20, 3, 'x'));
  }

  public function testDraw()
  {
    $canvas = Canvas::get(50, 10);
    $this->rectangle->draw($canvas);
    $expected = "----------------------------------------------------\n" .
                "|xx         xxxxxxxxxx                             |\n" .
                "|  xx       x        x                             |\n" .
                "|    xx     x        x                             |\n" .
                "|      xx   xxxxxxxxxx                             |\n" .
                "|        xx                                        |\n" .
                "|          x                           xxxxxxxxxx  |\n" .
                "|           xx                         xoooooooox  |\n" .
                "|             xx                       xoooooooox  |\n" .
                "|               xx                     xxxxxxxxxx  |\n" .
                "|                 xx                               |\n" .
                "----------------------------------------------------\n";

    $this->assertEquals($canvas->__toString(), $expected);
  }
}
