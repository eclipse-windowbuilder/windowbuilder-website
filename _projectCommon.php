<?php

/*******************************************************************************
 * Copyright (c) 2009 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

$host = $_SERVER['DOCUMENT_ROOT'];
require_once($host . "/eclipse.org-common/system/app.class.php");
require_once($host . "/eclipse.org-common/system/nav.class.php");
require_once($host . "/eclipse.org-common/system/menu.class.php");
require_once($host . "/eclipse.org-common/system/breadcrumbs.class.php");

$App = new App();
$Nav  = new Nav();
$Theme = $App->getThemeClass();
$Breadcrumb = new Breadcrumb();


# Define these here, or in _projectCommon.php for site-wide values
$pageKeywords	= "eclipse, project, WindowBuilder, WindowBuilderPro, Instantiations, Google";
$pageAuthor		= "Jaime Wren";
$pageTitle 		= "WindowBuilder";

$Breadcrumb->removeCrumb($Breadcrumb->getCrumbCount() - 1);
$Breadcrumb->addCrumb("WindowBuilder", ".", "_self");
$Breadcrumb->addCrumb("WindowBuilder", ".", "_self");

# Define your project-wide Navigation here
# This appears on the left of the page if you define a left nav
# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
# these are optional
	
# If you want to override the eclipse.org navigation, uncomment below.
# $Nav->setLinkList(array());
	
# Break the navigation into sections
# $Nav->addNavSeparator("MyProject", 	"/windowbuilder");
# $Nav->addCustomNav("Download", "/windowbuilder/download.php", "_self", 3);
# $Nav->addCustomNav("Documentation", "/windowbuilder/documentation.php", "_self", 3);
# $Nav->addCustomNav("Support", "/windowbuilder/support.php", "_self", 3);
# $Nav->addCustomNav("Getting Involved", "/windowbuilder/developers", "_self", 3);


# top navigation bar
# To override and replace the navigation with your own, uncomment the line below.
# $Menu->setMenuItemList(array());
# $Menu->addMenuItem("Home", "/project", "_self");
# $Menu->addMenuItem("Download", "/project/download.php", "_self");
# $Menu->addMenuItem("Documentation", "/project/documentation.php", "_self");
# $Menu->addMenuItem("Support", "/project/support.php", "_self");
# $Menu->addMenuItem("Developers", "/project/developers", "_self");
	
# To define additional CSS or other pre-body headers
$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/windowbuilder/style.css"/>');
	
# To enable occasional Eclipse Foundation Promotion banners on your pages (EclipseCon, etc)
$App->Promotion = TRUE;
	
# If you have Google Analytics code, use it here
# $App->SetGoogleAnalyticsTrackingCode("YOUR_CODE");
	
// Initialize custom solstice $variables.
$variables = array();

// Add classes to <body>. (String)
$variables['body_classes'] = '';

// Insert HTML before the left nav. (String)
$variables['leftnav_html'] = '';

// Update the main container class (String)
$variables['main_container_classes'] = 'container';

// Insert HTML after opening the main content container, before the left sidebar. (String)
$variables['main_container_html'] = '';

// Insert header navigation for project websites.
// Bug 436108 - https://bugs.eclipse.org/bugs/show_bug.cgi?id=436108
$links = array();
$links[] = array(
  'icon' => 'fa-download', // Required
  'url' => 'download.php', // Required
  'title' => 'Download', // Required
  // 'target' => '_blank', // Optional
  'text' => 'Update Sites' // Optional
);

$links[] = array(
  'icon' => 'fa-users', // Required
  'url' => 'involved.php', // Required
  'title' => 'Getting Involved', // Required
  // 'target' => '_blank', // Optional
  'text' => 'Git, Workspace Setup' // Optional
);

$links[] = array(
  'icon' => 'fa-book', // Required
  'url' => 'documentation.php', // Required
  'title' => 'Documentation', // Required
  // 'target' => '_blank', // Optional
  'text' => 'User Guide' // Optional
);

$links[] = array(
  'icon' => 'fa-support', // Required
  'url' => 'support.php', // Required
  'title' => 'Support', // Required
  // 'target' => '_blank', // Optional
  'text' => 'Questions, Issue Tracking' // Optional
);	

$variables['header_nav'] = array(
  'links' => $links, // Required
  'logo' => array( // Required
    // 'src' => 'https://projects.eclipse.org/sites/default/files/windowbuilder_0.png', // Required
    'src' => 'images/wb_eclipse_logo.svg', // Required
    'alt' => 'Home Page', // Optional
    // 'target' => '_blank', // Optional
    'url' => '.' // Optional
  )
);

// Set Solstice theme variables. (Array)
$App->setThemeVariables($variables);

?>