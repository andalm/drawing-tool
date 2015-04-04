<?php

namespace DrawingTool;

trait ParameterValidatorTrait
{
  public static function validateIntegerParameter($paramter){
    if(!is_integer($paramter) || $paramter <= 0)
      throw new \InvalidArgumentException(
        'This function only accepts integers and greater than 0. '.
        'Input was: '. $paramter
      );
  }

  public static function validateStringParameter($paramter){
    if(!is_string($paramter))
      throw new \InvalidArgumentException(
        'This function only accepts strings. '.
        'Input was: '. $paramter
      );
  }
}
