<?php

namespace Router\Adapter;

use SimpleXMLElement;

class DataLoader extends namesAbstract implements NamesProcess
{
	private $file;
	
	public function setFile($xml) {
		$this->file = $xml;
	}
	
	public function __construct($xml)
	{
		$this->setFile($xml);
	}
	
	public function readXML()
	{
		$this->_removeNs0();
		$this->_addDefaultXmlTag();
		$data = new SimpleXMLElement($this->file);
		return $this->obj2array($data);
	}
	
	private function _removeNs0()
	{
		return str_replace('ns0:', '', $this->file);
	}
	
	private function _addDefaultXmlTag()
	{
		return '<?xml version="1.0" encoding="UTF-8"?>' . $this->file;
	}
	
}
