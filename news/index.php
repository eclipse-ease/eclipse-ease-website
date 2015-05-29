<?php  		


																												require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "EASE News";
	$pageKeywords	= "Eclipse, EASE, Scripting";
	$pageAuthor		= "Christian Pontesegger";

	
	# aggregate news
	$dir = glob(getcwd() . '/*.news'); 
	uasort($dir, function ($a, $b) { return filemtime($b) - filemtime($a);}); 

	$news = '<dl class="news">';
	foreach ($dir as $file) {
		$xml = simplexml_load_file($file);
		
		$news .= '<dt><i class="fa fa-fw ' . $xml->icon[0] . ' bullet"></i>';
		$news .= '<a href="#"' . urlencode($xml->title[0]) . '" />';
		$news .= $xml->title[0];
		$news .= '</dt>';
		$news .= '<dd>' . $xml->content[0];
		$news .= '<div class="date">' . date("Y/m/d", filemtime($file)) . '</div>';
		$news .= '</dd>';
	}
	$news .= '</dl>';	
	
	# provide the page content
	$html = <<<EOHTML

<div id="midcolumn">
	<h3><i class="fa fa-fw fa-bolt"></i> News</h3>

	{$news}

	<dl class="news">
		<dt><i class="fa fa-fw fa-cogs bullet"></i>
			Groovy engine preview
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
