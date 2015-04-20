<?php

namespace DrawingTool\CanvasProvider;

/**
 * @author Adam
 * @version 1.0
 */
interface ICanvas
{
  const HORIZONTAL_BORDER = '-';
  const VERTICAL_BORDER = '|';
  const BACKGROUND = ' ';
  const EXTRA_FOR_BORDER = 2;

  public static function get($width, $height);

  public function plot($x, $y, $pixel);

  public function getContentByPixel($x, $y);

  public function __toString();

}
