<?php

require_once __DIR__.'/../vendor/autoload.php';

use DrawingTool\DrawingFacade;

$drawing = new DrawingFacade();

try{
  switch ($argv[1]) {
    case 'C':
      $drawing->createCanvas(intval($argv[2]), intval($argv[3]));
      break;
    case 'L':
      $drawing->drawLine(intval($argv[2]), intval($argv[3]), intval($argv[4]), intval($argv[5]), 'x');
      break;
    case 'R':
      $drawing->drawRectangle(intval($argv[2]), intval($argv[3]), intval($argv[4]), intval($argv[5]), 'x');
      break;
    case 'B':
      $drawing->fillArea(intval($argv[2]), intval($argv[3]), $argv[4]);
      break;
    case 'Q':
      $drawing->quit();
      break;
    default:
      echo "WTF!! :(";
      break;
  }
} catch(InvalidArgumentException $e) {
  echo 'Missing parameter';
}

