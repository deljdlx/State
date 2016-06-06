<?php


namespace State;



class Element
{



	protected $states=array();

	public function __construct() {

	}


	public function getObservation() {

		$observation=new Observation($this);
		return $observation;


	}






}

