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
 * @version 0.1
 */
class SprocketCommand {

	/**
	 * Sprocket Object
	 * @var object
	 */
	var $Sprocket;
	
	/**
	 * Command Constructor
	 */
	function __construct(&$sprocket) {
		$this->Sprocket = $sprocket;
	}
	
}