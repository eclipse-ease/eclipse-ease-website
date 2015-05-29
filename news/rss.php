<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	
	$news = '<?xml version="1.0" encoding="UTF-8" ?>' . "\n";
	$news .= '<rss version="2.0">' . "\n";
	$news .= '<channel>' . "\n";
	$news .= '<title>Eclipse EASE</title>' . "\n";
	$news .= '<link href="https://www.eclipse.org/ease/news/rss.php" rel="self" type="application/rss+xml" />' . "\n";
	$news .= '<description>News feed for the Eclipse EASE framework</description>' . "\n";
	$news .= '<language>en</language>' . "\n";

	# aggregate news
	$dir = glob(getcwd() . '/*.news'); 
	uasort($dir, function ($a, $b) { return filemtime($b) - filemtime($a);}); 

	foreach ($dir as $file) {
		$xml = simplexml_load_file($file);
		
		$news .= '<item>' . "\n";
		$news .= '<title>' . $xml->title[0] . '</title>' . "\n";
		$news .= '<link>https://www.eclipse.org/ease/news/index.php#' . md5(basename($file)) . '</link>' . "\n";
		$news .= '<pubDate>' . date(DATE_RSS, filemtime($file)) . '</pubDate>' . "\n";
		$news .= '<description>' . htmlspecialchars($xml->content[0]) . '</description>' . "\n";
		$news .= '<guid>https://www.eclipse.org/ease/news/index.php#' . md5(basename($file)) . '</guid>' . "\n";
		$news .= '</item>' . "\n";
	}

	$news .= '</channel>' . "\n";
	$news .= '</rss>' . "\n";
	
	echo $news;
?>
