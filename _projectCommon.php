<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$theme = "solstice";
	
	# --------------------------------------------------------------------------------
	# global settings
	# --------------------------------------------------------------------------------
    	
	$pageKeywords	= "Eclipse, EASE, Scripting";
    $App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/ease/css/style.css"/>' . "\n\t");
    $App->SetGoogleAnalyticsTrackingCode("UA-53416191-1");
#    $App->setOGDescription('Jetty is a highly scalable modular servlet engine and http server that natively supports many modern protocols like SPDY and WebSockets.');
#    $App->setOGImage('http://www.eclipse.org/jetty/images/jetty-logo-80x22.png');

	// enable promotions for eg EclipseCon
	# $App->Promotion = TRUE;


	# --------------------------------------------------------------------------------
	# project menu (horizontal, below eclipse logo)
	# --------------------------------------------------------------------------------
	
	$Menu->setMenuItemList(array());
	$Menu->addMenuItem("Home", "/ease/", "_self");
	$Menu->addMenuItem("Documentation", "/ease/documentation/", "_self");
	$Menu->addMenuItem("Support", "/ease/support/", "_self");
	$Menu->addMenuItem("Developers", "/ease/developers/", "_self");


	# --------------------------------------------------------------------------------
	# add navigation
	# --------------------------------------------------------------------------------

	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	$Nav->setLinkList(array());

	$Nav->addNavSeparator("EASE",		"/ease/");
	$Nav->addCustomNav("Documentation",	"/ease/documentation/", "_self", 3);
	$Nav->addCustomNav("Support",		"/ease/support/", "_self", 3);
	$Nav->addCustomNav("Developers",	"/ease/developers/", "_self", 3);
	
	$Nav->addNavSeparator("Actions",	null);
	$Nav->addCustomNav("Ask question",	"https://www.eclipse.org/forums/index.php/f/292/", "_self", 3);
	$Nav->addCustomNav("Contribute",	"http://wiki.eclipse.org/EASE/Contributor_Guide", "_self", 3);
	$Nav->addCustomNav("Report Bug",	"https://bugs.eclipse.org/bugs/enter_bug.cgi?product=EASE&amp;rep_platform=All&amp;op_sys=All", "_self", 3);
	
	
	# --------------------------------------------------------------------------------
	# add incubation logo code (to be implemented on each page)
	# --------------------------------------------------------------------------------
	
	$incubation = <<<EOHTML

	<div id="rightcolumn">
		<div class="project_state">
			<a href="/projects/what-is-incubation.php"><img src="/images/egg-incubation.png" border="0" width="98" height="128" alt="Incubation" /></a>
      	</div>
	</div>
			
EOHTML;
?>
