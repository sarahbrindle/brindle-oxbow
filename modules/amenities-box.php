<?php 
$module = $args['module']; 
$no_buttons = 0;
if($module['buttons']){
    $buttons = $module['buttons'];
    $no_buttons = count($buttons);
}
?>
<section class="sec-features mt120" <?php if($module['background']){?> style="background-image: url(<?=$module['background']['url']?>)" <?php }?>>
  <div class="layer">
      
      <div class="glry-grid">

        <div class="container mw-13">
          <div class="row">
          


          <?php if($module['box']){foreach ($module['box'] as $item) {                 
                $photo = $item['photo'];
              ?>
              <div class="col-md-4">
                <?php if($photo){?> 
                    <div class="glry-card">
                          <a  style="background-image: url(<?php echo $photo['url'];?>)"><?php echo $item['title'];?></a>
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
      <?php }?>
</div>
</section>