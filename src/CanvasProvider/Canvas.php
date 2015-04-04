<?php

namespace DrawingTool\CanvasProvider;

use DrawingTool\ParameterValidatorTrait as ValidatorTrait;

/**
 * @author Adam
 * @version 1.0
 * @created 03-abr.-2015 6:20:51 p. m.
 */
class Canvas
{

  private static $canvas;
  private $content = [];
  private $width;
  private $height;
  const BORDER = '-';

  private function __construct($width, $height)
  {
    $this->width = $width;
    $this->height = $height;
  }

  public static function get($width, $height)
  {
    if(self::$canvas === null) {
      ValidatorTrait::validateIntegerParameter($width);
      ValidatorTrait::validateIntegerParameter($height);

      self::$canvas = new Canvas($width, $height);
    }

    return self::$canvas;
  }

  public function getContent()
  {
    return $this->content;
  }

  public function setContent(array $content)
  {
    $this->content = $content;
  }

  /**
   *
   * @param x
   * @param y
   */
  public function getContentByPoint(int $x, int $y)
  {
  }

  protected function createContent()
  {
    echo "create content";
  }

  public function __toString() {
    echo "Print";
  }

}
