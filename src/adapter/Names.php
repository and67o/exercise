<?php
namespace Router\Adapter;

interface Names
{
	
	public function setFile($filePath);
	
	public function getFile();
	
	public function getCountNames($data);
	
	public function handleNames();
}
