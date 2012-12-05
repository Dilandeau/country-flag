<?php
	$time_start = microtime (true);
	
	require 'Country_Flag.php';
	
	$flags = new Country_Flag();
	
	echo $flags->getImg("LB");
	echo $flags->getImg("FR");
	echo $flags->getImg("US");
	echo $flags->getImg("BY");
	
	$time_end = microtime (true);
	$time = $time_end - $time_start;
	echo  '<p>Durée : '.$time.' secondes</p>';
?>