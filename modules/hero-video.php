<?php $module = $args['module']; ?>
<!--module banner starts here-->
<section id="banner">
     <div class="video-outer">            
            
            <video class="background_video_the_video" autoplay="" muted="" loop="" playsinline="" poster="<?php echo $module['poster'];?>" preload="auto"><source src="<?php echo $module['video_file'];?>" type="video/mp4"></video>
            <div class="color-overlay"></div>
    </div>
    <div class="bnr-content">
        <div class="bnr-txt">
              <?=$module['banner_info']?>
              <?php get_template_part('partials/button', null, array('button' => $module['banner_button'],'class_alt' => 'btn-link t-w fw-b', 'has_arrow' => false)); ?>
        </div>
    </div>
</section>
<!--module banner ends here-->