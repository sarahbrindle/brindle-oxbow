<?php
    global $post;
    $currentPostId = $post->ID; 
    $logo = get_field('logo', 'options'); 
	$logo_width = get_field('logo_max_width', 'options');
	$menu_logo = get_field('menu_logo', 'options'); 
	$menu_logo_width = get_field('menu_logo_max-width', 'options');
    $hamburg_menu_disabled_pages = array(); 
    if(get_field('hamburg_menu_disabled_pages', 'options')){
      $hamburg_menu_disabled_pages = get_field('hamburg_menu_disabled_pages', 'options'); 
    }
    $menu_for_hamburg_menu_disabled_pages = get_field('menu_for_hamburg_menu_disabled_pages', 'options');
?>
<!-- Site Header Starts -->
  <header id="masthead">

    <div class="container hmain">

      <?php if($logo){?>
          <a href="<?php echo home_url(); ?>" class="brand" <?php if($logo_width) { echo 'style="max-width:' . $logo_width . 'px"'; } ?>><img src="<?=$logo['url']?>" alt="<?=$logo['alt']?>" class="header-logo" /></a>
      <?php }?>

      <div class="hside">
        <?php  if(!(in_array($currentPostId, $hamburg_menu_disabled_pages))){?>
              <nav id="navmain">

                <ul id="navmenu" class="navmenu">
                  <?php
                      $menu_name = 'header-menu';
                      $array_menu = wp_get_nav_menu_items($menu_name);
                      // print_r($array_menu);exit;
                      foreach ($array_menu as $navItem ) {
                          $page_id = $navItem->object_id;
                          $target = $navItem->target;
                          $classes = $navItem->classes;
                          $active = '';
                          $button = '';
                          if ($classes[0] != '') {
                          $button = 'class="'.implode(' ', $classes).'"';  
                          if($currentPostId == $page_id){
                            $button = 'class="'.implode(' ', $classes).' current-menu-item"';  
                          }      
                          }else if($currentPostId == $page_id){
                            $button = 'class="current-menu-item"';
                          }        
                          $targetClass = '';
                          if($target){
                          $targetClass = 'target="_blank"';
                          }
                          if(in_array('mega-menu', $classes)){
                  ?>
                          <?php
                          echo '<li '.$button.'><a href="'.$navItem->url.'" title="'.$navItem->title.'" '.$targetClass.'>'.$navItem->title.'</a>';
                          ?>
                                <div class="sub-menu-wrap">

                                  <div class="sub-menu-row">
                                    <ul class="sub-menu">
                                      <?php
                                      $list = get_field('list', 'options');
                                      $count = 1;
                                      if($list){
                                       foreach ($list as $item) { 
                                      ?>
                                      <li data-grid="menu-grid-<?php echo $count; ?>">
                                        <a <?php if ($item['link']){ if ($item['link']['target']){ echo 'target="_blank"'; }}?> <?php  if($item['link']){?> href="<?php echo $item['link']['url'];?>" <?php }?>><?php echo $item['title'];?></a>       
                                      </li>
                                      <?php $count++; }} ?> 
                                    </ul>
                                    <ul class="sub-menu-grid">
                                      <?php
                                      $list = get_field('list', 'options');
                                      $count = 1;
                                      if($list){
                                       foreach ($list as $item) { 
                                        if($item['photo']){
                                      ?>
                                      <li data-menu="menu-grid-<?php echo $count;?>">
                                        <a <?php if ($item['link']){ if ($item['link']['target']){ echo 'target="_blank"'; }}?> <?php  if($item['link']){?> href="<?php echo $item['link']['url'];?>" <?php }?> style="background-image: url(<?php echo $item['photo'];?>);">
                                          <span>VIEW <?php echo $item['title'];?></span>
                                        </a>
                                      </li>
                                      <?php $count++; }}} ?>                                      
                                      
                                      
                                    </ul>
                                  </div>

                                </div>
                            </li>
                              <?php
                            }else{
                                echo '<li '.$button.'><a href="'.$navItem->url.'" title="'.$navItem->title.'" '.$targetClass.'>'.$navItem->title.'</a></li>';
                            }

                        }
                        ?> 
              </ul>  
                <?php //wp_nav_menu(array('theme_location' => 'header-menu','menu_class'=> "navmenu",'menu_id'=> "navmenu")); ?>
              </nav>
              <button id="navtoggle" class="btn-menu">
                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
              </button>
        <?php }else{?>
              <?php if($menu_for_hamburg_menu_disabled_pages !=''){?>
                    <nav id="navmain">           
                    <?php wp_nav_menu(array('menu' => $menu_for_hamburg_menu_disabled_pages,'menu_class'=> "navmenu",'menu_id'=> "navmenu")); ?>
                    </nav>
              <?php }else{?>
                    <nav id="navmain">            
                    <?php wp_nav_menu(array('theme_location' => 'header-menu','menu_class'=> "navmenu",'menu_id'=> "navmenu")); ?>
                    </nav>
              <?php }?>
        <?php }?>

      </div>

    </div>

  </header>
  <!-- Site Header Ends -->

  <!--overlay-menu starts here-->
  <section class="overlay-nav">
    
    <button class="ovl-close">&nbsp;</button>

    <div class="ovlnav-wrap">
      <div class="ovl-logo">

        <?php 
		  $hdata = get_field('header', 'options');
          $fdata = get_field('footer', 'options');
        ?>
        <img src="<?=$menu_logo['url']?>" alt="<?=$menu_logo['alt']?>" <?php if($menu_logo_width) { echo 'style="max-width:' . $menu_logo_width . 'px;"'; } ?>>

      </div>

      <div class="ovl-menu">
        
        <?php wp_nav_menu(array('theme_location' => 'full-screen-menu','menu_class'=> "overlay-menu")); ?>

        <ul class="ovl-blockmenu">
          <li>
            <?php 
            $links = get_field('links', 'options');
            $button_link = get_field('button_link', 'options');

            if($links){foreach ($links as $item) { ?>
            
            <?php get_template_part('partials/button', null, array('button' => $item['link'],'class_alt' => '', 'has_arrow' => false)); ?>
            <?php }}?>     
          </li>
          <li>
            <?php get_template_part('partials/button', null, array('button' => $button_link,'class_alt' => 'link-btn t-w fw-b', 'has_arrow' => false)); ?>
          </li>
        </ul>

      </div>

    </div>
    
    <!-- <?php wp_nav_menu(array('theme_location' => 'full-screen-menu','menu_class'=> "overlay-menu")); ?> -->
    
  </section>
  <!--overlay-menu starts here-->