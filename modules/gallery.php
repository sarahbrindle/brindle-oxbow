<?php $module = $args['module']; ?>
<section class="sec-gallery-full">
      <div class="container">

        <ul class="grid-block">
          <?php if($module['photos']){foreach ($module['photos'] as $item) { 
            $button = '';
            $url = '';
            if($item['link']){
                $url = $item['link']['url'];
                $button = $item['link'];
            }
          ?>
              <?php if (isset($item['photo'])){ if ($item['photo']){ ?>
                      <li>
                        <a href="<?php echo $url;?>" <?php if (isset($button['target'])){ if ($button['target']){ echo 'target="_blank"'; }}?> class="img-grid" <?php if (isset($item['photo'])){ if ($item['photo']){ ?>  style="background-image: url(<?php echo $item['photo']['url'];?>)" <?php }}?>  >
                          <span class="ig-overlay">
                            <div>
                              <em><?php echo $item['title'];?></em>
                              <?php echo $item['sub_title'];?>
                            </div>
                          </span>
                        </a>
                      </li>
                <?php }}?>
          <?php }}?>

        </ul>

      </div>
    </section>