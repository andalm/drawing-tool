<?php

namespace DrawingTool;

use CanvasProvider;

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
	public function createCanvas(int $w, int $h, string $border)
	{
	}

	/**
	 *
	 * @param x1
	 * @param y1
	 * @param x2
	 * @param y2
	 * @param border
	 */
	public function drawLine(int $x1, int $y1, int $x2, int $y2, string $border)
	{
	}

	/**
	 *
	 * @param x1
	 * @param y1
	 * @param x2
	 * @param y2
	 * @param border
	 */
	public function drawRectangle(int $x1, int $y1, int $x2, int $y2, string $border)
	{
	}

	/**
	 *
	 * @param x
	 * @param y
	 * @param color
	 */
	public function fillArea(int $x, int $y, string $color)
	{
	}

	private function loadFile()
	{
	}

	private function saveFile()
	{
	}

}
