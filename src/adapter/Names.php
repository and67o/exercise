<?php

namespace Router\Adapter;

interface Names
{
	/**
	 * @param string $filePath
	 * @return mixed
	 */
	public function setFile(string $filePath);
	
	/**
	 * @return mixed
	 */
	public function getFile();
	
	public function getCountNames($data);
	
	public function handleNames();
}
