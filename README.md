##Country Flag

Get country flag img tag or png file.

###Example usage:

	require 'Country_Flag.php';
	
	$flags = new Country_Flag();
	
	echo $flags->getImg("US");
	// Or
	$png = $flags->getPng("US");

The countries corresponding to the codes can be found at "http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2":http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2

Source of icons => http://www.flag-icon.com