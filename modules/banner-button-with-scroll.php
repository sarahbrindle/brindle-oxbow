<?php 
$module = $args['module']; 
$no_buttons = 0;
if($module['buttons']){
    $buttons = $module['buttons'];
    $no_buttons = count($buttons);
}
?>
<section id="connect" <?php if($module['background']){?> style="background-image: url(<?=$module['background']['url']?>);" <?php }?>>
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
  <?php if($module['scroll_content']){?>
      <div class="wide-label">
        <span>
          <marquee width="100%" direction="left">
              <?=$module['scroll_content']?>
          </marquee>
        </span>
      </div>
  <?php }?>
</section>