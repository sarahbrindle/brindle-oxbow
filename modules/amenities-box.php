<?php 
$module = $args['module']; 
$book_a_tour = get_field('find_your_perfect_space', 'options');
$ct_module = $book_a_tour; 
$no_buttons = 0;
if($ct_module['buttons']){
    $buttons = $ct_module['buttons'];
    $no_buttons = count($buttons);
}
?>
<section class="sec-features mt120" <?php if($ct_module['background']){?> style="background-image: url(<?=$ct_module['background']['url']?>)" <?php }?>>
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
          <?=$ct_module['editor']?>
          

         


          <?php if ($no_buttons > 0) { ?>
            <div class="sec-action d-f jc-se">
                  <?php foreach($buttons as $button) { ?>
                      <?php get_template_part('partials/button', null, array('button' => $button['link'],'class_alt' => 'link-btn t-w', 'has_arrow' => false)); ?>
                  <?php } ?>            
            </div>
          <?php } ?>


        </div>
      </div>

      <?php if($ct_module['scroll_items']){?>
      <div class="wide-label">
        <div class="scroll-track">
            <?php if($ct_module['scroll_items']){foreach ($ct_module['scroll_items'] as $item) { ?>
            <div>
              <div class="scrlabel"><?php echo $item['item'];?></div>
            </div>
          <?php }}?>            
        </div>
      </div>
      <?php }?>
</div>
</section>