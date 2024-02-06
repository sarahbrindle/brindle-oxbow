<?php $module = $args['module']; ?>
<section class="sec-locate">
  <div class="bnr-wide">  
    <div class="loc-map">
      <?php echo do_shortcode('[neighborhood]'); ?>
    </div>
    
    <div class="loc-section" id="loc-1">   
      <div class="cont-block mw-12">
        <div class="cont-col">
          <div class="cont-txt">
            
            <div class="cont-img mxw-520">
              <?php if($module['photo']){?>
              <img src="<?=$module['photo']['url']?>" alt="<?=$module['photo']['alt']?>" alt="">
              <?php }?>
            </div>
          </div>
        </div>

        <div class="cont-col wscore">
          <h4 class="col-title">
            <?php echo $module['title'];?>
          </h4>
          <?php if($module['list']){foreach ($module['list'] as $item) { ?>
          <p>
            <strong><?php echo $item['count'];?></strong> <?php echo $item['title'];?>
          </p>
          <?php }}?>
          <?php if ($module['link']) { ?>
          <p class="col-action d-f jc-fe">
            <?php get_template_part('partials/button', null, array('button' => $module['link'],'class_alt' => 'link-text', 'has_arrow' => false)); ?>
          </p>
          <?php }?>
        </div>

      </div><!-- /.cont-block -->

    </div><!-- /.loc-section -->

  </div>

</section>