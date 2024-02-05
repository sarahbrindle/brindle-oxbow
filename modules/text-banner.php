<?php 
$module = $args['module']; 
$no_buttons = 0;
if($module['buttons']){
    $buttons = $module['buttons'];
    $no_buttons = count($buttons);
}
?>
<section class="text-banner-outer" <?php if($module['background']){?> style="background-image: url(<?=$module['background']['url']?>);" <?php }?>>
    <div class="container">
        <div class="text-banner-wrap">
            <?=$module['editor']?> 


            <?php if ($no_buttons > 0) { ?>
                  <div class="sec-action d-f jc-se">
                        <?php foreach($buttons as $button) { ?>
                            <div class="gf-action-single-outer"><?php get_template_part('partials/button', null, array('button' => $button['link'],'class_alt' => 'button link-btn', 'has_arrow' => false)); ?></div>
                        <?php } ?>            
                  </div>
              <?php } ?>


              <?php if ($module['shortcode'] != "") { ?>
              <div class="form-full">
                  <?php echo do_shortcode($module['shortcode']); ?>
              </div>
              <?php } ?>

        </div>
    </div>
</section>