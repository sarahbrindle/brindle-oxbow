<?php $module = $args['module']; ?>
<!--module banner starts here-->
<section id="banner">
    <div class="bnr-slider">
    
        <div>
            <div class="bnr-home" <?php if($module['background']){?> style="background-image: url(<?=$module['background']['url']?>);" <?php }?>>&nbsp;
            </div>
        </div>
    
    </div>
    <div class="bnr-content">
        <div class="bnr-txt">
              <?=$module['editor']?>
              
        </div>
    </div>

    <div class="bnr-form">
      <?php if ($module['shortcode'] != "") { ?>
      <div class="landing-form">
          <?php  echo do_shortcode($module['shortcode']); ?>
      </div>
      <?php } ?>
    </div>

</section>
<!--module banner ends here-->