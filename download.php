<?php  																													
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

// Shared variables/configs for all pages of your website.
require_once ('_projectCommon.php');

// Use our own favicon
$App->AddExtraHtmlHeader('<link rel="shortcut icon" href="images/favicon.ico"/>');

$pageTitle 		= "WindowBuilder | Download";
$Breadcrumb->removeCrumb($Breadcrumb->getCrumbCount() - 1);
$Breadcrumb->addCrumb("Download", "download.php", "_self");

$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>
<p>
<a href='https://projects.eclipse.org/projects/tools.windowbuilder'><img src='images/wb.svg' style='float:left; padding-right: 10px; max-height: 8ex;'></a>
All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">
Eclipse Foundation Software User Agreement</a>.
</p>

<p>Develop Java graphical user interfaces in minutes for Swing, SWT, RCP and XWT with WindowBuilder&rsquo;s 
WYSIWYG, drag-and-drop interface. Use wizards, editors and intelligent layout assist to automatically generate 
clean Java code, with the visual design and source always in sync.</p>

<p>These instructions assume that you have already installed some flavor of Eclipse. If you have not, Eclipse 
can be downloaded from <a href="https://www.eclipse.org/downloads/">https://www.eclipse.org/downloads/</a>. 
Instructions and system requirements for installing WindowBuilder can be found 
<a href="https://help.eclipse.org/index.jsp?topic=/org.eclipse.wb.doc.user/html/installation/index.html">here</a>.</p>

<h3>Update Sites</h3>

<p>
WindowBuilder's new <a href="https://download.eclipse.org/windowbuilder/updates/">update sites</a> document all the available repository locations as well as their contents and dependencies.
The following update sites are the most generally useful:
</p>
<ul>
<li>
<a href="https://download.eclipse.org/windowbuilder/updates/release/latest">https://download.eclipse.org/windowbuilder/updates/release/latest</a>
<ul><li>Update to the most recent release.
	<div class="drag_installbutton drag_installbutton_v2">
		<a href="https://marketplace.eclipse.org/marketplace-client-intro?mpc_install=3085446" class="drag"
			title="Drag to your running Eclipse* workspace. *Requires Eclipse Marketplace Client"><span
				class="btn btn-default"><i class="fa fa-download orange"></i> Install</span>
			<div class="tooltip">
				<h3>Drag to Install!</h3>Drag to your running Eclipse<sup>*</sup> workspace.
				<br /><sup>*</sup>Requires Eclipse Marketplace Client
			</div>
	        </a>
	</div>	
</li></ul>
</li>
<li>
<a href="https://download.eclipse.org/windowbuilder/updates/milestone/latest">https://download.eclipse.org/windowbuilder/updates/milestone/latest</a>
<ul><li>Update to a recent stable build leading to the next release.</li></ul>
</li>
<li>
<a href="https://download.eclipse.org/windowbuilder/updates/nightly/latest">https://download.eclipse.org/windowbuilder/updates/nightly/latest</a>
<ul><li>Update to the most recent bleeding-edge build based on the most recent commit. 

	<div class="drag_installbutton drag_installbutton_v2">
		<a href="https://marketplace.eclipse.org/marketplace-client-intro?mpc_install=4961416" class="drag"
			title="Drag to your running Eclipse* workspace. *Requires Eclipse Marketplace Client"><span
				class="btn btn-default"><i class="fa fa-download orange"></i> Install</span>
			<div class="tooltip">
				<h3>Drag to Install!</h3>Drag to your running Eclipse<sup>*</sup> workspace.
				<br /><sup>*</sup>Requires Eclipse Marketplace Client
			</div>
	        </a>
	</div>
	</li></ul>
</li>
</ul>


<h3>OLD RELEASES</h3>

