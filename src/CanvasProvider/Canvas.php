<?php

namespace DrawingTool\CanvasProvider;

use DrawingTool\ParameterValidatorTrait as ValidatorTrait;
use DrawingTool\Draw\IDrawable;

/**
 * @author Adam
 * @version 1.0
 * @created 03-abr.-2015 6:20:51 p. m.
 */
class Canvas
{

  private static $canvas;
  private $content;
  private $width;
  private $height;
  const HORIZONTAL_BORDER = '-';
  const VERTICAL_BORDER = '|';
  const BACKGROUND = ' ';
  const EXTRA_FOR_BORDER = 2;

  private function __construct($width, $height)
  {
    $this->width = $width;
    $this->height = $height;
    $this->createContent();
  }

  public static function get($width, $height)
  {
    if(self::$canvas === null) {
      ValidatorTrait::validateIntegerParameter($width);
      ValidatorTrait::validateIntegerParameter($height);

      if($width == 0 || $height == 0) {
        throw new \InvalidArgumentException(
          'The size not can be 0'
        );
      }

      self::$canvas = new Canvas($width, $height);
    }

    return self::$canvas;
  }

  public function plot($x, $y, $pixel)
  {
    ValidatorTrait::validateIntegerParameter($x);
    ValidatorTrait::validateIntegerParameter($y);
    ValidatorTrait::validateStringParameter($pixel);
    if($y < $this->height && $x < $this->width) {
      $this->content[$y][$x] = $pixel;
    }
  }

  /**
   * @param x
   * @param y
   * @return string pixel of canvas
   */
  public function getContentByPixel($x, $y)
  {
    ValidatorTrait::validateIntegerParameter($x);
    ValidatorTrait::validateIntegerParameter($y);
    if($y < $this->height && $x < $this->width) {
      return $this->content[$y][$x];
    }

    return null;
  }

  protected function createContent()
  {
    //Create the background canvas
    $row = array_fill(0, $this->width, self::BACKGROUND);
    //add background to content
    $this->content = array_fill(0, $this->height, $row);
  }

  /**
   * Gets the value of width.
   *
   * @return integer
   */
  public function getWidth()
  {
    return $this->width;
  }

  /**
   * Gets the value of height.
   *
   * @return integer
   */
  public function getHeight()
  {
    return $this->height;
  }

  public function getContent()
  {
    return $this->content;
  }

  public function setContent(array $content)
  {
    if(count($content) != $this->height ||
       count($content[0]) != $this->width) {
      throw new \InvalidArgumentException(
        'The new content have other size '
      );
    }
    $this->content = $content;
  }

  public function __toString()
  {
    $string = '';
    //create top and bottom borders
    $topBottomBorder =
      str_repeat(self::HORIZONTAL_BORDER, $this->width + self::EXTRA_FOR_BORDER) . "\n";
    //Add top border
    $string .= $topBottomBorder;

    foreach($this->content as $row) {
      $string .=
        self::VERTICAL_BORDER . implode("", $row) . self::VERTICAL_BORDER . "\n";
    }

    //Add bottom border
    $string .= $topBottomBorder;
    return $string;
  }
}
