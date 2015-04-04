<?php

use DrawingTool\Shape\Bucket;

class BucketTest extends PHPUnit_Framework_TestCase
{
  private $bucket;

  public function __construct()
  {
    parent::__construct();
    $this->bucket = new Bucket(1, 2, 'o');
  }

  public function testNameSpace()
  {
    $this->assertContainsOnlyInstancesOf('DrawingTool\Shape\Bucket', [$this->bucket]);
  }

  public function testIntegerParameters()
  {
    $this->bucket->setX(1);
    $this->assertInternalType('int', $this->bucket->getX());

    $this->bucket->setY(2);
    $this->assertInternalType('int', $this->bucket->getY());
  }

  public function testStringParameters()
  {
    $this->bucket->setColor('o');
    $this->assertInternalType('string', $this->bucket->getColor());
  }

  public function testGetDrawable()
  {
    $this->assertContainsOnlyInstancesOf('DrawingTool\Draw\IDrawable', [$this->bucket->getDrawable()]);
  }
}
