<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2009 
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

require_once ('_projectCommon.php');

// Use our own favicon
$App->AddExtraHtmlHeader('<link rel="shortcut icon" href="images/favicon.ico"/>');

$pageTitle 		= "WindowBuilder | Getting Involved in Development";
$Breadcrumb->removeCrumb($Breadcrumb->getCrumbCount() - 1);
$Breadcrumb->addCrumb("Getting Involved", "involved.php", "_self");

$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>

<p>
<a href='https://projects.eclipse.org/projects/tools.windowbuilder'><img src='images/wb.svg' style='float:left; padding-right: 10px; max-height: 8ex;'></a>
The WindowBuilder developers welcome your involvement. Simply follow steps in the Contribution guide:
</p>
<p>
<a style="padding-left: 2em;" href="https://github.com/eclipse-windowbuilder/windowbuilder/blob/master/CONTRIBUTING.md">https://github.com/eclipse-windowbuilder/windowbuilder</a>
</p>

<h2>Builds</h2>
<ul>
<li><a href="https://ci.eclipse.org/windowbuilder/">Nightly builds and releases</a></li>
<li><a href="https://github.com/eclipse-windowbuilder/windowbuilder/actions">Github Verification Builds</a></li>
</ul>




</div>
EOHTML;

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html, $Breadcrumb);
?>