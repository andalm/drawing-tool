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
    $this->rectangle = new Rectangle(new ShapeRectangle(), Canvas::get(2, 3));
  }

  public function testDraw()
  {
    //$this->rectangle->draw();
  }
}
