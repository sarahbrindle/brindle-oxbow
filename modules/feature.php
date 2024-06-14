<?php $module = $args['module']; ?>
<section id="featured">
      <div class="container">
        
            <div class="maxwrap">
              <div class="row">
                <div class="col-lg-6">
                  <span class="catg-tagline"><?=$module['title']?></span>
                  <h2 class="col-title">
                    <?=$module['subtitle']?>
                  </h2>
                </div>
                <div class="col-lg-6">

                  <div class="feat-txt">
                    <div class="wmark-img">
                      <?php if($module['water_mark']){?>
						            <img src="<?php echo $module['water_mark']['url'];?>" alt="<?php echo $module['water_mark']['title'];?>">
                      <?php }?>                      
					         </div>
                    <p><?php echo $module['copy'];?></p>                    
                    <?php get_template_part('partials/button', null, array('button' => $module['link'],'class_alt' => 'btn-link', 'has_arrow' => false)); ?>
                  </div>

                </div>
              </div>
            </div>


            <div class="gallery-slider">
                  <?php if($module['grids']){foreach ($module['grids'] as $image) { ?>
                              <?php 
                              if(($image['link']) || ($image['photo'])){
                                  if($image['link']){
                                    $button = $image['link'];
                                  }
                                  $imgTitle = $image['link']['title'];
                                  $imgTitle = str_replace('<br>',"<br>",$imgTitle);
                                  $imgTitle = str_replace('\n',"<br>",$imgTitle);
                              ?>
                              <div>
                                <a <?php if (isset($button['target'])){ if ($button['target']){ echo 'target="_blank"'; }}?> <?php if($image['link']){?> href="<?=$image['link']['url']?>" <?php }?> class="img-block">
                                  <span class="img-thumb" <?php if (isset($image['photo'])){ if ($image['photo']){ ?> style="background-image: url('<?=$image['photo']['url']?>');" <?php }}?> >
                                        <?php if($image['link']){?><span class="view-txt"><?php echo $imgTitle;?></span><?php }?>
                                  </span>
                                  <em class="img-title"><?=$image['title']?></em>
                                </a>
                              </div>
                            <?php }?>
                  <?php }} ?> 
            </div>

      </div>
</section>