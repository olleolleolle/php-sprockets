<?php
/**
 * PHPSprocket - A PHP implementation of Sprocket
 *
 * @package sprocket
 * @subpackage commands
 */

/**
 * SprocketCommand : Require Class
 * 
 */
class SprocketCommandRequire extends SprocketCommand {
	
	/**
	 * Command Exec
	 */
	function exec($param, $context) {
		if(preg_match('/\"([^\"]+)\"/', $param, $match)) {
			return $this->Sprocket->parseJS(basename($context.'/'.$match[1].'.js'), dirname($context.'/'.$match[1].'.js'));
		} else if(preg_match('/\<([^\>]+)\>/', $param, $match)) {
			return $this->Sprocket->parseJS(basename($context.'/'.$match[1].'.js'), $this->baseJs);
		} else return '';
	}
}