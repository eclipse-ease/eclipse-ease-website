<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "EASE - Support";
	$pageKeywords	= "Eclipse, EASE, Scripting";
	$pageAuthor		= "Christian Pontesegger";

	# provide the page content
	$html = <<<EOHTML

<div id="midcolumn">
	<p><i>"I need some guidance and tutorials"</i></p>
	<ul class="nobullet">
		<li><i class="fa fa-mortar-board bullet"></i>
			<a href="/ease/documentation" title="Documentation">Documentation</a>
			- read our Users Guide</li>
	</ul>

	<p><br/><i>"I have a specific question regarding usage"</i></p>
	<ul class="nobullet">
		<li><i class="fa fa-th-list bullet"></i>
			<a href="https://www.eclipse.org/forums/index.php/f/292/" rel="nofollow">EASE Forums</a></li>
		<li><i class="fa fa-stack-overflow bullet"></i>
			<a href="http://stackoverflow.com/questions/tagged/ease" rel="nofollow">Stackoverflow</a>
			- Browse relevant topics.</li>
		<li><i class="fa fa-stack-overflow bullet"></i>
			<a href="http://stackoverflow.com/questions/ask?tags=ease" rel="nofollow">Stackoverflow</a>
			- Ask technical questions using tag <i>ease</i>.</li>
	</ul>

	<p><br/><i>"I am a developer and have a specific question regarding implementation/API"</i></p>
	<ul class="nobullet">
		<li><i class="fa fa-envelope-o bullet"></i>
			<a href="https://dev.eclipse.org/mailman/listinfo/ease-dev" title="ease-dev Mailing List" rel="nofollow">Developer Mailing List</a>
			- Ask technical questions on our mailing list.</li>
	</ul>

	<p><br/><i>"I found a bug / want to request a feature"</i></p>

	<ul class="nobullet">
		<li><i class="fa fa-bug bullet"></i>
			<a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=EASE&amp;rep_platform=All&amp;op_sys=All" rel="nofollow">File a bug</a>
			- file bugs and feature requests</li>
		<li><i class="fa fa-bug bullet"></i>
			<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;classification=Technology&amp;product=EASE&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;status_whiteboard_type=allwordssubstr&amp;status_whiteboard=&amp;keywords_type=allwords&amp;keywords=&amp;bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;emailtype1=exact&amp;email1=&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0="rel="nofollow">EASE Bugzilla</a>
			- review open topics</li>
	</ul>
</div>

{$incubation}
				
EOHTML;
	
	
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
