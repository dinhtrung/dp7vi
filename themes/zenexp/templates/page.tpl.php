<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<div class="page">

  <header class="header" role="banner">

    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <div class="header__name-and-slogan">
        <?php if ($site_name): ?>
          <h1 class="header__site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div class="header__site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <?php if ($secondary_menu): ?>
      <nav class="header__secondary-menu" role="navigation">
        <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => $secondary_menu_heading,
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </nav>
    <?php endif; ?>

    <?php print render($page['header']); ?>

  </header>
  
  <div class="main-navigation">
		<?php if ($main_menu || $secondary_menu): ?>
			<nav class="navbar navbar-default" role="navigation">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="main-menu">
						<span class="sr-only"><?php print t('Toggle navigation'); ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand visible-sm" href="#"><?php print ($site_name)?$site_name:t('Main menu'); ?></a>
				</div>
				<nav class="collapse navbar-collapse main-menu" role="navigation" id="main-menu" tabindex="-1">
					<!-- Collect the nav links, forms, and other content for toggling -->
					<?php if ($main_menu): ?>
							<?php print theme('links__system_main_menu', array(
								'links' => $main_menu,
								'attributes' => array(
									'class' => array('nav navbar-nav'),
								),
							)); ?>
					<?php endif; ?>
					<!-- End of main_menu -->
					
					<!-- Start of secondary menu -->
					<?php if ($secondary_menu): ?>
						<ul class="nav navbar-nav navbar-right">
					    <li class="dropdown">
		      			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php print $secondary_menu_heading; ?> <b class="caret"></b></a>
								<?php print theme('links__system_secondary_menu', array(
								  'links' => $secondary_menu,
								  'attributes' => array(
								    'class' => array('dropdown-menu'),
								  ),
								)); ?>
					    </li>
				    </ul>
					<?php endif; ?><!-- End of secondary menu -->
				</nav>
			</nav>	
		<?php endif; ?>
		
		<?php print render($page['navigation']); ?>
  </div>

  <div class="main">

    <div class="main-content" role="main">
      <?php print render($page['highlighted']); ?>
      <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page__title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>

    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_first || $sidebar_second): ?>
      <aside class="sidebars">
        <?php print $sidebar_first; ?>
        <?php print $sidebar_second; ?>
      </aside>
    <?php endif; ?>

  </div>

  <?php print render($page['footer']); ?>

</div>

<?php print render($page['bottom']); ?>
