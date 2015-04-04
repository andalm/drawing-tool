<?php

use DrawingTool\Shape\Line;

class LineTest extends PHPUnit_Framework_TestCase
{
  private $line;

  public function __construct()
  {
    parent::__construct();
    $this->line = new Line(1, 1, 1, 1, 'x');
  }

  public function testNameSpace()
  {
    $this->assertContainsOnlyInstancesOf('DrawingTool\Shape\Line', [$this->line]);
  }

  public function testIntegerParameters()
  {
    $this->line->setX1(1);
    $this->assertInternalType('int', $this->line->getX1());

    $this->line->setX2(1);
    $this->assertInternalType('int', $this->line->getX2());

    $this->line->setY1(1);
    $this->assertInternalType('int', $this->line->getY1());

    $this->line->setY2(1);
    $this->assertInternalType('int', $this->line->getY2());
  }

  public function testStringParameters()
  {
    $this->line->setBorder('_');
    $this->assertInternalType('string', $this->line->getBorder());
  }

  public function testGetDrawable()
  {
    $this->assertContainsOnlyInstancesOf('DrawingTool\Draw\IDrawable', [$this->line->getDrawable()]);
  }
}
