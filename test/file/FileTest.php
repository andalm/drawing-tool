<?php

use DrawingTool\File;
use DrawingTool\CanvasProvider\Canvas;

class FileTest extends PHPUnit_Framework_TestCase
{
  public function testSaveContent()
  {
    $canvas = Canvas::get(50, 10);
    $fileContent = [
      'width' => $canvas->getWidth(),
      'height' => $canvas->getHeight(),
      'content' => $canvas->getContent()
    ];

    $this->assertInternalType('int', File::setContent($fileContent));
  }

  public function testGetContent()
  {
    $fileContent = File::getContent();
    $canvas = Canvas::get($fileContent['width'], $fileContent['height']);
    $canvas->setContent($fileContent['content']);
    $this->assertContainsOnlyInstancesOf('DrawingTool\CanvasProvider\Canvas', [$canvas]);
  }


  public function testDeleteFile()
  {
    $this->assertTrue(File::delete());
  }
}
