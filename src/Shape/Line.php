<?php

namespace DrawingTool\Shape;

use DrawingTool\Draw\Line as DrawLine;

/**
 * @author Adam
 * @version 1.0
 * @created 03-abr.-2015 6:20:51 p. m.
 */
class Line extends AbstractShape
{

  public function __construct($x1, $y1, $x2, $y2, $border)
  {
    $this->setX1($x1);
    $this->setY1($y1);
    $this->setX2($x2);
    $this->setY2($y2);
    $this->setBorder($border);
  }

  public function getDrawable()
  {
    return new DrawLine($this);
  }
}
