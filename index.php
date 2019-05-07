<?php

$arrContextOptions=array(
	    "ssl"=>array(
	        "verify_peer"=>false,
	        "verify_peer_name"=>false,
	    ),
	);  
if wordpress plugin
file_get_contents(plugin_dir_url( __FILE__ ) . "lib/forms/step1/index.php", false, stream_context_create($arrContextOptions));	

if simple file

file_get_contents( "www.https://loeion.com/lib/forms/step1/index.php", false, stream_context_create($arrContextOptions));	
