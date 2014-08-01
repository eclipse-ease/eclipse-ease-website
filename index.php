<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "EASE - Eclipse Advanced Scripting Environment";
	$pageKeywords	= "Eclipse, EASE, Scripting";
	$pageAuthor		= "Christian Pontesegger";

	
	# provide the page content
	$html = <<<EOHTML

<div id="bigbuttons">
	<h3>Primary Links</h3>
	<ul>
		<li><a id="buttonDownload" href="/ease/download/" title="Download">Eclipse
			Distribution, Update Site, Dropins</a></li>
		<li><a id="buttonDocumentation" href="/ease/documentation/"
			title="Documentation">Tutorials, Examples, Videos, Reference Documentation</a></li>
		<li><a id="buttonSupport" href="/ease/support/" title="Support">Bug
			Tracker, Newsgroup, Support</a></li>
		<li><a id="buttonInvolved" href="/ease/developers/" title="Getting Involved">Contributor Guide, Mailing Lists, Wiki</a></li>
	</ul>
</div>


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


<div id="rightcolumn">
	<div class="project_state">
		<a class="incubating" href="http://www.eclipse.org/projects/what-is-incubation.php"><img src="/images/egg-incubation.png" border="0" width=70 alt="Incubation" /></a>
	</div>	
</div>


<div id="rightcolumn">
	<div class="sideitem">
		<h6>Committers</h6>
		
		<ul>
			<li>Christian Pontesegger</li>
			<li>Arthur Daussy (<a href="http://www.obeo.fr/">OBEO</a>)</li>
		</ul>		
	</div>
</div>
				
EOHTML;
	
	
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
