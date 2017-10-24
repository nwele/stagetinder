<?php

include_once("User.php");

class Leerling extends User{
	private $ovnummer;
	private $geboortedatum;
	private $opleiding;
	private $niveau;
	
	function __construct($uuid, $naam, $email, $adres, $telefoonnummer, $ovnummer, $geboortedatum, $opleiding,  $niveau){
		$this->uuid=$uuid;
		$this->naam=$naam;
		$this->email=$email;
		$this->adres=$adres;
		$this->telefoonnummer=$telefoonnummer;
		$this->ovnummer=$ovnummer;
		$this->geboortedatum=$geboortedatum;
		$this->opleiding=$opleiding;
		$this->niveau=$niveau;
	}
	
	function create_leerling(){
		
	}
}

