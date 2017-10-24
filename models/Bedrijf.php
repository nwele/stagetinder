<?php

include_once("User.php");

class Bedrijf extends User{
	
	private $geslacht;
	private $begeleider;
	
	function __construct($uuid, $naam, $email, $adres, $telefoonnummer, $geslacht, $begeleider){
		$this->uuid=$uuid;
		$this->naam=$naam;
		$this->email=$email;
		$this->adres=$adres;
		$this->telefoonnummer=$telefoonnummer;
		$this->geslacht=$geslacht;
		$this->begeleider=$begeleider;
	}
	
	function create_bedrijf(){
		
	}
}