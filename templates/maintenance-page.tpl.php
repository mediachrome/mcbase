<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page while offline.
 *
 * All the available variables are mirrored in html.tpl.php and page.tpl.php.
 * Some may be blank but they are provided for consistency.
 *
 * @see template_preprocess()
 * @see template_preprocess_maintenance_page()
 */
?><!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
<?php
/**
 * Prevent IE slipping into compatibility mode for any reason
 * This must come before any other meta tag and before any IE conditionals
 */
  print '<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">';
?>


  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if IE]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]>
  <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js">
  <link type="text/css" rel="stylesheet" media="all" href="<?php echo path_to_theme(); ?>/css/mcbase.ie-lt9.css" />
  </script>
  <![endif]-->
  <meta name="viewport" content="width=device-width" />
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>

<div id="page-wrapper"><div id="page">

<div class="maintenance-logo-block clearfix">
<?php if ($logo): ?>
<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
</a>
<?php endif; ?>

<?php if ($site_name || $site_slogan): ?>
<div id="name-and-slogan">

<?php if ($site_name): ?>
<?php if ($title): ?>
<div id="site-name"><strong>
<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
</strong></div>

<?php else: /* Use h1 when the content title is empty */ ?>
<h1 id="site-name">
<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
</h1>
<?php endif; ?>
<?php endif; ?>

<?php if ($site_slogan): ?>
<div id="site-slogan"><?php print $site_slogan; ?></div>
<?php endif; ?>

</div> <!-- /#name-and-slogan -->
<?php endif; ?>
</iv>


<div class="maintenance-panel clearfix">
        <div id="content">
          <?php if (!empty($title)): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
          <?php if (!empty($messages)): print $messages; endif; ?>
          <div id="content-content" class="clearfix">
            <?php print $content; ?>
          </div> <!-- /content-content -->
        </div> <!-- /content -->
</div>

</div></div> <!-- / #page --><!--/ #page-wrapper -->

</body>
</html>
