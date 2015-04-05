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
    $this->line = new Line(new ShapeLine(0, 0, 55, 30, 'x'));
  }

  public function testDraw()
  {
    $canvas = Canvas::get(50, 10);
    $this->line->draw($canvas);
    $expected = "----------------------------------------------------\n" .
                "|xx                                                |\n" .
                "|  xx                                              |\n" .
                "|    xx                                            |\n" .
                "|      xx                                          |\n" .
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
