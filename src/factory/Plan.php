<?php


abstract class Plan
{
	abstract public function whatBuild() : PlanBuilder;
	
	public function buildProcces() {
		$whatBuild = $this->whatBuild();
		$whatBuild->plan();
		$whatBuild->startBuilding();
		$whatBuild->startBuilding();
	}
}
