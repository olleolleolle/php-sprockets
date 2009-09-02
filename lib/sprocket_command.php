<?php
/**
 * PHPSprocket - A PHP implementation of Sprocket
 *
 * @package sprocket
 * @subpackage libs
 */

/**
 * SprocketCommand Class
 * 
 * @author Kjell Bublitz
 */
class SprocketCommand {

	/**
	 * Sprocket Object
	 * @var object
	 */
	public $Sprocket;
	
	/**
	 * Command Constructor
	 */
	public function __construct(&$sprocket) {
		$this->Sprocket = $sprocket;
	}
	
	/**
	 * Return filename
	 */
	public function getFileName($context, $param) {
		return basename($context.'/'.$param.'.'.$this->Sprocket->fileExt);
	}
	
	/**
	 * Return filecontext
	 */
	public function getFileContext($context, $param) {
		return dirname($context.'/'.$param.'.'.$this->Sprocket->fileExt);
	}
}