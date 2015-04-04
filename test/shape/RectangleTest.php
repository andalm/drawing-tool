<?php

use DrawingTool\Shape\Rectangle;

class RectangleTest extends PHPUnit_Framework_TestCase
{
  private $rectangle;

  public function __construct()
  {
    parent::__construct();
    $this->rectangle = new Rectangle(1, 1, 1, 1, 'x');
  }

  public function testNameSpace()
  {
    $this->assertContainsOnlyInstancesOf('DrawingTool\Shape\Rectangle', [$this->rectangle]);
  }

  public function testIntegerParameters()
  {
    $this->rectangle->setX1(1);
    $this->assertInternalType('int', $this->rectangle->getX1());

    $this->rectangle->setX2(1);
    $this->assertInternalType('int', $this->rectangle->getX2());

    $this->rectangle->setY1(1);
    $this->assertInternalType('int', $this->rectangle->getY1());

    $this->rectangle->setY2(1);
    $this->assertInternalType('int', $this->rectangle->getY2());
  }

  public function testStringParameters()
  {
    $this->rectangle->setBorder('_');
    $this->assertInternalType('string', $this->rectangle->getBorder());
  }

  public function testGetDrawable()
  {
    $this->assertContainsOnlyInstancesOf('DrawingTool\Draw\IDrawable', [$this->rectangle->getDrawable()]);
  }
}
