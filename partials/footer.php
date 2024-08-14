<?php
    $footer = get_field('footer', 'options');
    $show_section = get_field('show_section');
    $edit_section = get_field('edit_section_content_for_this_page');
    if ($edit_section) {
        $book_a_tour = get_field('overwrite_section_content')['book_a_tour'];
    } else {
        $book_a_tour = get_field('find_your_perfect_space', 'options');
    }
?>

<?php if ($show_section) { ?>

<?php 
$module = $book_a_tour; 
$no_buttons = 0;
if($module['buttons']){
    $buttons = $module['buttons'];
    $no_buttons = count($buttons);
}
?>
<section id="connect" <?php if (isset($module['background'])) { ?> <?php if($module['background']){?> style="background-image: url(<?=$module['background']['url']?>);" <?php }}?>>
<div class="layer">
  <div class="container">
        <div class="cnct-wrap">
          <?=$module['editor']?>   
              <?php if ($no_buttons > 0) { ?>
                  <div class="sec-action d-f jc-se">
                        <?php foreach($buttons as $button) { ?>
                            <div class="gf-action-single-outer"><?php get_template_part('partials/button', null, array('button' => $button['link'],'class_alt' => 'link-btn t-w', 'has_arrow' => false)); ?></div>
                        <?php } ?>            
                  </div>
              <?php } ?>
        </div>
  </div>
  <?php if (isset($module['scroll_items'])) { ?>
  <?php if($module['scroll_items']){?>
      <div class="wide-label">

        <div class="scroll-track">
            <?php if($module['scroll_items']){foreach ($module['scroll_items'] as $item) { ?>
            <div>
              <div class="scrlabel"><?php echo $item['item'];?></div>
            </div>
          <?php }}?>            
        </div>

      </div>
  <?php }} ?>
</div>
</section>

<?php } ?>

<!-- Site Footer Starts -->
  <footer id="colophon">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 d-f ai-c">
          <?php if (isset($footer['logo'])) { ?>
              <?php if ($footer['logo']) { ?>
                  <a href="<?php echo home_url(); ?>" class="home-link" <?php if($footer['logo_max_width']) { echo 'style="max-width:' . $footer['logo_max_width'] . 'px;"'; } ?>><img src="<?=$footer['logo']['url']?>" alt="<?=$footer['logo']['alt']?>" /></a>
              <?php }} ?>
        </div>
        <div class="col-lg-8">
          <div class="fgroup">
            <div class="fmenu">
              <?php if (isset($footer['contact_section_title'])) { if ($footer['contact_section_title'] !="") { ?>
              <h6><?=$footer['contact_section_title']?></h6>
              <?php }}?>
              <address>
                <?=$footer['contact_address']?>
              </address>
              <?php if(isset($footer['footer_icon'])){                  
              ?>
                <p>
                <?php if(isset($footer['footer_icon'])){foreach ($footer['footer_icon'] as $item) { 
                  if(isset($item['url'])){
                    $button = $item['url'];
                ?>
                    <a <?php if (isset($button['target'])){ if ($button['target']){ echo 'target="_blank"'; }}?> <?php if (isset($button['url'])){?> href="<?=$button['url']?>" <?php }?> class="ic-social" <?php if (isset($item['icon'])){?> style="background-image: url(<?=$item['icon']['url']?>);" <?php }?> target="_blank"><?php if (isset($item['label'])){?><?=$item['label']?><?php }?></a>
                <?php }}}?>  
                </p>   
              <?php }?>  

				
            </div>
            <div class="fmenu">
              <?php if (isset($footer['menu_title'])) { if ($footer['menu_title'] !='') { ?>
                  <h6><?=$footer['menu_title']?></h6>
              <?php }}?>
              <?php wp_nav_menu(array('theme_location' => 'footer-menu')); ?>
            </div>            
            <div class="fmenu">
              <?php if (isset($footer['link_section_title'])) { if ($footer['link_section_title'] !='') { ?>
                  <h6><?=$footer['link_section_title']?></h6>
              <?php }}?>
              <?php wp_nav_menu(array('theme_location' => 'link-menu')); ?>
              <p>                
                <?php
                if (isset($footer['buttons'])) {
                if($footer['buttons']){
                 foreach ($footer['buttons'] as $icons) { ?>
                          <?php if (isset($icons['link'])) { ?>
                              <?php get_template_part('partials/button', null, array('button' => $icons['link'],'class_alt' => 'link-btn t-w', 'has_arrow' => false)); ?>
                          <?php }?>
                <?php }}} ?>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="foot-info">
        <div class="credits">
          <?php if (isset($footer['copyright'])) { ?>
          <?php if ($footer['copyright']) { ?>
              <p>
                  <?php
                  $copyright = $footer['copyright'];
                  $copyright = str_replace('{YEAR}', date('Y'), $copyright);
                  echo $copyright;
                  ?>            
              </p>
          <?php }}?>
          <?php
          if (isset($footer['icons'])) { 
          if($footer['icons']){
          ?>
          <p class="fconnect">
              <?php 
               foreach ($footer['icons'] as $icons) { ?>
                        
                        
                            <?php if ($icons['link'] != "") { ?>
                                <a href="<?php echo $icons['link']; ?>" target="_blank">
                            <?php } ?> 
                                  <img src="<?php echo $icons['icon']['url']; ?>" alt="<?php echo $icons['icon']['alt']; ?>" />
                            <?php if ($icons['link'] != "") { ?></a><?php } ?> 
                        
              
              <?php }?>
          </p>
          <?php }} ?>          
        </div>

        <div class="finfo-links">
            <?php 
            if (isset($footer['designer'])) { 
            if($footer['designer']){
            foreach ($footer['designer'] as $icons) { ?>
                <?php if ($icons['designer_link'] != "") { ?>
                <a href="<?php echo $icons['designer_link']['url']; ?>" <?php if (isset($icons['designer_link']['target'])){ if ($icons['designer_link']['target']){ echo 'target="_blank"'; }}?>>
                <?php } ?> 
                <img src="<?php echo $icons['designer_icon']['url']; ?>" alt="<?php echo $icons['designer_icon']['alt']; ?>" />
                <?php if ($icons['designer_link'] != "") { ?></a><?php } ?> 
            <?php }}} ?>
        </div>
      </div>
    </div>
  </footer>
  <!-- Site Footer Ends -->