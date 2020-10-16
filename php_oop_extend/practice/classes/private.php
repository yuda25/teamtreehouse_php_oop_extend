<?php

class komputer
{
	var $prosesor = "Core i7";
	private $memory = "4 GB";
 
	function get_data()
	{
		return $this->prosesor." - ".$this->memory;
	}
}
 
$komputer_budi = new komputer();
echo $komputer_budi->get_data();