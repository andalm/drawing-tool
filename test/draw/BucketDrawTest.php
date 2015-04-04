<?php

use DrawingTool\Draw\Bucket;
use DrawingTool\Shape\Bucket as FillBucket;
use DrawingTool\CanvasProvider\Canvas;

class BucketDrawTest extends PHPUnit_Framework_TestCase
{
  private $bucket;

  public function __construct()
  {
    parent::__construct();
    $this->bucket = new Bucket(new FillBucket(1, 2, 'c'));
  }

  public function testDraw()
  {
    //$this->bucket->draw();
  }
}
