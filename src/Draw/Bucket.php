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

  public function draw(Canvas &$canvas)
  {
    $x        = $this->fill->getX();
    $y        = $this->fill->getY();
    $newColor = $this->fill->getColor();
    $oldColor = $canvas->getContentByPixel($x, $y);

    self::floodFill($x, $y, $newColor, $oldColor, $canvas);
  }

  /**
   * Implementing flood fill algorithm
   * @param  integer $x
   * @param  integer $y
   * @param  string $newColor
   * @param  string $oldColor
   * @param  Canvas &$canvas
   */
  protected static function floodFill($x, $y, $newColor, $oldColor, Canvas &$canvas)
  {
    $pixel = $canvas->getContentByPixel($x, $y);
    if($pixel != null && $pixel == $oldColor && $oldColor != $newColor) {
      $canvas->plot($x, $y, $newColor);
      self::floodFill($x, $y - 1, $newColor, $oldColor, $canvas);
      self::floodFill($x, $y + 1, $newColor, $oldColor, $canvas);
      self::floodFill($x + 1, $y, $newColor, $oldColor, $canvas);
      self::floodFill($x - 1, $y, $newColor, $oldColor, $canvas);
    }
  }
}
