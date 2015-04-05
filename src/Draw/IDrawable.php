<?php

namespace DrawingTool\Draw;

use DrawingTool\CanvasProvider\Canvas;

/**
 * @author Adam
 * @version 1.0
 * @created 03-abr.-2015 6:20:51 p. m.
 */
interface IDrawable
{
  /**
   * @param  Canvas $canvas
   * @return array content
   */
  public function draw(Canvas &$canvas);
}
