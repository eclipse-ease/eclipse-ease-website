<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "EASE - Eclipse Advanced Scripting Environment";
	$pageKeywords	= "Eclipse, EASE, Scripting";
	$pageAuthor		= "Christian Pontesegger";
	
	# provide the page content
	
	$html = <<<EOHTML

<div id="midcolumn">
	<h3>EASE</h3>
	<br/>
	<a href="http://projects.eclipse.org/projects/technology.ease">About This Project</a>

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
	<a class="btn btn-block btn-warning sidebutton" href="/ease/download/" title="Update Site, Script Engines">
    	<i class="fa fa-fw fa-download icon"></i>
     	Download EASE
	</a>

	<a class="btn btn-block btn-primary sidebutton" href="/ease/documentation/" title="Tutorials, Examples, API">
    	<i class="fa fa-fw fa-book icon"></i>
     	Documentation
	</a>

	<a class="btn btn-block btn-primary sidebutton" href="/ease/support/" title="Forums, Bug Tracker, Mailing List">
    	<i class="fa fa-fw fa-cogs icon"></i>
     	Support
	</a>

	<a class="btn btn-block btn-primary sidebutton" href="/ease/developers" title="Contributor Guide, Wiki, Mailing List">
    	<i class="fa fa-fw fa-comments-o icon"></i>
     	Developers
	</a>
</div>
				
EOHTML;
	
	
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
