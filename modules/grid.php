<?php 
$module = $args['module']; 

?>
<section id="explore" class="sec-wide">
  <div class="container">
    <h3 class="col-title"><?=$module['title']?></h3>
    <ul class="grid-block">
      <?php if($module['tiles']){foreach ($module['tiles'] as $image) { 
            $button = '';
            $url = '';
            if($image['link']){
                $url = $image['link']['url'];
                $button = $image['link'];
            }
      ?>
      
      <li>
        <a <?php if($image['link']){?>  href="<?=$image['link']['url']?>" <?php }?>  <?php if (isset($button['target'])){ if ($button['target']){ echo 'target="_blank"'; }}?> class="img-grid" <?php if($image['photo']){?> style="background-image: url('<?=$image['photo']['url']?>')" <?php }?> >
          <span class="ig-overlay">
            <div>
              <?=$image['title']?>
            </div>
          </span>
        </a>
      </li>

      <?php }} ?>  
    </ul>
  </div>
</section>