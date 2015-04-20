<?php

namespace DrawingTool;

use DrawingTool\CanvasProvider\Canvas;

/**
 * @author Adam
 * @version 1.0
 * @created 03-abr.-2015
 */
class File
{

  private static $fileName = 'canvas.txt';
  private static $dir = __DIR__ . '\\..\\data\\';

  private function __construct() {}

  /**
   * Get content of file
   * @return Canvas
   */
  public static function getContent()
  {
    $fileContent = null;

    if(file_exists(self::$dir . self::$fileName)) {
      $fileContent = json_decode( file_get_contents(self::$dir . self::$fileName), true );
    }

    return $fileContent;
  }

  /**
   * Save data in file
   * @param canvas
   */
  public static function setContent(array $fileContent)
  {
    return file_put_contents(self::$dir . self::$fileName, json_encode($fileContent));
  }

  public static function deleteFile()
  {
    return unlink(self::$dir . self::$fileName);
  }
}
