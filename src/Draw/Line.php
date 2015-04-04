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

  public function draw(Canvas $canvas)
  {
    echo "drawing";
  }
}
