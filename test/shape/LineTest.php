<?php

use DrawingTool\Shape\Line;

class LineTest extends PHPUnit_Framework_TestCase
{
  private $line;

  public function __construct()
  {
    parent::__construct();
    $this->line = new Line();
  }

  public function testNameSpace()
  {
    $this->assertContainsOnlyInstancesOf('DrawingTool\Shape\Line', [$this->line]);
  }

  public function testSetParameters()
  {
    $this->line->setBorder('_');
    $this->line->setX1(1);
    $this->line->setX2(1);
    $this->line->setY1(1);
    $this->line->setY2(1);
    $this->assertTrue(true);
  }

  public function testGetParameters()
  {
    $this->assertInternalType('integer', $this->line->getX1());
  }
}
