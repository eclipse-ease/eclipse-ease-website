<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "EASE - Eclipse Advanced Scripting Environment";
	$pageKeywords	= "Eclipse, EASE, Scripting";
	$pageAuthor		= "Christian Pontesegger";

	
	# provide the page content
	$html = <<<EOHTML

<div id="midcolumn">

	<h3>EASE</h3>
	<br/>
	<a href="/projects.eclipse.org/projects/technology.ease">About This Project</a>

	<p>EASE is a scripting environment for Eclipse.<br/>
		It allows to create, maintain and execute script code in the context of the
		running Eclipse instance. 
	</p>

	<p>
	<!-- 
 		<img src="welcome.png" alt="EASE screenshot">
 	-->
	</p>
</div>

{$incubation}

<div id="rightcolumn">
	{file_get_contents('_news.html');}
</div>
				
EOHTML;
	
	
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
