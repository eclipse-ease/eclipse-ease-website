<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	
	$news = '<?xml version="1.0" encoding="UTF-8" ?>';
	$news .= '<rss version="2.0">';
	$news .= '<channel>';
	$news .= '<title>Eclipse EASE</title>';
	$news .= '<link>https://www.eclipse.org/ease/news</link>';
	$news .= '<description>News feed for the Eclipse EASE framework</description>';
	$news .= '<language>en</language>';

	# aggregate news
	$dir = glob(getcwd() . '/*.news'); 
	uasort($dir, function ($a, $b) { return filemtime($b) - filemtime($a);}); 

	foreach ($dir as $file) {
		$xml = simplexml_load_file($file);
		
		$news .= '<item>';
		$news .= '<title>' . $xml->title[0] . '</title>';
		$news .= '<link>https://www.eclipse.org/ease/news/index.php#' . urlencode($xml->title[0]) . '</link>';
		$news .= '<pubDate> . date(DATE_RFC822, filemtime($file)) . '</pubDate>';
		$news .= '<description>' . htmlspecialchars($xml->content[0]) . '</description>';
		$news .= '</item>';
	}

	$news .= '</channel>';
	$news .= '</rss>';
	
	echo $news;
?>
