<?php $module = $args['module']; ?>
<section class="sec-features">
  <div class="bnr-block">
    <?php if($module['photo']){?>
        <img src="<?=$module['photo']['url']?>" alt="<?=$module['photo']['alt']?>" >
    <?php }?>
  </div>
  <div class="sec-wide">
    <div class="container">
      <h3 class="block-title"><?php echo $module['title'];?></h3>
      <ul class="featlist">
        <?php if($module['list']){foreach ($module['list'] as $item) { ?>
            <li><?php echo $item['title'];?> 
                <?php if($item['image']){?> 
                  <a href="<?php echo $item['image']['url']; ?>" title="<?php echo $item['image']['title']; ?>" data-fslightbox="gallery"><span class="ic-photo">Photo</span> </a>
                <?php }?>
            </li>
        <?php }}?>
        
      </ul>
    </div>
  </div>
</section>



