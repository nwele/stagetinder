<?php
include_once('Routes.php');

class Router {
	
	function __construct(){
		$this->getURI();
	}
	private function getURI() {
		$uri = str_replace("/website_stage/stagetinder/","",$_SERVER["REQUEST_URI"]);
		$uri = str_replace("/", "_", $uri);
		
		if($uri == ""){
			Routes::home();
			return;
		}
		
		if(method_exists('Routes', $uri)) {
			Routes::$uri();
			return;
		}
		
		echo("404");
	}
}

?>