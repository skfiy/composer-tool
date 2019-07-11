<?php 

namespace composer;

class demo

{
	private $id;

	public function	__construct($u = 1)
	{
		$this->id = $u;
	}


	public function index()
	{

		echo 	$this->id;

	}

}





?>