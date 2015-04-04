<?php

namespace DrawingTool\Exception;

class UnsupportedMethodException extends \Exception
{
  public function __construct(){
    parent::__construct('Unsupported Method Exception', 0, null);
  }

  public function __toString()
  {
    return get_class($this) . " '{$this->message}'\n"
                            . "{$this->getTraceAsString()}";
  }
}
