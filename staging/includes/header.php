<?php

// This is the base for all the header links. This allows this *included* file to be placed anywhere in your site.
$URL = "<a href=\"http://www.patrick-enterprises.com/staging/";
// $URL = "<a href=\"http://localhost/";
//(Be sure to include the closing "/")

function base($selected) // Climbs to the top most directory of file hierarchy
	{
	$public_directory = dirname($_SERVER['PHP_SELF']);
	$directory_array = explode('/', $public_directory);
	$public_base = max($directory_array);
   
	if ($public_base==$selected) {
		echo "-selected";
	}
}
?>

    	<ul id="nav">
        	<li id="logo"></li>
        	<li id="nav-home<?php base(NULL); ?>"><?php echo $URL; ?>"><span>Home</span></a></li>
        	<li id="nav-line<?php base("linecard"); ?>"><?php echo $URL; ?>linecard/"><span>Line Card</span></a></li>
        	<li id="nav-contact<?php base("contact"); ?>"><?php echo $URL; ?>contact/"><span>Contact</span></a></li>
        	<li id="nav-tech<?php base("techinfo"); ?>"><?php echo $URL; ?>techinfo/"><span>Tech Info</span></a></li>
        </ul>
        <!-- <?php echo("public_base= " . $public_base . "<br />selected = " . $selected); ?> -->