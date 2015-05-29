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
		$news .= '<a href="https://www.eclipse.org/ease/news/index.php#' . md5(basename($file)) . '">';
		$news .= $xml->title[0];
		$news .= '</a></dt>';
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
</div>

{$incubation}
				
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
