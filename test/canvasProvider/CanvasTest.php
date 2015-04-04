<?php

use DrawingTool\CanvasProvider\Canvas;

class CanvasTest extends PHPUnit_Framework_TestCase
{
  private $canvas;

  public function __construct()
  {
    parent::__construct();
    $this->canvas = Canvas::get(2, 3);
  }

  public function testCreatedCanvas()
  {
    $this->assertContainsOnlyInstancesOf('DrawingTool\CanvasProvider\Canvas', [$this->canvas]);
  }

  public function testGetContent()
  {
    $this->assertInternalType('array', $this->canvas->getContent());
  }

  public function testSetContent()
  {
    $this->canvas->setContent([]);
    $this->assertTrue(true);
  }

  public function testGetContentByPoint()
  {
    //TODO: make test...
  }

  public function testPrintCanvas()
  {
    //TODO: make test...
  }
}
