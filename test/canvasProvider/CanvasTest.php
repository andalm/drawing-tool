<?php

use DrawingTool\CanvasProvider\Canvas;

class CanvasTest extends PHPUnit_Framework_TestCase
{
  private $canvas;
  const WIDTH = 50;
  const HEIGHT = 10;

  public function __construct()
  {
    parent::__construct();
    $this->canvas = Canvas::get(self::WIDTH, self::HEIGHT);
  }

  public function testCreatedCanvas()
  {
    $this->assertContainsOnlyInstancesOf('DrawingTool\CanvasProvider\Canvas', [$this->canvas]);
  }

  public function testGetContentByPoint()
  {
    $this->assertEquals($this->canvas->getContentByPixel(10,5), ' ');
  }

  public function testPrint()
  {
    $expected = "----------------------------------------------------\n" .
                "|                                                  |\n" .
                "|                                                  |\n" .
                "|                                                  |\n" .
                "|                                                  |\n" .
                "|                                                  |\n" .
                "|                                                  |\n" .
                "|                                                  |\n" .
                "|                                                  |\n" .
                "|                                                  |\n" .
                "|                                                  |\n" .
                "----------------------------------------------------\n";

    $this->assertEquals($this->canvas->__toString(), $expected);

  }

  public function testGetContent()
  {
    $this->assertInternalType('array', $this->canvas->getContent());
  }

  public function testSetContent()
  {
    $row = array_fill(0, self::WIDTH, ' ');
    $newContent = array_fill(0, self::HEIGHT, $row);
    $this->canvas->setContent($newContent);
    $this->assertTrue(true);
  }
}
