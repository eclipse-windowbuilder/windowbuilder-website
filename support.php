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

	$pageTitle 		= "WindowBuilder - Support";

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>
<p><a href="http://www.eclipse.org/forums/index.php?t=thread&frm_id=214&S=7625d8ab46b00e13497393e863841f04">Eclipse forum</a></p>
<p><a href="http://forums.instantiations.com/viewforum.php?f=14">Current Forums</a>- this content will be folded into the Eclipse forum (link above) soon.</p>


</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>