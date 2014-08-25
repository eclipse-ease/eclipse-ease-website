<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "EASE - News";
	$pageKeywords	= "Eclipse, EASE, Scripting";
	$pageAuthor		= "Christian Pontesegger";

	
	# provide the page content
	$html = <<<EOHTML

<div id="midcolumn">
	<h3><i class="fa fa-fw fa-bolt"></i> News</h3>

	<dl class="news">
		<dt><i class="fa fa-fw fa-cogs bullet"></i>
			Java 8 Nashorn engine preview
		</dt>
		<dd>Implemented draft of a Groovy engine. You may find the update site location in the <a href="/ease/download">download section</a>.
			<div class="date">2014/08/25</div></dd>

		<dt><i class="fa fa-fw fa-cogs bullet"></i>
			Java 8 Nashorn engine preview
		</dt>
		<dd>Just implemented a draft version of the Nashorn JavaScript engine from Java 8. Available on the nightly update site.
			<div class="date">2014/08/21</div></dd>

		<dt><i class="fa fa-fw fa-download bullet"></i>
			Nightly update site available
		</dt>
		<dd>We have an automated nightly build available which feeds our nightly update site:<br />
			<span class="p2site" onclick="javascript:prompt('Hit Ctrl-c to copy', 'http://download.eclipse.org/ease/update/nightly');">http://download.eclipse.org/ease/update/nightly</span>
			<div class="date">2014/08/16</div></dd>
	</dl>
</div>

{$incubation}
				
EOHTML;
	
	
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
