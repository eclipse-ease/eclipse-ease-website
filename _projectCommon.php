<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$theme = "solstice";
	
#  	include("sidebar.php");

#    $App->setOGDescription('Jetty is a highly scalable modular servlet engine and http server that natively supports many modern protocols like SPDY and WebSockets.');
#    $App->setOGImage('http://www.eclipse.org/jetty/images/jetty-logo-80x22.png');
    	
	# global settings
	$pageKeywords	= "Eclipse, EASE, Scripting";
    # $App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/ease/css/style.css"/>' . "\n\t");
    # $App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/ease/css/style2.css"/>' . "\n\t");
    $App->SetGoogleAnalyticsTrackingCode("UA-53416191-1");

	
	# project menu (top bar under eclipse logo)
	$Menu->setMenuItemList(array());
	$Menu->addMenuItem("Home", "/ease/", "_self");
	$Menu->addMenuItem("Documentation", "/ease/documentation/", "_self");	$pageTitle 		= "EASE - Eclipse Advanced Scripting Environment";
	
	$Menu->addMenuItem("Support", "/ease/support/", "_self");
	$Menu->addMenuItem("Developers", "/ease/developers/", "_self");


	# Define your project-wide Nav bars here (left column sidebar).
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	$Nav->setLinkList(array());
	$Nav->addNavSeparator("EASE", 	"/ease/");
	# $Nav->addCustomNav("Download", "/ease/download/", "_self", 3);
	$Nav->addCustomNav("Documentation", "/ease/documentation/", "_self", 3);
	$Nav->addCustomNav("Support", "/ease/support/", "_self", 3);
	$Nav->addCustomNav("Getting Involved", "/ease/developers/", "_self", 3);
	
		
	$App->Promotion = TRUE;
	
	
	# add incubation logo
	$incubation = <<<EOHTML

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Incubation Phase</h6>
			<center>
					<a href="/projects/what-is-incubation.php"><img 
	        			src="/images/egg-incubation.png" 
	        			border="0" width=70 alt="Incubation" /></a></td>
	    	</center>
      	</div>
	</div>
			
EOHTML;
?>
