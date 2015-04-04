<?php

namespace DrawingTool\Shape;

/**
 * @author Adam
 * @version 1.0
 * @created 03-abr.-2015 6:20:51 p. m.
 */
abstract class AbstractShape extends AbstractObject
{

  private $border;
  private $x1;
  private $x2;
  private $y1;
  private $y2;

  /**
   * Gets the value of border.
   *
   * @return string
   */
  public function getBorder()
  {
    return $this->border;
  }

  /**
   * Sets the value of border.
   *
   * @param {string} $border the border
   *
   */
  public function setBorder($border)
  {
    parent::validateStringParameter($border);
    $this->border = $border;
  }

  /**
   * Gets the value of x1.
   *
   * @return integer
   */
  public function getX1()
  {
    return $this->x1;
  }

  /**
   * Sets the value of x1.
   *
   * @param mixed $x1 the x1
   */
  public function setX1($x1)
  {
    parent::validateIntegerParameter($x1);
    $this->x1 = $x1;
  }

  /**
   * Gets the value of x2.
   *
   * @return integer
   */
  public function getX2()
  {
    return $this->x2;
  }

  /**
   * Sets the value of x2.
   *
   * @param integer
   */
  public function setX2($x2)
  {
    parent::validateIntegerParameter($x2);
    $this->x2 = $x2;
  }

  /**
   * Gets the value of y1.
   *
   * @return integer
   */
  public function getY1()
  {
    return $this->y1;
  }

  /**
   * Sets the value of y1.
   *
   * @param integer
   */
  public function setY1($y1)
  {
    parent::validateIntegerParameter($y1);
    $this->y1 = $y1;
  }

  /**
   * Gets the value of y2.
   *
   * @return integer
   */
  public function getY2()
  {
    return $this->y2;
  }

  /**
   * Sets the value of y2.
   *
   * @param integer
   */
  public function setY2($y2)
  {
    parent::validateIntegerParameter($y2);
    $this->y2 = $y2;
  }
}
