<?php 
$module = $args['module']; 
$no_buttons = 0;
if($module['buttons']){
    $buttons = $module['buttons'];
    $no_buttons = count($buttons);
}
?>
<section class="sec-features mt120" <?php if($module['background']){?> style="background-image: url(<?=$module['background']['url']?>)" <?php }?>>
      
      <div class="glry-grid">

        <div class="container mw-13">
          <div class="row">
          


          <?php if($module['box']){foreach ($module['box'] as $item) { 
                $button = $item['link'];
                $photo = $item['photo'];
              ?>
              <div class="col-md-4">
                <?php if($photo){?> 
                    <div class="glry-card">
                          <a <?php if($button){if (isset($button['target'])){ if ($button['target']){ echo 'target="_blank"'; }}}?> href="<?php if($button){ echo $button['url'];}?>" style="background-image: url(<?php echo $photo['url'];?>)"><?php echo $item['title'];?></a>
                    </div>
                <?php }?>  
              </div>
              <?php }}?>
          
         


        </div>
        </div>

      </div>

      <div class="container">
        <div class="cnct-wrap">
          <?=$module['editor']?>
          

         


          <?php if ($no_buttons > 0) { ?>
            <div class="sec-action d-f jc-se">
                  <?php foreach($buttons as $button) { ?>
                      <?php get_template_part('partials/button', null, array('button' => $button['link'],'class_alt' => 'link-btn t-w', 'has_arrow' => false)); ?>
                  <?php } ?>            
            </div>
          <?php } ?>


        </div>
      </div>

      <div class="wide-label">
        <span>
          <marquee width="100%" direction="left">
              <?=$module['scroll_content']?>
          </marquee>
        </span> 
      </div>

    </section>