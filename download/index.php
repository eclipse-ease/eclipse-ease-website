<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "EASE Download";
	$pageKeywords	= "Eclipse, EASE, Scripting";
	$pageAuthor		= "Christian Pontesegger";

	
	# provide the page content
	$html = <<<EOHTML

<div id="midcolumn">
	<h3><i class="fa fa-download"></i> Download</h3>
	
	<p>Releases:</p>
	<ul class="nobullet">
		<li><i class="fa fa-download"></i>			
			Latest: <span class="p2site" onclick="javascript:prompt('Hit Ctrl-c to copy', 'http://download.eclipse.org/ease/release/latest');">http://download.eclipse.org/ease/release/latest</span></li>
		<li><i class="fa fa-link"></i>			
			Dedicated releases: <a href="http://download.eclipse.org/ease/release">http://download.eclipse.org/ease/release</a></li>
		<li><i class="fa fa-link"></i>			
			Offline zips: <a href="http://download.eclipse.org/ease/release/offline">http://download.eclipse.org/ease/release/offline</a></li>
	</ul>
		
	<p>Integration builds:</p>

	<ul class="nobullet">
		<li><i class="fa fa-download"></i>			
			Nightly: <span class="p2site" onclick="javascript:prompt('Hit Ctrl-c to copy', 'http://download.eclipse.org/ease/integration/nightly');">http://download.eclipse.org/ease/integration/nightly</span></li>
	</ul>

	<p>EASE Module doclet:</p>

	<ul class="nobullet">
		<li><i class="fa fa-download"></i>			
			Nightly: <a href="https://ci.eclipse.org/ease/job/ease.build.module.doclet/lastSuccessfulBuild/artifact/developers/org.eclipse.ease.helpgenerator/target/ease.module.doclet.jar">ease.module.doclet.jar</a></li>
	</ul>

	<p>Compatibility:</p>

	<p>Compatibility checks will pick up the latest nightly build and run its JUnit tests against an older target platform. This guarantees, that EASE can be installed on an older Eclipse and that its basic features are working properly. As some EASE features (mostly UI) do require newer versions of Eclipse, you might experience feature degradation on older platforms.<br />
