<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "EASE Download";
	$pageKeywords	= "Eclipse, EASE, Scripting";
	$pageAuthor		= "Christian Pontesegger";

	
	# provide the page content
	$html = <<<EOHTML

<div id="midcolumn">
	<h3><i class="fa fa-fw fa-download"></i> Download</h3>
	
	<p>Releases:</p>
	<ul class="nobullet">
		<li><i class="fa fa-fw icon-link bullet"></i>			
			Latest: <span class="p2site" onclick="javascript:prompt('Hit Ctrl-c to copy', 'http://download.eclipse.org/ease/release/latest');">http://download.eclipse.org/ease/release/latest</span></li>
		<li><i class="fa fa-fw icon-link bullet"></i>			
			Dedicated releases: <span class="p2site" onclick="javascript:prompt('Hit Ctrl-c to copy', 'http://download.eclipse.org/ease/release');">http://download.eclipse.org/ease/release</span></li>
		<li><i class="fa fa-fw icon-link bullet"></i>			
			Offline zips: <a href="http://download.eclipse.org/ease/release/offline">http://download.eclipse.org/ease/release/offline</a></li>
	</ul>
		
	<p>Integration builds:</p>

	<ul class="nobullet">
		<li><i class="fa fa-fw icon-link bullet"></i>
			Nightly: <span class="p2site" onclick="javascript:prompt('Hit Ctrl-c to copy', 'http://download.eclipse.org/ease/integration/nightly');">http://download.eclipse.org/ease/integration/nightly</span></li>
	</ul>

	<p>Compatibility:</p>

	<table id="compatibility">
		<tr>
			<th><sub>Target</sub>/<sup>EASE</sup></th>
			<th>Nightly</th>
			<th>0.7.0</th>
			<th>0.6.0</th>
			<th>0.5.0</th>
			<th>0.4.0</th>
			<th>0.3.0</th>
			<th>0.2.0</th>
			<th>0.1.0</th>
		</tr>

		<tr>
			<th>2019-06</th>
			<td><a href='https://ci.eclipse.org/ease/job/ease.build.core/lastBuild'><img src='https://ci.eclipse.org/ease/job/ease.build.core/badge/icon?style=plastic&subject=Tests'></a></td>
			<td><span title="Verified version"><i class="fa fa-star green"><span></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>

		<tr>
			<th>2019-03</th>
			<td><a href='https://ci.eclipse.org/ease/job/ease.verify.core.target.2019-03/lastBuild'><img src='https://ci.eclipse.org/ease/job/ease.verify.core.target.2019-03/badge/icon?style=plastic&subject=Tests'></a></td>
			<td><span title="Verified version"><i class="fa fa-star green"><span></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>

		<tr>
			<th>2018-12</th>
			<td><a href='https://ci.eclipse.org/ease/job/ease.verify.core.target.2018-12/lastBuild'><img src='https://ci.eclipse.org/ease/job/ease.verify.core.target.2018-12/badge/icon?style=plastic&subject=Tests'></a></td>
			<td><span title="UnitTests pass"><i class="fa fa-check green"><span></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>

		<tr>
			<th>2018-09</th>
			<td><a href='https://ci.eclipse.org/ease/job/ease.verify.core.target.2018-09/lastBuild'><img src='https://ci.eclipse.org/ease/job/ease.verify.core.target.2018-09/badge/icon?style=plastic&subject=Tests'></a></td>
			<td><span title="UnitTests pass"><i class="fa fa-check green"><span></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>

		<tr>
			<th>Photon</th>
			<td><a href='https://ci.eclipse.org/ease/job/ease.verify.core.target.photon/lastBuild'><img src='https://ci.eclipse.org/ease/job/ease.verify.core.target.photon/badge/icon?style=plastic&subject=Tests'></a></td>
			<td><span title="Verified version"><i class="fa fa-star green"><span></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>

		<tr>
			<th>Oxygen</th>
			<td><a href='https://ci.eclipse.org/ease/job/ease.verify.core.target.oxygen/lastBuild'><img src='https://ci.eclipse.org/ease/job/ease.verify.core.target.oxygen/badge/icon?style=plastic&subject=Tests'></a></td>
			<td><span title="UnitTests pass"><i class="fa fa-check green"><span></td>
			<td><span title="Verified version"><i class="fa fa-star green"><span></td>
			<td><span title="Verified version"><i class="fa fa-star green"><span></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>

		<tr>
			<th>Neon</th>
			<td><a href='https://ci.eclipse.org/ease/job/ease.verify.core.target.neon/lastBuild'><img src='https://ci.eclipse.org/ease/job/ease.verify.core.target.neon/badge/icon?style=plastic&subject=Tests'></a></td>
			<td><span title="UnitTests pass"><i class="fa fa-check green"><span></td>
			<td></td>
			<td></td>
			<td><span title="Verified version"><i class="fa fa-star green"><span></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>

		<tr>
			<th>Mars</th>
			<td><a href='https://ci.eclipse.org/ease/job/ease.verify.core.target.mars/lastBuild'><img src='https://ci.eclipse.org/ease/job/ease.verify.core.target.mars/badge/icon?style=plastic&subject=Tests'></a></td>
			<td><span title="Not supported"><i class="fa fa-times red"><span></td>
			<td></td>
			<td></td>
			<td></td>
			<td><span title="Verified version"><i class="fa fa-star green"><span></td>
			<td></td>
			<td></td>
		</tr>

		<tr>
			<th>Luna</th>
			<td><a href='https://ci.eclipse.org/ease/job/ease.verify.core.target.luna/lastBuild'><img src='https://ci.eclipse.org/ease/job/ease.verify.core.target.luna/badge/icon?style=plastic&subject=Tests'></a></td>
			<td><span title="Not supported"><i class="fa fa-times red"><span></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><span title="Verified version"><i class="fa fa-star green"><span></td>
			<td><span title="Verified version"><i class="fa fa-star green"><span></td>
		</tr>

	</table>
		
</div>

{$incubation}
				
EOHTML;
	
	
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
