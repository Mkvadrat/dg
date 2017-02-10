<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>
<div class="all-wrapper">
<div class="top-padding">&nbsp;</div>
<dir class="header-wrapper">
  <header class="header" id="header" role="banner">
    <?php if ($site_name || $site_slogan): ?>
      <div class="header__name-and-slogan" id="name-and-slogan">
        <?php if ($site_name): ?>
          <h1 class="header__site-name" id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home">
<span><span class="company">Компания</span><br />Донецкие Грузчики</span></a>
          </h1>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div class="header__site-slogan" id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>
      </div>
    <?php endif; ?>
    <div class="head">
  <?php
      print render($page['header']);
  ?> 
    </div>
    <?php
      print render($page['stock']);
      print render($page['phones']);
    ?>
  </header>
</dir>
<div id="main-page">
    <div id="content" class="column" role="main">

      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <div class="page__title title" id="page-title"><?php print $title; ?></div>
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

  </div>
  <div class="footer-wrapper">
    <div class="footer">
    <?php 
        print render($page['phones']);
    ?>
  	<span><span>Компания<br />Донецкие Грузчики</span></span>
    	<?php 
  	  	print render($page['footer']);
    	?>
    </div>
  </div>
<div class="buttom-padding">
&nbsp;
</div>
</div>