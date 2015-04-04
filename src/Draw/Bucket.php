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
  private $fill;

  function __construct(FillBucket $fill)
  {
    $this->fill = $fill;
  }

  public function draw(Canvas $canvas)
  {
    echo "drawing";
  }
}
