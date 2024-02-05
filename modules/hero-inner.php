<?php $module = $args['module']; ?>
<!--inner banner starts here-->
<section id="ibanner" class="bnrbox">
  <?php if($module['inner_banner_image']){?>
      <img src="<?=$module['inner_banner_image']['url']?>" alt="<?=$module['inner_banner_image']['title']?>">
  <?php }?>
</section>
<!--inner banner ends here-->