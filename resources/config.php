<?php 
$config = array(
	"db"=> array(
		"organograma"=>array(
		"dbname"=> "organograma",
		"username" => "root",
		"password" => "umbrella360",
		"host" => "localhost"			
		)
	),
	"urls" => array(
			"baseUrl" => "http://example.com"
	),
	"paths" => array(
			"resources" => "/path/to/resources",
			"images" => array(
					"content" => $_SERVER["DOCUMENT_ROOT"] . "/images/content",
					"layout" => $_SERVER["DOCUMENT_ROOT"] . "/images/layout"
			)
		)	
);

defined("TEMPLATES_PATH")
or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));

/*
 Error reporting.
 */
		ini_set("error_reporting", "true");
		error_reporting(E_ALL|E_STRCT);

?>