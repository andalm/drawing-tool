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
    if(count($content) != $this->height ||
       count($content[0]) != $this->width) {
      throw new \InvalidArgumentException(
        'The new content have other size '
      );
    }
    $this->content = $content;
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

    if($this->width < $x || $this->height < $y) {
      throw new \InvalidArgumentException(
        'The point not can be out the canvas '.
        'The point was: x = '. $x . ' and y = ' . $y
      );
    }

    return $this->content[$y][$x];
  }

  public function addDraw(IDrawable $shape)
  {
    $this->setContent($shape->draw($this));
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

  public function __toString()
  {
    $string = '';
    //create up and down borders
    $upDownBorder = str_repeat(self::HORIZONTAL_BORDER, $this->width + self::EXTRA_FOR_BORDER);

    //Add up border
    $string .= $upDownBorder . "\n";

    foreach($this->content as $row) {
      $string .=
        self::VERTICAL_BORDER . implode("", $row) . self::VERTICAL_BORDER . "\n";
    }

    //Add down border
    $string .= $upDownBorder . "\n";

    return $string;
  }
}
