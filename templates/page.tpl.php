<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <title><?php print $head_title; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=8"> 
    <?php print $head; ?>
    <?php print $styles; ?>
    <!--[if lte IE 6]><style type="text/css" media="all">@import "<?php print $base_path . path_to_theme() ?>/css/ie6.css"</style><![endif]-->
    <!--[if IE 7]><style type="text/css" media="all">@import "<?php print $base_path . path_to_theme() ?>/css/ie7.css"</style><![endif]-->
    <?php print $scripts; ?>
  </head>
  <body class="<?php print $body_classes; ?>">
    <div id="page">
    <!-- ______________________ HEADER _______________________ -->
   <div id="blackbar">
   <div id="gbar" class="row">
   <ul class="hmenu column grid_7" id="gmenu">
   <li><a href="<?php print $front_page; ?>">Malaysia Network</a></li>
   <li><a href="http://www.theiet.org" target="_blank">Global Network</a></li>
   <li><a href="http://kn.theiet.org" target="_blank">Knowledge Network</a></li>
   </ul>
   <ul class="hmenu column grid_5" id="msearch">
<li class="msearch">
  <?php print $search_box; ?>
</li>
</ul>
   </div>
   </div>
   
    <div id="header" class="row">
      <div id="logo-title" class="column grid_3">       
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
            <img src="<?php print $base_path . path_to_theme() ?>/images/iet-logo.gif" alt="<?php print t('Home'); ?>"/>
          </a>
      </div> <!-- /logo-title -->
      <?php if ($header): ?>
        <div id="header-region" class="column grid_9">
          <?php print $header; ?>
        </div>
      <?php endif; ?>
	
    </div> <!-- /header -->

         <?php if (!empty($primary_links)): ?>
     <div id="pmenu" class="row"><div class="column grid_12"><?php if (!empty($primary_links)){ print theme('links', $primary_links, array('id' => 'primary', 'class' => 'hmenu')); } ?></div></div>
     <?php endif;?>

   <div class="clear wbox">&nbsp;</div>

    <!-- ______________________ MAIN _______________________ -->

    <div id="main" class="row">
    
        <?php if ($left): ?>
          <div id="sidebar-first" class="column grid_3">
            <div id="sidebar-first-inner" class="inner">
              <?php print $left; ?>
            </div>
          </div>
        <?php endif; ?> <!-- /sidebar-left -->

      <div id="content" class="column grid_7">
        <div id="content-inner" class="inner">

          <?php if ($content_top): ?>
            <div id="content-top">
              <?php print $content_top; ?>
            </div> <!-- /#content-top -->
          <?php endif; ?>


          <?php if ($breadcrumb || $title || $mission || $messages || $help || $tabs): ?>
            <div id="content-header">

              <?php print $breadcrumb; ?>

              <?php if ($title): ?>
                <h1 class="title"><?php print $title; ?></h1>
              <?php endif; ?>

              <?php if ($mission): ?>
                <div id="mission"><?php print $mission; ?></div>
              <?php endif; ?>

              <?php print $messages; ?>

              <?php print $help; ?> 

              <?php if ($tabs): ?>
                <div class="tabs"><?php print $tabs; ?></div>
              <?php endif; ?>

            </div> <!-- /#content-header -->
          <?php endif; ?>

          <div id="content-area">
            <?php print $content; ?>
          </div> <!-- /#content-area -->

          <?php print $feed_icons; ?>

          <?php if ($content_bottom): ?>
            <div id="content-bottom">
              <?php print $content_bottom; ?>
            </div><!-- /#content-bottom -->
          <?php endif; ?>

         </div>
        </div> <!-- /content-inner /content -->

        <?php if ($right): ?>
          <div id="sidebar-second" class="column grid_2">
            <div id="sidebar-second-inner" class="inner">
              <?php print $right; ?>
            </div>
          </div>
        <?php endif; ?> <!-- /sidebar-second -->

      </div> <!-- /main -->

      <!-- ______________________ FOOTER _______________________ -->

   <div class="clear wbox">&nbsp;</div>
   <div class="row footbar">
   <div class="column grid_4 footl"><?=$footleft ?></div>
   <div class="column grid_4 footm"><?=$footmida ?></div>
   <div class="column grid_4 footr"><?=$footrite ?></div>
   </div>
   <div class="clear wbox">&nbsp;</div>
          <?php if (!empty($secondary_links)): ?>
    <div id="smenu" class="row"><div class="column grid_12"><?php if (!empty($secondary_links)){ print theme('links', $secondary_links, array('id' => 'secondary', 'class' => 'hmenu')); } ?></div></div>
    <?php endif;?>
   <div class="clear wbox">&nbsp;</div>
      <?php if(!empty($footer_message) || !empty($footer_block)): ?>
        <div id="footer" class="row">
	   <div class="column grid_12">
          <?php print $footer_message; ?>
          <?php print $footer_block; ?>
	  </div>
        </div> <!-- /footer -->
      <?php endif; ?>

    </div> <!-- /page -->
    <?php print $closure; ?>
  </body>
</html>