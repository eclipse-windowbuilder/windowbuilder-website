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

<p>These instructions assume that you have already installed some flavor of Eclipse. If you have not, Eclipse can be downloaded from <a href="http://www.eclipse.org/downloads/">http://www.eclipse.org/downloads/</a>.</p>



<h3>Update Sites</h3>
<p>If you are already familiar with installing Eclipse plug-ins, you can just use the update site URL below for your version of Eclipse.</p>
<h4>Eclipse 3.7</h4>
<a href="http://download.eclipse.org/windowbuilder/WBPro/integration/3.7">http://download.eclipse.org/windowbuilder/WBPro/integration/3.7</a>

<h4>Eclipse 3.6 (Helios)</h4>
<a href="http://download.eclipse.org/windowbuilder/WBPro/integration/3.6">http://download.eclipse.org/windowbuilder/WBPro/integration/3.6</a>

<h4>Eclipse 3.5 (Galileo)</h4>
<a href="http://download.eclipse.org/windowbuilder/WBPro/integration/3.5">http://download.eclipse.org/windowbuilder/WBPro/integration/3.5</a>

<h4>Eclipse 3.4 (Ganymede)</h4>
<a href="http://download.eclipse.org/windowbuilder/WBPro/integration/3.4">http://download.eclipse.org/windowbuilder/WBPro/integration/3.4</a>
</br>
<p></p>
<h3>Zipped Update Sites</h3>
<h4>Eclipse 3.7</h4>
<a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WBPro/integration/WBPro_v0.9.0_UpdateSite_for_Eclipse3.7.zip">http://eclipse.org/downloads/download.php?file=/windowbuilder/WBPro/integration/WBPro_v0.9.0_UpdateSite_for_Eclipse3.7.zip</a> (<a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WBPro/integration/WBPro_v0.9.0_UpdateSite_for_Eclipse3.7.zip.MD5">MD5 Hash</a>)

<h4>Eclipse 3.6 (Helios)</h4>
<a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WBPro/integration/WBPro_v0.9.0_UpdateSite_for_Eclipse3.6.zip">http://eclipse.org/downloads/download.php?file=/windowbuilder/WBPro/integration/WBPro_v0.9.0_UpdateSite_for_Eclipse3.6.zip</a> (<a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WBPro/integration/WBPro_v0.9.0_UpdateSite_for_Eclipse3.6.zip.MD5">MD5 Hash</a>)

<h4>Eclipse 3.5 (Galileo)</h4>
<a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WBPro/integration/WBPro_v0.9.0_UpdateSite_for_Eclipse3.5.zip">http://eclipse.org/downloads/download.php?file=/windowbuilder/WBPro/integration/WBPro_v0.9.0_UpdateSite_for_Eclipse3.5.zip</a> (<a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WBPro/integration/WBPro_v0.9.0_UpdateSite_for_Eclipse3.5.zip.MD5">MD5 Hash</a>)

<h4>Eclipse 3.4 (Ganymede)</h4>
<a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WBPro/integration/WBPro_v0.9.0_UpdateSite_for_Eclipse3.4.zip">http://eclipse.org/downloads/download.php?file=/windowbuilder/WBPro/integration/WBPro_v0.9.0_UpdateSite_for_Eclipse3.4.zip</a> (<a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/WBPro/integration/WBPro_v0.9.0_UpdateSite_for_Eclipse3.4.zip.MD5">MD5 Hash</a>)

</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>