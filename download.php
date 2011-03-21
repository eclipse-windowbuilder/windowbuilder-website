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

<table>
  <tr>
    <th></th>
    <th>Update Site</th>
    <th>Zipped Update Site</th>
    <th>MD5 Hashes</th>
  </tr>
  <tr>
    <td>Eclipse 3.7</td>
    <td><a href="http://download.eclipse.org/windowbuilder/WBPro/integration/3.7">link</a></td>
    <td><a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WBPro/integration/WBPro_v0.9.0_UpdateSite_for_Eclipse3.7.zip">link</a></td>
    <td><a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WBPro/integration/WBPro_v0.9.0_UpdateSite_for_Eclipse3.7.zip.MD5">link</a></td>
  </tr>
  <tr>
    <td>Helios- Eclipse 3.6</td>
    <td><a href="http://download.eclipse.org/windowbuilder/WBPro/integration/3.6">link</a></td>
    <td><a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WBPro/integration/WBPro_v0.9.0_UpdateSite_for_Eclipse3.6.zip">link</a></td>
    <td><a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WBPro/integration/WBPro_v0.9.0_UpdateSite_for_Eclipse3.6.zip.MD5">link</a></td>
  </tr>
  <tr>
    <td>Galileo- Eclipse 3.5</td>
    <td><a href="http://download.eclipse.org/windowbuilder/WBPro/integration/3.5">link</a></td>
    <td><a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WBPro/integration/WBPro_v0.9.0_UpdateSite_for_Eclipse3.5.zip">link</a></td>
    <td><a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WBPro/integration/WBPro_v0.9.0_UpdateSite_for_Eclipse3.5.zip.MD5">link</a></td>
  </tr>
  <tr>
    <td>Ganymede- Eclipse 3.4</td>
    <td><a href="http://download.eclipse.org/windowbuilder/WBPro/integration/3.4">link</a></td>
    <td><a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WBPro/integration/WBPro_v0.9.0_UpdateSite_for_Eclipse3.4.zip">link</a></td>
    <td><a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WBPro/integration/WBPro_v0.9.0_UpdateSite_for_Eclipse3.4.zip.MD5">link</a></td>
  </tr>
</table>


</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>