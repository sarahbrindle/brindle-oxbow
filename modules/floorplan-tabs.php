<?php $module = $args['module']; ?>
<section class="sec-floorplan-full">
  <div class="container">
    <div class="nav-tabs-outer">
      <ul class="nav nav-tabs js-tabs">
            <?php $tabCount = 1; if($module['tabs']) { foreach($module['tabs'] as $tabs) { ?>
            <li class="<?php if($tabCount==1){?> active <?php }?> text-center"><a <?php if($tabCount==1){?> class="active" <?php }?> href="#tab<?php echo $tabCount; ?>" data-toggle="tab"><?php echo $tabs['tab_title']; ?></a></li>
            <?php $tabCount++; }} ?> 
      </ul>
      <div class="tab-content">


        <?php $tabCount = 1; if($module['tabs']){ foreach($module['tabs'] as $tabs) { ?>
                                    

                        <div id="tab<?php echo $tabCount; ?>" role="tabpanel" class="tab-pane <?php if($tabCount==1){?> active show <?php }?> fade in">
                              <?php if ($tabs['shortcode'] != "") { ?>   
                                  <?php echo do_shortcode($tabs['shortcode']); ?>
                              <?php } ?>
                              <?php if ($tabs['iframe_embed_code']) { ?>
                                    <?php echo $tabs['iframe_embed_code']; ?>
                              <?php } ?>
                              <?php if ($tabs['image']) { ?>                              
                                  <img src="<?php echo $tabs['image']['url']; ?>" alt="<?php echo $tabs['image']['alt']; ?>" />
                              <?php } ?>
                        </div>                   
                    
                   
            <?php $tabCount++; }} ?> 
       
      </div>


    </div>
  </div>
</section>