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
<p>All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> unless otherwise specified.</p>

<p>Develop Java graphical user interfaces in minutes for Swing, SWT, RCP and XWT with WindowBuilder Pro&rsquo;s WYSIWYG, drag-and-drop interface. Use wizards, editors and intelligent layout assist to automatically generate clean Java code, with the visual design and source always in sync.</p>

<p>These instructions assume that you have already installed some flavor of Eclipse. If you have not, Eclipse can be downloaded from <a href="http://www.eclipse.org/downloads/">http://www.eclipse.org/downloads/</a>. Instructions and system requirements for installing WindowBuilder can be found <a href="http://code.google.com/javadevtools/wbpro/installation/index.html">here</a>.</p>



<h3>Update Sites</h3>

<table border="2">
<tr>
  <th><b>Eclipse Version</b></th>
  <th colspan="2"><b>Release Version</b></th>
  <th colspan="2"><b>Integration Version</b></th>
</tr>
<tr>
  <td></td>
  <td><b>Update Site</b></td>
  <td><b>Zipped Update Site</b></td>
  <td><b>Update Site</b></td>
  <td><b>Zipped Update Site</b></td>
</tr>
<tr>
  <td>3.7 (Indigo)</td>
  <td><a href="http://download.eclipse.org/windowbuilder/WB/release/R201106211200/3.7/">link</a></td>
  <td><a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WB/integration/WB_v1.0.0_UpdateSite_for_Eclipse3.7.zip">link</a>(<a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WB/integration/WB_v1.0.0_UpdateSite_for_Eclipse3.7.zip.MD5">MD5 Hash</a>)</td>
  <td><a href="http://download.eclipse.org/windowbuilder/WB/integration/3.7/">link</a></td>
  <td><a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WB/integration/WB_v1.0.0_UpdateSite_for_Eclipse3.7.zip">link</a>(<a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WB/integration/WB_v1.0.0_UpdateSite_for_Eclipse3.7.zip.MD5">MD5 Hash</a>)</td>
</tr>
<tr>
  <td>3.6 (Helios)</td>
  <td><a href="http://download.eclipse.org/windowbuilder/WB/integration/3.6/">link</a></td>
  <td><a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WB/integration/WB_v1.0.0_UpdateSite_for_Eclipse3.6.zip">link</a>(<a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WB/integration/WB_v1.0.0_UpdateSite_for_Eclipse3.6.zip.MD5">MD5 Hash</a>)</td>
  <td><a href="http://download.eclipse.org/windowbuilder/WB/integration/3.6/">link</a></td>
  <td><a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WB/integration/WB_v1.0.0_UpdateSite_for_Eclipse3.6.zip">link</a>(<a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WB/integration/WB_v1.0.0_UpdateSite_for_Eclipse3.6.zip.MD5">MD5 Hash</a>)</td>
</tr>
<tr>
  <td>3.5 (Galileo)</td>
  <td><a href="http://download.eclipse.org/windowbuilder/WB/integration/3.5/">link</a></td>
  <td><a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WB/integration/WB_v1.0.0_UpdateSite_for_Eclipse3.5.zip">link</a>(<a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WB/integration/WB_v1.0.0_UpdateSite_for_Eclipse3.5.zip.MD5">MD5 Hash</a>)</td>
  <td><a href="http://download.eclipse.org/windowbuilder/WB/integration/3.5/">link</a></td>
  <td><a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WB/integration/WB_v1.0.0_UpdateSite_for_Eclipse3.5.zip">link</a>(<a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WB/integration/WB_v1.0.0_UpdateSite_for_Eclipse3.5.zip.MD5">MD5 Hash</a>)</td>
</tr>
<tr>
  <td>3.4 (Ganymede)</td>
  <td><a href="http://download.eclipse.org/windowbuilder/WB/integration/3.4/">link</a></td>
  <td><a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WB/integration/WB_v1.0.0_UpdateSite_for_Eclipse3.4.zip">link</a>(<a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WB/integration/WB_v1.0.0_UpdateSite_for_Eclipse3.4.zip.MD5">MD5 Hash</a>)</td>
  <td><a href="http://download.eclipse.org/windowbuilder/WB/integration/3.4/">link</a></td>
  <td><a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WB/integration/WB_v1.0.0_UpdateSite_for_Eclipse3.4.zip">link</a>(<a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WB/integration/WB_v1.0.0_UpdateSite_for_Eclipse3.4.zip.MD5">MD5 Hash</a>)</td>
</tr>
</table>

<p> </p>
<p><b><i>Installing the Update Site or Zip editions for Eclipse 3.4 or above requires the full Eclipse SDK including the JDT and PDE. Use the Eclipse Classic, Java EE or RCP/Plug-in Developers distribution or install the JDT and PDE separately.</i></b></p>

</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>