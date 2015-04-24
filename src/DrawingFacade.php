<?php

namespace DrawingTool;

use DrawingTool\CanvasProvider\Canvas;
use DrawingTool\File;
use DrawingTool\Shape\Line;
use DrawingTool\Shape\Rectangle;
use DrawingTool\Shape\Bucket;

/**
 * @author Adam
 * @version 1.0
 * @created 03-abr.-2015 6:20:51 p. m.
 */
class DrawingFacade
{

  private $canvas;

  /**
   *
   * @param w
   * @param h
   * @param border
   */
  public function createCanvas($w, $h)
  {
    $this->loadFile();
    $this->canvas = Canvas::get($w, $h);
    $this->printCanvas();
    $this->saveFile();
  }

  /**
   *
   * @param x1
   * @param y1
   * @param x2
   * @param y2
   * @param border
   */
  public function drawLine($x1, $y1, $x2, $y2, $border)
  {
    $this->loadFile();

    if($this->canvas != null) {
      $line = new Line($x1, $y1, $x2, $y2, $border);
      $line->getDrawable()->draw($this->canvas);
      $this->printCanvas();
    }

    $this->saveFile();
  }

  /**
   *
   * @param x1
   * @param y1
   * @param x2
   * @param y2
   * @param border
   */
  public function drawRectangle($x1, $y1, $x2, $y2, $border)
  {
    $this->loadFile();

    if($this->canvas != null) {
      $rectangle = new Rectangle($x1, $y1, $x2, $y2, $border);
      $rectangle->getDrawable()->draw($this->canvas);
      $this->printCanvas();
    }

    $this->saveFile();
  }

  /**
   *
   * @param x
   * @param y
   * @param color
   */
  public function fillArea($x, $y, $color)
  {
    $this->loadFile();

    if($this->canvas != null) {
      $fill = new Bucket($x, $y, $color);
      $fill->getDrawable()->draw($this->canvas);
      $this->printCanvas();
    }

    $this->saveFile();
  }

  public function quit()
  {
    File::delete();
  }

  private function loadFile()
  {
    $fileContent = File::getContent();

    if($fileContent != null) {
      $this->canvas = Canvas::get($fileContent['width'], $fileContent['height']);
      $this->canvas->setContent($fileContent['content']);
    }
  }

  private function saveFile()
  {
    if($this->canvas != null) {
      $fileContent = [
        'width' => $this->canvas->getWidth(),
        'height' => $this->canvas->getHeight(),
        'content' => $this->canvas->getContent()
      ];

      File::setContent($fileContent);
    }
  }

  private function printCanvas()
  {
    if($this->canvas != null) {
      echo $this->canvas;
    }
  }

}