<table border="2" id="downloads-table">
	<tr>
	  <th></th>
	  <th colspan="3"><b>Download and Install</b></th>
	</tr>
	<tr>
	  <td><b>Version</b></td>
	  <td><b>Update Site</b></td>
	  <td><b>Zipped Update Site</b></td>
	<tr>
	  <td>1.11.0 (Permanent)</td>
	  <td><a href="https://download.eclipse.org/windowbuilder/1.11.0/">link</a></td>
	  <td><a href="https://eclipse.org/downloads/download.php?file=/windowbuilder/1.11.0/repository.zip">link</a></td>
	</tr>	
	<tr>
	  <td>1.10.0 (Permanent)</td>
	  <td><a href="https://download.eclipse.org/windowbuilder/1.10.0/">link</a></td>
	  <td><a href="https://eclipse.org/downloads/download.php?file=/windowbuilder/1.10.0/repository.zip">link</a></td>
	</tr>
	<tr>
	  <td>1.9.8 (Permanent)</td>
	  <td><a href="https://download.eclipse.org/windowbuilder/1.9.8/">link</a></td>
	  <td><a href="https://eclipse.org/downloads/download.php?file=/windowbuilder/1.9.8/repository.zip">link</a></td>
	</tr>
	<tr>
	  <td>1.9.7 (Permanent)</td>
	  <td><a href="https://download.eclipse.org/windowbuilder/1.9.7/">link</a></td>
	  <td><a href="https://eclipse.org/downloads/download.php?file=/windowbuilder/1.9.7/repository.zip">link</a></td>
	</tr>
	<tr>
	  <td>1.9.6 (Permanent)</td>
	  <td><a href="https://download.eclipse.org/windowbuilder/1.9.6/">link</a></td>
	  <td><a href="https://eclipse.org/downloads/download.php?file=/windowbuilder/1.9.6/repository.zip">link</a></td>
	</tr>
	<tr>
	  <td>1.9.5 (removed)</td>
	  <td>removed</td>
	  <td>removed</td>
	</tr>
	<tr>
	  <td>1.9.4 (Permanent)</td>
	  <td><a href="https://download.eclipse.org/windowbuilder/1.9.4/">link</a></td>
	  <td><a href="https://eclipse.org/downloads/download.php?file=/windowbuilder/1.9.4/repository.zip">link</a></td>
	</tr>
	<tr>
	  <td>1.9.3 (Permanent)</td>
	  <td><a href="https://download.eclipse.org/windowbuilder/1.9.3/">link</a></td>
	  <td><a href="https://eclipse.org/downloads/download.php?file=/windowbuilder/1.9.3/repository.zip">link</a></td>
	</tr>
	<tr>
	  <td>1.9.2 (Permanent)</td>
	  <td><a href="https://download.eclipse.org/windowbuilder/1.9.2/">link</a></td>
	  <td><a href="https://eclipse.org/downloads/download.php?file=/windowbuilder/1.9.2/repository.zip">link</a></td>
	</tr>
	<tr>
	  <td>1.9.1 (Permanent)</td>
	  <td><a href="https://download.eclipse.org/windowbuilder/1.9.1/">link</a></td>
	  <td><a href="https://eclipse.org/downloads/download.php?file=/windowbuilder/1.9.1/repository.zip">link</a></td>
	</tr>
	<tr>
	  <td>1.9.0 (Permanent)</td>
	  <td><a href="https://download.eclipse.org/windowbuilder/1.9.0/">link</a></td>
	  <td><a href="https://eclipse.org/downloads/download.php?file=/windowbuilder/1.9.0/repository.zip">link</a></td>
	</tr>
	<tr>
	  <td>Archives</td>
	  <td><a href="https://archive.eclipse.org/windowbuilder/">link</a></td>
	  <td></td>
	</tr>
</table>

<p> </p>
<p><b><i>Installing the Update Site or Zip editions requires the full Eclipse SDK including JDT and PDE. 
Use the Eclipse Committers, Java, Java EE, or RCP/Plug-in Developers distribution or install JDT and PDE separately.</i></b></p>

</div>
EOHTML;

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html, $Breadcrumb);
?>
