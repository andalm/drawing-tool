<?php

namespace DrawingTool\Draw;



use \CanvasProvider;

/**
 * @author Adam
 * @version 1.0
 * @created 03-abr.-2015 6:20:51 p. m.
 */
interface IDrawable
{

	public function draw();

	/**
	 *
	 * @param &$canvas
	 */
	public function setCanvas(Canvas &$canvas);

}
