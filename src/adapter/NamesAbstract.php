<?php

namespace Router\Adapter;
/**
 * Class namesAbstract
 * @package Router\Adapter
 */
abstract class NamesAbstract
{
	public function obj2array($arrObjData, $arrSkipIndices = [])
	{
		$arrData = [];
		if (is_object($arrObjData)) {
			$arrObjData = get_object_vars($arrObjData);
		}
		
		if (is_array($arrObjData)) {
			foreach ($arrObjData as $index => $value) {
				if (is_object($value) || is_array($value)) {
					$value = $this->obj2array($value, $arrSkipIndices);
				}
				if (in_array($index, $arrSkipIndices)) {
					continue;
				}
				$arrData[$index] = $value;
			}
		}
		return $arrData;
	}
}
