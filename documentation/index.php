<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "EASE Documentation";
	$pageKeywords	= "Eclipse, EASE, Scripting";
	$pageAuthor		= "Christian Pontesegger";

	
	# provide the page content
	$html = <<<EOHTML

<div id="midcolumn">
	<h3><i class="fa fa-fw fa-book"></i> Documentation</h3>
	<p>
      <ul class="nobullet">
	  <li><a href="https://wiki.eclipse.org/EASE">Wiki main page</a></li>
	  <li><a href="https://wiki.eclipse.org/EASE/Scripts">Script management</a></li>
	  <li><a href="https://wiki.eclipse.org/EASE/Engines">Supported script engines</a></li>
	  <li><a href="https://wiki.eclipse.org/EASE/Modules">Provided modules</a></li>
	  </ul>
	</p>
	<h3><i class="fa fa-fw fa-book"></i> Presentations</h3>
	<p>
      <dl class="nobullet">
      	<dd>EclipseCon Europe 2016</dd>
      	<dt>Elevate your IDE with scripts (<a href="https://youtu.be/K9ERWs2ixZY">watch on youtube</a>)</dt>
      	
      	<dd>EclipseCon Europe 2015</dd>
      	<dt>(slides <a href="presentations/eclipsecon_europe_2015/index.html">online</a> and <a href="presentations/eclipsecon_europe_2015.zip">zipped</a>)</dt>      	
	  </dl>
	</p>
</div>

{$incubation}
				
EOHTML;
	
	
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
