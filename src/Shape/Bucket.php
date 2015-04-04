<?php

namespace DrawingTool\Shape;

use DrawingTool\Draw\Bucket as DrawBucket;

/**
 * @author Adam
 * @version 1.0
 * @created 03-abr.-2015 6:20:51 p. m.
 */
class Bucket extends AbstractFill
{

  public function __construct($x, $y, $color)
  {
    $this->setX($x);
    $this->setY($y);
    $this->setColor($color);
  }

  public function getDrawable()
  {
    return new DrawBucket($this);
  }
}
