<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "EASE - Developers";
	$pageKeywords	= "Eclipse, EASE, Scripting";
	$pageAuthor		= "Christian Pontesegger";

	
	# provide the page content
	$html = <<<EOHTML

<div id="midcolumn">
	<p>Source code is hosted on gerrit:</p>
	
	<ul class="nobullet">
		<li><i class="fa fa-fw fa-git-square bullet"></i>
			<a href="https://git.eclipse.org/r/#/admin/projects/ease/org.eclipse.ease.core">org.eclipse.ease.core</a>
			- Core framework and script engines (<a href="http://git.eclipse.org/c/ease/org.eclipse.ease.core.git/">browse</a>)</li>
		<li><i class="fa fa-fw fa-git-square bullet"></i>
			<a href="https://git.eclipse.org/r/#/admin/projects/ease/org.eclipse.ease.modules">org.eclipse.ease.modules</a>
			- Additional modules (script libraries) (<a href="http://git.eclipse.org/c/ease/org.eclipse.ease.modules.git/">browse</a>)</li>
		<li><i class="fa fa-fw fa-git-square bullet"></i>
			<a href="https://git.eclipse.org/r/#/admin/projects/ease/org.eclipse.ease.scripts">org.eclipse.ease.scripts</a>
			- Useful scripts & tutorials (<a href="http://git.eclipse.org/c/ease/org.eclipse.ease.scripts.git/">browse</a>)</li>
	</ul>
		
	<p>Some additional components are hosted on github:</p>
		
	<ul class="nobullet">
		<li><i class="fa fa-fw fa-github bullet"></i>
			<a href="https://github.com/eclipse-ease-addons/jython">eclipse-ease-addons/jython</a>
			- Jython interpreter & debugger</li>
		<li><i class="fa fa-fw fa-github bullet"></i>
			<a href="https://github.com/eclipse-ease-addons/groovy">eclipse-ease-addons/groovy</a>
			- Groovy interpreter</li>
		<li><i class="fa fa-fw fa-github bullet"></i>
			<a href="https://github.com/eclipse-ease-addons/jruby">eclipse-ease-addons/jruby</a>
			- JRuby interpreter</li>
	</ul>
	
	<p>Please read the <a href="http://wiki.eclipse.org/EASE/Contributor_Guide" title="EASE Contributor Guide">Contributor Guide</a> for detailed information.</p>

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
