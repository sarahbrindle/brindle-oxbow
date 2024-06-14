<?php $module = $args['module']; ?>
<!--module banner starts here-->
<!-- Preload the LCP image with a high fetchpriority so it starts loading with the stylesheet. -->
<?php $s=0;
if($module['slider']){foreach ($module['slider'] as $image) {  if($s==0){  $s++;?>
<link rel="preload" fetchpriority="high" as="image" href="<?=$image['photo']['url']?>" type="image/webp">
<?php }}} ?>

<section id="banner">
    <div class="mobile_banner"><img fetchpriority="high" src="<?php echo $module['mobile_banner']['url'];?>" width="499" height="599" class="mobile-banner-image"  alt="<?php echo $module['mobile_banner']['title'];?>"></div>
    <div class="bnr-slider">
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
              <?php get_template_part('partials/button', null, array('button' => $module['banner_button'],'class_alt' => 'btn-link t-w fw-b', 'has_arrow' => false)); ?>
        </div>
    </div>
</section>
<!--module banner ends here-->