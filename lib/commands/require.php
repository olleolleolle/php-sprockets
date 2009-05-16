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
class SprocketCommandRequire extends SprocketCommand 
{	
	/**
	 * Command Exec
	 * @return string Parse file
	 */
	function exec($param, $context) 
	{
		if (preg_match('/\"([^\"]+)\"/', $param, $match)) // "param"
		{
			$fileName = $this->getFileName($context, $match[1]);
			$fileContext = $this->getFileContext($context, $match[1]);
			
			return $this->Sprocket->parseFile($fileName, $fileContext);
		} 
		else if(preg_match('/\<([^\>]+)\>/', $param, $match)) // <param>
		{
			$fileName = $this->getFileName($context, $match[1]);
			$fileContext = $this->Sprocket->baseFolder;
			
			return $this->Sprocket->parseFile($fileName, $fileContext);
		}
		return '';
	}
	
	/**
	 * return filename
	 */
	function getFileName($context, $param) {
		return basename($context.'/'.$param.'.'.$this->Sprocket->fileExt);
	}
	
	function getFileContext($context, $param) {
		return dirname($context.'/'.$param.'.'.$this->Sprocket->fileExt);
	}
}