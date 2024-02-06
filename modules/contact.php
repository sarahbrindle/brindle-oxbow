<?php $module = $args['module']; ?>
<!--module contact starts here-->
<section id="contact" class="sec-wide">
  <div class="container">
    <div class="cont-block">

      <div class="cont-col">
        <div class="cont-txt">

          <h4 class="col-title">
            <?=$module['title']?>
          </h4>
          <?=$module['copy']?>
          <?php if($module['photo']){?>
              <div class="cont-img">
                <img src="<?=$module['photo']['url']?>" alt="">
              </div>
          <?php }?>
        </div>
      </div>

      <div class="cont-col">
        <div class="cont-form">
          <?php echo do_shortcode($module['shortcode']); ?>
        </div>
      </div>

    </div>
  </div>
</section>
<!--module contact ends here-->