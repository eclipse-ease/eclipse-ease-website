<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	
	$news = '<?xml version="1.0" encoding="UTF-8" ?>' . "\n";
	$news .= '<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">' . "\n";
	$news .= '<atom:channel>' . "\n";
	$news .= '<atom:title>Eclipse EASE</atom:title>' . "\n";
	$news .= '<atom:link href="https://www.eclipse.org/ease/news/rss.php" rel="self" type="application/rss+xml" />' . "\n";
	$news .= '<atom:description>News feed for the Eclipse EASE framework</atom:description>' . "\n";
	$news .= '<atom:language>en</atom:language>' . "\n";

	# aggregate news
	$dir = glob(getcwd() . '/*.news'); 
	uasort($dir, function ($a, $b) { return filemtime($b) - filemtime($a);}); 

	foreach ($dir as $file) {
		$xml = simplexml_load_file($file);
		
		$news .= '<atom:item>' . "\n";
		$news .= '<atom:title>' . $xml->title[0] . '</atom:title>' . "\n";
		$news .= '<atom:link>https://www.eclipse.org/ease/news/index.php#' . md5(basename($file)) . '</atom:link>' . "\n";
		$news .= '<atom:pubDate>' . date(DATE_RSS, filemtime($file)) . '</atom:pubDate>' . "\n";
		$news .= '<atom:description>' . htmlspecialchars($xml->content[0]) . '</atom:description>' . "\n";
		$news .= '<atom:guid>https://www.eclipse.org/ease/news/index.php#' . md5(basename($file)) . '</atom:guid>' . "\n";
		$news .= '</atom:item>' . "\n";
	}

	$news .= '</atom:channel>' . "\n";
	$news .= '</atom:rss>' . "\n";
	
	echo $news;
?>
