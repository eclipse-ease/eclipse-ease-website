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
			The latest release is v0.1.0 (see Release Notes)</li>
		<li><i class="fa fa-fw icon-link bullet"></i>			
			Main update site: <span class="p2site" onclick="javascript:prompt('Hit Ctrl-c to copy', 'http://download.eclipse.org/ease/update/release');">http://download.eclipse.org/ease/update/release</span> (recommended)</li>
		<li><i class="fa fa-fw icon-link bullet"></i>			
			p2 Repository for offline installation: <a href=" http://eclipse.org/downloads/download.php?file=/ease/release/ease-p2-v0.1.0.zip">EASE v0.1.0</a></li>
	</ul>
		
	<p>External components like additional interpreters can be installed using external update sites:</p>
	
	<ul class="nobullet">
		<li><i class="fa fa-fw icon-link bullet"></i>
			Nightly: <span class="p2site" onclick="javascript:prompt('Hit Ctrl-c to copy', 'http://topcased-mm.gforge.enseeiht.fr/ease_jython/updates/ease_jython_nightly/');">http://topcased-mm.gforge.enseeiht.fr/ease_jython/updates/ease_jython_nightly/</span></li>
		<li><i class="fa fa-fw icon-link bullet"></i>
			Nightly: <span class="p2site" onclick="javascript:prompt('Hit Ctrl-c to copy', 'http://topcased-mm.gforge.enseeiht.fr/ease_groovy/updates/latest/');">http://topcased-mm.gforge.enseeiht.fr/ease_groovy/updates/latest/</span></li>
		<li><i class="fa fa-fw icon-link bullet"></i>
			Nightly: <span class="p2site" onclick="javascript:prompt('Hit Ctrl-c to copy', 'http://topcased-mm.gforge.enseeiht.fr/ease_jruby/updates/latest/');">http://topcased-mm.gforge.enseeiht.fr/ease_jruby/updates/latest/</span></li>
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
	</ul>
		
</div>

{$incubation}
				
EOHTML;
	
	
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
