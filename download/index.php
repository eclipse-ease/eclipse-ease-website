<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "EASE Download";
	$pageKeywords	= "Eclipse, EASE, Scripting";
	$pageAuthor		= "Christian Pontesegger";

	
	# provide the page content
	$html = <<<EOHTML

<div id="midcolumn">
	<h3><i class="fa fa-fw fa-download"></i> Download</h3>
	
	<p>Installing the Latest Release</p>
	<ul class="nobullet">
		<li><i class="fa fa-fw icon-link bullet"></i>			
			The latest release is v0.3.0 (see Release Notes)</li>
		<li><i class="fa fa-fw icon-link bullet"></i>			
			Main update site: <span class="p2site" onclick="javascript:prompt('Hit Ctrl-c to copy', 'http://download.eclipse.org/ease/update/release');">http://download.eclipse.org/ease/update/release</span> (recommended)</li>
		<li><i class="fa fa-fw icon-link bullet"></i>			
			p2 Repository for offline installation: <a href=" http://eclipse.org/downloads/download.php?file=/ease/release/ease-p2-v0.3.0.zip">EASE v0.3.0</a></li>
	</ul>
		
	<p>External components like additional interpreters can be installed using external update sites:</p>
	
	<ul class="nobullet">
		<li><i class="fa fa-fw icon-link bullet"></i>
			Nightly: <span class="p2site" onclick="javascript:prompt('Hit Ctrl-c to copy', 'https://dl.bintray.com/pontesegger/ease-jython/');">https://dl.bintray.com/pontesegger/ease-jython/</span></li>
		<li><i class="fa fa-fw icon-link bullet"></i>
			Nightly: <span class="p2site" onclick="javascript:prompt('Hit Ctrl-c to copy', 'https://dl.bintray.com/pontesegger/ease-groovy/');">https://dl.bintray.com/pontesegger/ease-groovy/</span></li>
		<li><i class="fa fa-fw icon-link bullet"></i>
			Nightly: <span class="p2site" onclick="javascript:prompt('Hit Ctrl-c to copy', 'https://dl.bintray.com/pontesegger/ease-jruby/');">https://dl.bintray.com/pontesegger/ease-jruby/</span></li>
	</ul>

	<p>Nightly builds:</p>

	<ul class="nobullet">
		<li><i class="fa fa-fw icon-link bullet"></i>
			Nightly: <span class="p2site" onclick="javascript:prompt('Hit Ctrl-c to copy', 'http://download.eclipse.org/ease/update/nightly');">http://download.eclipse.org/ease/update/nightly</span></li>
	</ul>

	<p>Older releases:</p>

	<ul class="nobullet">
		<li><i class="fa fa-fw icon-link bullet"></i>
			Release update sites will accumulate releases, so older versions can be obtained from the p2 release update sites directly.</li>
		<li><i class="fa fa-fw icon-link bullet"></i>			
			p2 Repository for offline installation: <a href=" http://eclipse.org/downloads/download.php?file=/ease/release/ease-p2-v0.1.0.zip">EASE v0.1.0</a></li>
		<li><i class="fa fa-fw icon-link bullet"></i>			
			p2 Repository for offline installation: <a href=" http://eclipse.org/downloads/download.php?file=/ease/release/ease-p2-v0.2.0.zip">EASE v0.2.0</a></li>
	</ul>
		
</div>

{$incubation}
				
EOHTML;
	
	
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
