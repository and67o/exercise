<?php


class Flat extends Plan
{
	
	public function whatBuild() : PlanBuilder
	{
		return new BuildFlat();
	}
}
