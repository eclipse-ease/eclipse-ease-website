<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "EASE - Eclipse Advanced Scripting Environment";
	$pageKeywords	= "Eclipse, EASE, Scripting";
	$pageAuthor		= "Christian Pontesegger";

    $App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/ease/css/button.css"/>' . "\n\t");
    $App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"/>' . "\n\t");
	
	# provide the page content
	$news = file_get_contents('_news.html');
	
	$html = <<<EOHTML

<div id="midcolumn">


<a class="button" href="/ease/support/">
	<span class="fa-stack fa-3x icon">
  		<i class="fa fa-square-o fa-stack-2x"></i>
  		<i class="fa fa-cogs fa-stack-1x"></i>
	</span>
  	<h1>Support</h1>
  	<span class="details">
	  	Bug Tracker, Forums, Mailing List
  	</span>
</a>

<a class="button" href="/ease/download/">
	<span class="fa-stack fa-3x icon">
  		<i class="fa fa-square-o fa-stack-2x"></i>
  		<i class="fa fa-download fa-stack-1x"></i>
	</span>
  	<h1>Download</h1>
  	<span class="details">
	  	 Update Site, Script Engines
  	</span>
</a>
<br/>
<a class="button" href="/ease/documentation/">
	<span class="fa-stack fa-3x icon">
  		<i class="fa fa-square-o fa-stack-2x"></i>
  		<i class="fa fa-mortar-board fa-stack-1x"></i>
	</span>
  	<h1>Documentation</h1>
  	<span class="details">
	  	Tutorials, Examples, API
  	</span>
</a>

<a class="button" href="/ease/developers/">
	<span class="fa-stack fa-3x icon">
  		<i class="fa fa-square-o fa-stack-2x"></i>
  		<i class="fa fa-comments-o fa-stack-1x"></i>
	</span>
  	<h1>Getting Involved</h1>
  	<span class="details">
	  	Contributor Guide, Wiki, Mailing List
  	</span>
</a>












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
	{$news}
</div>
				
EOHTML;
	
	
	# Generate the web page
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
