<?php

namespace DrawingTool\Shape;

use DrawingTool\Exception\UnsupportedMethodException;

/**
 * @author Adam
 * @version 1.0
 * @created 03-abr.-2015 6:20:51 p. m.
 */
abstract class AbstractObject
{

  public function getDrawable()
  {
    throw new UnsupportedMethodException();
  }

  protected static function validateIntegerParameter($paramter){
    if(!is_integer($paramter) || $paramter <= 0)
      throw new \InvalidArgumentException(
        'This function only accepts integers and greater than 0. '.
        'Input was: '. $paramter
      );
  }

  protected static function validateStringParameter($paramter){
    if(!is_string($paramter))
      throw new \InvalidArgumentException(
        'This function only accepts strings. '.
        'Input was: '. $paramter
      );
  }

}
