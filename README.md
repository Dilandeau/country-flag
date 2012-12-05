h1. Country Flag

Get country flag img tag or png file.

h2. Example usage:

<pre>
	require 'Country_Flag.php';
	
	$flags = new Country_Flag();
	
	echo $flags->getImg("LB");
	echo $flags->getImg("FR");
	echo $flags->getImg("US");
	echo $flags->getImg("BY");
</pre>

The countries corresponding to the codes can be found at "http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2":http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2

Source of icons => http://www.flag-icon.com