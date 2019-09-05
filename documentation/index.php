<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "EASE Documentation";
	$pageKeywords	= "Eclipse, EASE, Scripting";
	$pageAuthor		= "Christian Pontesegger";

	
	# provide the page content
	$html = <<<EOHTML

<div id="midcolumn">
	<h3><i class="fa fa-fw fa-book"></i> Documentation</h3>
	<p>
      <ul class="nobullet">
	  <li><a href="https://wiki.eclipse.org/EASE">Wiki main page</a></li>
	  <li><a href="https://wiki.eclipse.org/EASE/Scripts">Script management</a></li>
	  <li><a href="https://wiki.eclipse.org/EASE/Engines">Supported script engines</a></li>
	  <li><a href="https://wiki.eclipse.org/EASE/Modules">Provided modules</a></li>
	  </ul>
	</p>
	<h3><i class="fa fa-fw fa-video-camera"></i> Presentations</h3>
	<p>
      <dl class="nobullet">
      	<dt>EASEy IDE extensions without Plugins</dt>
      	<dd>
      		<p>Eclipse EASE allows you to extend the IDE by writing scripts in Javascript, Python or Groovy without having to create a Plugin. No compilation and restarts needed, the changes to your scripts are immediately working in the running IDE.</p>
			<p>I will show how to get started with Eclipse EASE and give a short overview of the possibilities. The talk will be concluded with examples of real world scripts which I am using in our IDE to make day-to-day development tasks easier.</p>

      		Speaker: Rabea Gransberger<br />
      		Location: EclipseCon Europe 2018<br />
      		<i class="fa fa-video-camera"> <a href="https://youtu.be/HfRMQ3oDs-g">watch on youtube</a> 
      	</dd>
      	
      	<dt>EclipseCon Europe 2019</dt>
      	<dd>SysBox: An Eclipse Story (<a href="https://youtu.be/0B2sttEdHio">watch on youtube</a>)</dd>
      
      	<dt>EclipseCon Europe 2018</dt>
      	<dd>EASEy IDE extensions without Plugins (<a href="https://youtu.be/HfRMQ3oDs-g">watch on youtube</a>)</dd>
      	<dd>SysBox: An Eclipse Story (<a href="https://youtu.be/0B2sttEdHio">watch on youtube</a>)</dd>

      	<dt>EclipseCon Europe 2017</dt>
      	<dd>And the people said, "Let there be scripts" (<a href="https://youtu.be/r7SSf5DMihQ">watch on youtube</a>)</dd>

      	<dt>EclipseCon France 2017</dt>
      	<dd></i>How EASE unleashes the scientific power of Airbus' engineers in Eclipse (<a href="https://www.youtube.com/watch?v=4ZkV3MDxabc">watch on youtube</a>)</dd>

      	<dt>EclipseCon Europe 2016</dt>
      	<dd>EASE-ily make the most of Eclipse with Python (<a href="https://youtu.be/bhhypyRAPp0">watch on youtube</a>)</dd>
      	<dd>Elevate your IDE with scripts (<a href="https://youtu.be/K9ERWs2ixZY">watch on youtube</a>)</dd>

      	<dt>EclipseCon France 2016</dt>
      	<dd>Elevate your IDE with scripts (<a href="https://youtu.be/eWNKrPELcBw">watch on youtube</a>)</dd>
      	
      	<dt>EclipseCon Europe 2015</dt>
      	<dd>I love scripting (<a href="https://youtu.be/C15pwEBSgBA">watch on youtube</a>)</dd>

      	<dt>EclipseCon Europe 2013</dt>
      	<dd>Scripting, baby! (<a href="https://youtu.be/FQw3eNYTgfI">watch on youtube</a>)</dd>

      	<dt>Further videos</dt>
      	<dd>Scripting in Eclipse RCP-based applications (<a href="https://www.youtube.com/watch?v=32TqigGZSGg">watch on youtube</a>)</dd>
      	<dd>Eclipse EASE (<a href="https://www.youtube.com/watch?v=PDAnK0lkANg&t=51s">watch on youtube</a>)</dd>
      	<dd>Easy scripting, easy modeling (<a href="https://www.youtube.com/watch?v=mSjxwVRIBf0">watch on youtube</a>)</dd>
	  </dl>
	</p>
</div>

{$incubation}
				
EOHTML;
	
	
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
