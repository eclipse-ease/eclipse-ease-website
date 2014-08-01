<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "EASE - Developers";
	$pageKeywords	= "Eclipse, EASE, Scripting";
	$pageAuthor		= "Christian Pontesegger";

	
	# provide the page content
	$html = <<<EOHTML

<div id="midcolumn">
	<p>Source code is hosted on gerrit:
		<ul>
			<li><b><a href="https://git.eclipse.org/r/#/admin/projects/ease/org.eclipse.ease.core">org.eclipse.ease.core</a></b>
				- Core framework and script engines (<a href="http://git.eclipse.org/c/ease/org.eclipse.ease.core.git/">browse code</a>)</li>
			<li><b><a href="https://git.eclipse.org/r/#/admin/projects/ease/org.eclipse.ease.scripts">org.eclipse.ease.scripts</a></b>
				- Example scripts (<a href="http://git.eclipse.org/c/ease/org.eclipse.ease.scripts.git/">browse code</a>)</li>
		</ul>
	
		Please read the <a href="http://wiki.eclipse.org/EASE/Contributor_Guide" title="EASE Contributor Guide">Contributor Guide</a> for detailed information.
	</p>

	<p>Developers should consider subscribing to the
		<a href="https://dev.eclipse.org/mailman/listinfo/ease-dev" title="ease-dev Mailing List" rel="nofollow">ease-dev mailing list</a>.
	</p>
</div>

{$incubation}

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
