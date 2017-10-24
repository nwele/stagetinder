<?php
include_once("classes/Router.php");

$GLOBALS["config"]=[
	"appnaam"=>"stagetinder", 
	"root"=>"/website_stage/stagetinder/",
	"database"=>[
		"host"=>"",
		"database"=>"",
		"gebruikersnaam"=>"",
		"wachtwoord"=>""
	]
];
new Router;