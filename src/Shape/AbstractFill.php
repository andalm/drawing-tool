<?php

namespace DrawingTool\Shape;

/**
 * @author Adam
 * @version 1.0
 * @created 03-abr.-2015 6:20:51 p. m.
 */
abstract class AbstractFill extends AbstractObject
{

  private $color;
  private $x;
  private $y;

  /**
   * Gets the value of color.
   *
   * @return string
   */
  public function getColor()
  {
    return $this->color;
  }

  /**
   * Sets the value of color.
   *
   * @param string $color the color
   */
  public function setColor($color)
  {
    parent::validateStringParameter($color);
    $this->color = $color;
  }

  /**
   * Gets the value of x.
   *
   * @return integer
   */
  public function getX()
  {
    return $this->x;
  }

  /**
   * Sets the value of x.
   *
   * @param intger $x
   */
  public function setX($x)
  {
    parent::validateIntegerParameter($x);
    $this->x = $x;
  }

  /**
   * Gets the value of y.
   *
   * @return integer
   */
  public function getY()
  {
    return $this->y;
  }

  /**
   * Sets the value of y.
   *
   * @param intger $y
   */
  public function setY($y)
  {
    parent::validateIntegerParameter($y);
    $this->y = $y;
  }
}
