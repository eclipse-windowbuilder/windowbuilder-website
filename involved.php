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

	$pageTitle 		= "Installing WindowBuilder Pro";

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>

<p>Public read only: <code><a href="https://git.eclipse.org/c/windowbuilder/org.eclipse.windowbuilder.git">https://git.eclipse.org/c/windowbuilder/org.eclipse.windowbuilder.git/</a></code></p>
<p>EclipseLabs Extras: <code><a href="https://code.google.com/a/eclipselabs.org/p/windowbuilder-extras/source/browse">https://code.google.com/a/eclipselabs.org/p/windowbuilder-extras/source/browse</a></code></p>

</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>