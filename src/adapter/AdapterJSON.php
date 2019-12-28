<?php


namespace Router\Adapter;


use Router\Adapter\NamesProcess;

class AdapterJSON implements Names
{
	/**
	 * @var DataLoader
	 */
	private $file;
	
	public function __construct(DataLoader $file)
	{
		$this->file = $file;
	}
	
	public function setFile($filePath)
	{
		// TODO: Implement setFile() method.
	}
	
	public function getFile()
	{
		// TODO: Implement getFile() method.
	}
	
	public function getCountNames($data)
	{
		return count($data);
	}
	
	public function handleNames()
	{
		return $this->file->readXML();
	}
}
