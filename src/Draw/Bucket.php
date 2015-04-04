<?php

namespace DrawingTool\Draw;

use DrawingTool\CanvasProvider\Canvas;
use DrawingTool\Shape\Bucket as FillBucket;

/**
 * @author Adam
 * @version 1.0
 * @created 03-abr.-2015 6:20:51 p. m.
 */
class Bucket implements IDrawable
{
  private $canvas;
  private $fill;

  function __construct(FillBucket $fill, Canvas &$canvas)
  {
    $this->fill = $fill;
    $this->canvas = $canvas;
  }

  public function draw()
  {
    echo "drawing";
  }
}
