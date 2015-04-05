<?php

namespace DrawingTool\Draw;

use DrawingTool\CanvasProvider\Canvas;
use DrawingTool\Shape\Rectangle as ShapeRectangle;

/**
 * @author Adam
 * @version 1.0
 * @created 03-abr.-2015 6:20:51 p. m.
 */
class Rectangle implements IDrawable
{
  private $shape;

  function __construct(ShapeRectangle $shape)
  {
    $this->shape = $shape;
  }

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

    //Draw top and bottom borders
    for($x = $x1;$x <= $x2;$x++) {
      $canvas->plot($x, $y1, $boder);
      $canvas->plot($x, $y2, $boder);
    }

    //Draw left and right borders
    for($y = $y1;$y <= $y2;$y++) {
      $canvas->plot($x1, $y, $boder);
      $canvas->plot($x2, $y, $boder);
    }
  }
}
