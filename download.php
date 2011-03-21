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

	$pageTitle 		= "WindowBuilder - Download";

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>
<p>All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> unless otherwise specified.</p>

<h3>Update Sites</h3>
<ul>
<li>Eclipse 3.7 - <a href="http://download.eclipse.org/windowbuilder/WBPro/integration/3.7">Update Site</a> | <a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WBPro/integration/WBPro_v0.9.0_UpdateSite_for_Eclipse3.7.zip">Zipped Update Site</a> | <a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WBPro/integration/WBPro_v0.9.0_UpdateSite_for_Eclipse3.7.zip.MD5">MD5 Hash</a></li>
<li>Eclipse 3.6 - <a href="http://download.eclipse.org/windowbuilder/WBPro/integration/3.6">Update Site</a> | <a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WBPro/integration/WBPro_v0.9.0_UpdateSite_for_Eclipse3.6.zip">Zipped Update Site</a> | <a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WBPro/integration/WBPro_v0.9.0_UpdateSite_for_Eclipse3.6.zip.MD5">MD5 Hash</a></li>
<li>Eclipse 3.5 - <a href="http://download.eclipse.org/windowbuilder/WBPro/integration/3.5">Update Site</a> | <a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WBPro/integration/WBPro_v0.9.0_UpdateSite_for_Eclipse3.5.zip">Zipped Update Site</a> | <a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WBPro/integration/WBPro_v0.9.0_UpdateSite_for_Eclipse3.5.zip.MD5">MD5 Hash</a></li>
<li>Eclipse 3.4 - <a href="http://download.eclipse.org/windowbuilder/WBPro/integration/3.4">Update Site</a> | <a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WBPro/integration/WBPro_v0.9.0_UpdateSite_for_Eclipse3.4.zip">Zipped Update Site</a> | <a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WBPro/integration/WBPro_v0.9.0_UpdateSite_for_Eclipse3.4.zip.MD5">MD5 Hash</a></li>
</ul>

</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>