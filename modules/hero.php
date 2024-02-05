<?php $module = $args['module']; ?>
<!--module banner starts here-->
<section id="banner">
    <div class="bnr-slider" data-aos="zoom-out">
    <?php if($module['slider']){foreach ($module['slider'] as $image) { ?>
        <div>
            <div class="bnr-home" style="background-image: url('<?=$image['photo']['url']?>');">&nbsp;
            </div>
        </div>
    <?php }} ?>
    </div>
    <div class="bnr-content">
        <div class="bnr-txt">
              <?=$module['banner_info']?>
              <?php get_template_part('partials/button', null, array('button' => $module['banner_button'],'class_alt' => 'link-btn t-w fw-b', 'has_arrow' => false)); ?>
        </div>
    </div>
</section>
<!--module banner ends here-->