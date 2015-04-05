<?php

namespace DrawingTool\Draw;

use DrawingTool\CanvasProvider\Canvas;
use DrawingTool\Shape\Line as ShapeLine;

/**
 * @author Adam
 * @version 1.0
 * @created 03-abr.-2015 6:20:51 p. m.
 */
class Line implements IDrawable
{
  private $shape;

  function __construct(ShapeLine $shape)
  {
    $this->shape = $shape;
  }

  /**
   * Line drawing algorithm
   * @param  Canvas $canvas
   * @return array content
   */
  public function draw(Canvas &$canvas)
  {
    $x1    = $this->shape->getX1();
    $y1    = $this->shape->getY1();
    $x2    = $this->shape->getX2();
    $y2    = $this->shape->getY2();
    $boder = $this->shape->getBorder();

    if($x1 > $x2) {
      $x1 = $x2;
      $x2 = $this->shape->getX1();
    }

    if($y1 > $y2) {
      $y1 = $y2;
      $y2 = $this->shape->getY1();
    }

    $dx = $x2 - $x1;
    $dy = $y2 - $y1;
    if($dx != 0) {
      for($x = $x1;$x <= $x2;$x++) {
        $y = intval($y1 + $dy * ($x - $x1) / $dx);
        $canvas->plot($x, $y, $boder);
      }
    } else {
      for($y = $y1;$y <= $y2;$y++) {
        $canvas->plot($x1, $y, $boder);
      }
    }
  }
}
