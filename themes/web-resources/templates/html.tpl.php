<!DOCTYPE html>
<!--[if IEMobile 7]><html class="iem7" <?php print $html_attributes; ?>><![endif]-->
<!--[if lte IE 6]><html class="lt-ie9 lt-ie8 lt-ie7" <?php print $html_attributes; ?>><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="lt-ie9 lt-ie8" <?php print $html_attributes; ?>><![endif]-->
<!--[if IE 8]><html class="lt-ie9" <?php print $html_attributes; ?>><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html <?php print $html_attributes . $rdf_namespaces; ?>><!--<![endif]-->

<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>

	<meta name="MobileOptimized" content="width">
	<meta name="HandheldFriendly" content="true">
	<meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=10.0,initial-scale=1.0">
	<meta http-equiv="cleartype" content="on">

	<link rel="shortcut icon" href="<?php print $directory; ?>/ico/favicon.png">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php print $directory; ?>/ico/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php print $directory; ?>/ico/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php print $directory; ?>/ico/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php print $directory; ?>/ico/apple-touch-icon-144x144.png">

  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]>
    <script src="<?php print $directory; ?>/js/html5shiv.js"></script>
    <script src="<?php print $directory; ?>/js/respond.min.js"></script>
  <![endif]-->
  
  <style>
  	[class=^col] { background: LightBlue; }
  </style>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
	<p id="skip-link"> <a href="#main-content" class="element-invisible element-focusable"><?php print t("Skip to main content"); ?></a> </p>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <div id="gotoTop" class="icon-angle-up"></div>
</body>
</html>
