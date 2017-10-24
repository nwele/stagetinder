<?php

include_once("models/Leerling.php");
include_once("models/Bedrijf.php");

$pietje=new Leerling(
	"abc", "pietje", "pietje@gmail.com", "venray", "06-111111", 116149, "09-07-1999", "ao", 4
);

var_dump($pietje);

$arrow=new Bedrijf (
	"abc",  "arrow", "arrow@gmail.com", "venlo", "06-0000000", "m", "jan"
);

var_dump($arrow);
