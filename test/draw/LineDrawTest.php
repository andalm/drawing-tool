<?php

use DrawingTool\Draw\Line;
use DrawingTool\Shape\Line as ShapeLine;
use DrawingTool\CanvasProvider\Canvas;

class LineDrawTest extends PHPUnit_Framework_TestCase
{
  private $line;

  public function __construct()
  {
    parent::__construct();
    $this->line = new Line(new ShapeLine(), Canvas::get(2, 3));
  }

  public function testDraw()
  {
    //$this->line->draw();
  }
}
