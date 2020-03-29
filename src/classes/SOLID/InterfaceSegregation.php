<?php
// Прницип разделения интерфйса


class Apple implements PhoneMemory {
	
	public function getIphoneMemory(){}
	
	public function getSonyMemory(){}
}

class AppleV2 implements IphoneMemory {
	
	public function getIphoneMemory()
	{
		// TODO: Implement getIphoneMemory() method.
	}
}

