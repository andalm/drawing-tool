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

  private $canvas;
  private $shape;

  function __construct(ShapeLine $shape, Canvas &$canvas)
  {
    $this->shape = $shape;
    $this->canvas = $canvas;
  }

  public function draw()
  {
    echo "drawing";
  }
}
