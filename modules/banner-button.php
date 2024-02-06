<?php 
$module = $args['module']; 
$no_buttons = 0;
if($module['buttons']){
    $buttons = $module['buttons'];
    $no_buttons = count($buttons);
}
?>
<section id="gallery" class="sec-gallery" <?php if($module['background']){?> style="background-image: url(<?=$module['background']['url']?>);" <?php }?>>
      <div class="gallery-frame">
            <div class="gf-content">
                <span class="catg-tagline"><?=$module['title']?></span>
                <h3 class="grid-title">
                  <?=$module['sub_title']?>
                </h3>
              
                <?php if ($no_buttons > 0) { ?>
                  <div class="gf-action">
                        <?php foreach($buttons as $button) { ?>
                            <div class="gf-action-single-outer"><?php get_template_part('partials/button', null, array('button' => $button['link'],'class_alt' => 'link-btn-normal t-w', 'has_arrow' => false)); ?></div>
                        <?php } ?>            
                  </div>
                <?php } ?>
              
            </div>
      </div>
</section>