The matrix below is not complete. In case you do use something we do not track, please <a href="https://dev.eclipse.org/mailman/listinfo/ease-dev" title="ease-dev Mailing List" rel="nofollow">report to the mailing list</a>, so we can update the matrix for other users.
</p>

	<table id="compatibility">
		<tr>
			<th><sub>Target</sub>/<sup>EASE</sup></th>
			<th>Nightly</th>
			<th>0.8.0</th>
			<th>0.7.0</th>
			<th>0.6.0</th>
			<th>0.5.0</th>
			<th>0.4.0</th>
			<th>0.3.0</th>
			<th>0.2.0</th>
			<th>0.1.0</th>
		</tr>

		<tr>
			<th>2021-09</th>
			<td><a href='https://ci.eclipse.org/ease/job/ease.build.core/lastBuild'><img src='https://ci.eclipse.org/ease/job/ease.build.core/badge/icon?style=plastic&subject=Tests'></a></td>
			<td><span title="UnitTests pass"><i class="fa fa-check green" /></span></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>

		<tr>
			<th>2021-06</th>
			<td><a href='https://ci.eclipse.org/ease/job/ease.verify.core.target.2021-06/lastBuild'><img src='https://ci.eclipse.org/ease/job/ease.verify.core.target.2021-06/badge/icon?style=plastic&subject=Tests'></a></td>
			<td><span title="UnitTests pass"><i class="fa fa-check green" /></span></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>

		<tr>
			<th>2021-03</th>			
			<td colspan=9><span title="Not supported"><i class="fa fa-times red" /></span> <sup>1</sup></td>
		</tr>

		<tr>
			<th>2020-12</th>
			<td><a href='https://ci.eclipse.org/ease/job/ease.verify.core.target.2020-12/lastBuild'><img src='https://ci.eclipse.org/ease/job/ease.verify.core.target.2020-12/badge/icon?style=plastic&subject=Tests'></a></td>
			<td><span title="UnitTests pass"><i class="fa fa-check green" /></span></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>

		<tr>
			<th>2020-09</th>
			<td><a href='https://ci.eclipse.org/ease/job/ease.verify.core.target.2020-09/lastBuild'><img src='https://ci.eclipse.org/ease/job/ease.verify.core.target.2020-09/badge/icon?style=plastic&subject=Tests'></a></td>
			<td><span title="UnitTests pass"><i class="fa fa-check green" /></span></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>

		<tr>
			<th>2020-06</th>
			<td><a href='https://ci.eclipse.org/ease/job/ease.verify.core.target.2020-06/lastBuild'><img src='https://ci.eclipse.org/ease/job/ease.verify.core.target.2020-06/badge/icon?style=plastic&subject=Tests'></a></td>
			<td><span title="UnitTests pass"><i class="fa fa-check green" /></span></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>

		<tr>
			<th>2020-03</th>
			<td><a href='https://ci.eclipse.org/ease/job/ease.verify.core.target.2020-03/lastBuild'><img src='https://ci.eclipse.org/ease/job/ease.verify.core.target.2020-03/badge/icon?style=plastic&subject=Tests'></a></td>
			<td><span title="UnitTests pass"><i class="fa fa-check green" /></span></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>

		<tr>
			<th>2019-12</th>
			<td><a href='https://ci.eclipse.org/ease/job/ease.verify.core.target.2019-12/lastBuild'><img src='https://ci.eclipse.org/ease/job/ease.verify.core.target.2019-12/badge/icon?style=plastic&subject=Tests'></a></td>
			<td><span title="UnitTests pass"><i class="fa fa-check green" /></span></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>

		<tr>
			<th>2019-09</th>
			<td><a href='https://ci.eclipse.org/ease/job/ease.verify.core.target.2019-09/lastBuild'><img src='https://ci.eclipse.org/ease/job/ease.verify.core.target.2019-09/badge/icon?style=plastic&subject=Tests'></a></td>
			<td><span title="UnitTests pass"><i class="fa fa-check green" /></span></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>

		<tr>
			<th>2019-06</th>
			<td><a href='https://ci.eclipse.org/ease/job/ease.verify.core.target.2019-06/lastBuild'><img src='https://ci.eclipse.org/ease/job/ease.verify.core.target.2019-06/badge/icon?style=plastic&subject=Tests'></a></td>
			<td><span title="Verified version"><i class="fa fa-star green" /></span></td>
			<td><span title="Verified version"><i class="fa fa-star green" /></span></td>
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
			<td><span title="UnitTests pass"><i class="fa fa-check green" /></span></td>
			<td><span title="Verified version"><i class="fa fa-star green" /></span></td>
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
			<td><span title="UnitTests pass"><i class="fa fa-check green" /></span></td>
			<td><span title="UnitTests pass"><i class="fa fa-check green" /></span></td>
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
			<td><span title="UnitTests pass"><i class="fa fa-check green" /></span></td>
			<td><span title="UnitTests pass"><i class="fa fa-check green" /></span></td>
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
			<td><span title="UnitTests pass"><i class="fa fa-check green" /></span></td>
			<td><span title="Verified version"><i class="fa fa-star green" /></span></td>
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
			<td><span title="UnitTests pass"><i class="fa fa-check green" /></span></td>
			<td><span title="UnitTests pass"><i class="fa fa-check green" /></span></td>
			<td><span title="Verified version"><i class="fa fa-star green" /></span></td>
			<td><span title="Verified version"><i class="fa fa-star green" /></span></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>

		<tr>
			<th>Neon</th>
			<td><span title="Not supported"><i class="fa fa-times red" /></span></td>
			<td><span title="Not supported"><i class="fa fa-times red" /></span></td>
			<td><span title="UnitTests pass"><i class="fa fa-check green" /></span></td>
			<td></td>
			<td></td>
			<td><span title="Verified version"><i class="fa fa-star green" /></span></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>

		<tr>
			<th>Mars</th>
			<td><span title="Not supported"><i class="fa fa-times red" /></span></td>
			<td><span title="Not supported"><i class="fa fa-times red" /></span></td>
			<td><span title="Not supported"><i class="fa fa-times red" /></span></td>
			<td></td>
			<td></td>
			<td></td>
			<td><span title="Verified version"><i class="fa fa-star green" /></span></td>
			<td></td>
			<td></td>
		</tr>

		<tr>
			<th>Luna</th>
			<td><span title="Not supported"><i class="fa fa-times red" /></span></td>
			<td><span title="Not supported"><i class="fa fa-times red" /></span></td>
			<td><span title="Not supported"><i class="fa fa-times red" /></span></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><span title="Verified version"><i class="fa fa-star green" /></span></td>
			<td><span title="Verified version"><i class="fa fa-star green" /></span></td>
		</tr>

	</table>
	
	<p>
	1) Target platform 2021-03 does not support buddy loading reliably, see <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=572102">bug 572102</a>
	</p>
		
</div>

{$incubation}
				
EOHTML;
	
	
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
