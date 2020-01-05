<?php

namespace Router\Adapter;

class NamesJson extends NamesAbstract implements Names
{
	
	private $file;
	
	public function __construct($filePath)
	{
		$this->setFile($filePath);
	}
	
	public function getFile()
	{
		return $this->file;
	}
	
	public function getCountNames($data)
	{
		return is_array($data) && count($data) ? count($data) : 0;
	}
	
	public function setFile($filePath)
	{
		$this->file = $filePath;
	}
	
	public function handleNames()
	{
		$fileName = $this->getFile();
		return $this->obj2array(json_decode(file_get_contents($fileName)));
	}
}
