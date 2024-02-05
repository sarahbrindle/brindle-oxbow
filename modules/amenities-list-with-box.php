<?php $module = $args['module']; ?>
<section class="sec-features bnrbox fx-frame mt120">
      
      <div class="glry-grid" <?php if($module['background']){?> style="background-image: url(<?=$module['background']['url']?>)" <?php }?>>

        <div class="container mw-13">
          <div class="row">
          

              <?php if($module['box']){foreach ($module['box'] as $item) { 
                $button = $item['link'];
                $photo = $item['box_photo'];
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

      <div class="sec-wide pos-rel">
        <div class="container">

          <h3 class="block-title"><?php echo $module['title'];?></h3>

          <ul class="featlist">
            <?php if($module['list']){foreach ($module['list'] as $item) { ?>
                <li><?php echo $item['title'];?> 
                    <?php if($item['item_photo']){?> 
                      <a href="<?php echo $item['item_photo']['url']; ?>" title="<?php echo $item['item_photo']['title']; ?>" data-fslightbox="gallery"><span class="ic-photo">Photo</span> </a>
                    <?php }?>
                </li>
            <?php }}?>
          </ul>

        </div>
      </div>

    </section>