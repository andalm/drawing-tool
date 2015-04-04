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

  public function draw(Canvas $canvas)
  {
    echo "drawing";
  }
}
