<?php


class House extends Plan
{
	public function whatBuild() : PlanBuilder
	{
		return new BuildHouse();
	}
}
