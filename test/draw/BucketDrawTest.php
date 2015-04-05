<?php

use DrawingTool\Draw\Bucket;
use DrawingTool\Shape\Bucket as FillBucket;
use DrawingTool\Shape\Rectangle;
use DrawingTool\CanvasProvider\Canvas;

class BucketDrawTest extends PHPUnit_Framework_TestCase
{
  private $bucket;

  public function __construct()
  {
    parent::__construct();
    $this->bucket = new Bucket(new FillBucket(40, 7, 'o'));
  }

  public function testDraw()
  {
    $canvas = Canvas::get(50, 10);
    $rectangle = new Rectangle(38, 5, 47, 8, 'x');
    $rectangle->getDrawable()->draw($canvas);
    $this->bucket->draw($canvas);
    $expected = "----------------------------------------------------\n" .
                "|                                                  |\n" .
                "|                                                  |\n" .
                "|                                                  |\n" .
                "|                                                  |\n" .
                "|                                                  |\n" .
                "|                                      xxxxxxxxxx  |\n" .
                "|                                      xoooooooox  |\n" .
                "|                                      xoooooooox  |\n" .
                "|                                      xxxxxxxxxx  |\n" .
                "|                                                  |\n" .
                "----------------------------------------------------\n";

    $this->assertEquals($canvas->__toString(), $expected);
  }
}
