<?php
    global $post;
    $currentPostId = $post->ID; 
    $logo = get_field('logo', 'options'); 
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
          <a href="<?php echo home_url(); ?>" class="brand"><img src="<?=$logo['url']?>" alt="<?=$logo['alt']?>" class="header-logo" /></a>
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
                                  <ul class="sub-menu">
                                    <?php
                                    $list = get_field('list', 'options');
                                    $count = 1;
                                    if($list){
                                     foreach ($list as $item) { 
                                    ?>
                                    <li <?php if($count == 1){?> class="active" <?php }?>>
                                      <a><?php echo $item['title'];?></a>
                                      <ul <?php if($count == 1){?> class="active" <?php }?>>
                                           <?php 
                                            if($item['box']){
                                              $boxes = $item['box'];
                                              foreach ($boxes as $box_item) {
                                              ?>
                                                    <?php  if($box_item['image']){?>
                                                    <li><a <?php if ($box_item['box_link']){ if ($box_item['box_link']['target']){ echo 'target="_blank"'; }}?> <?php if ($box_item['box_link']){ if ($box_item['box_link']['url']){?> href="<?php echo $box_item['box_link']['url'];?>" <?php }}?> <?php if($box_item['image']){?> style="background-image: url(<?php echo $box_item['image']['url'];?>);" <?php }?>><span><?php if ($box_item['box_link']){echo $box_item['box_link']['title'];}?></span></a></li>
                                                    <?php }  ?>
                                              <?php
                                              }}
                                           ?>
                                      </ul>
                                    </li>
                                    <?php $count++; }} ?> 
                                  </ul>
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
              <button id="navtoggle" class="btn-menu">&nbsp;</button>
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
    
    <?php wp_nav_menu(array('theme_location' => 'full-screen-menu','menu_class'=> "overlay-menu")); ?>
    
  </section>
  <!--overlay-menu starts here-->