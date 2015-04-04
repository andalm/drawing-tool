<?php

namespace DrawingTool\Shape;

use DrawingTool\Exception\UnsupportedMethodException;
use DrawingTool\ParameterValidatorTrait as ValidatorTrait;

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
    ValidatorTrait::validateIntegerParameter($paramter);
  }

  protected static function validateStringParameter($paramter){
    ValidatorTrait::validateStringParameter($paramter);
  }

}
