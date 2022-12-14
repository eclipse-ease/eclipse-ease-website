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

	<h3><i class="fa fa-fw fa-globe"></i> Blog posts</h3>
	<p>
      <ul class="nobullet">
	  <li><a href="http://versatic.net/tracecompass/scriptEngineBenchmarks.html">Trace Compass Scripting Engines Benchmarks</a></li>
	  <li><a href="http://versatic.net/tracecompass/introducingEase.html">Trace Compass Scripting: Empowering Users With Their Trace Data Analysis</a></li>
	  <li><a href="http://codeandme.blogspot.com/search?q=ease&max-results=20&by-date=true">Building UIs with EASE</a></li>
	  <li><a href="https://kichwacoders.com/2015/10/04/launching-with-ease/">Launching with EASE</a></li>
	  <li><a href="http://codeandme.blogspot.com/2015/05/unit-testing-with-scripts-in-ease.html">Unit Testing with scripts in EASE</a></li>
	  <li><a href="http://codeandme.blogspot.com/2015/04/live-charting-with-ease.html">Live charting with EASE</a></li>
	  <li><a href="http://codeandme.blogspot.com/2014/12/ease-scripts-conquer-ui.html">EASE scripts conquer the UI</a></li>
	  <li><a href="https://opensource.com/life/16/2/how-use-python-hack-your-ide">How to use Python to hack your Eclipse IDE</a></li>
	  <li><a href="https://rage5474.github.io/2017/01/08/Eclipse-Scripting-Basics-EASE.html">Eclipse Scripting Basics (EASE)</a></li>
	  <li><a href="http://codeandme.blogspot.com/p/blog-page_47.html">A new script engine for EASE</a></li>
	  <li><a href="http://codeandme.blogspot.com/2014/10/writing-modules-for-ease.html">Writing modules for EASE</a></li>
	  <li><a href="https://jaxenter.de/eclipse-ease-scripting-fur-alle-891">(german) Eclipse EASE: Scripting f??r alle!</a></li>
	  </ul>
	</p>

	<h3><i class="fa fa-fw fa-video-camera"></i> Presentations</h3>
	<p class="documentation">
      <dl>
      	<dt><span title="Eclipse EASE allows you to extend the IDE by writing scripts in Javascript, Python or Groovy without having to create a Plugin. No compilation and restarts needed, the changes to your scripts are immediately working in the running IDE.">EASEy IDE extensions without Plugins</a></dt>
      	<dd>
			<p>I will show how to get started with Eclipse EASE and give a short overview of the possibilities. The talk will be concluded with examples of real world scripts which I am using in our IDE to make day-to-day development tasks easier.</p>

      		<i class="fa fa-fw fa-user"></i> <b>Speaker:</b> Rabea Gransberger<br />
      		<i class="fa fa-fw fa-globe"></i> <b>Location:</b> EclipseCon Europe 2018<br />
      		<i class="fa fa-fw fa-video-camera"></i> <a href="https://youtu.be/HfRMQ3oDs-g">watch on youtube</a> 
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
