<?php $module = $args['module'];
$no_buttons = 0;
if($module['buttons']){
    $buttons = $module['buttons'];
    $no_buttons = count($buttons);
}
?>
<section id="intro" class="sec-intro">
<div class="container minwrap">
  <h2 class="sec-title">
    <?=$module['title']?>
  </h2>
  <?=$module['editor']?>

  <?php if ($no_buttons > 0) { ?>
          <div class="sec-action d-f jc-se">
                <?php foreach($buttons as $button) { ?>
                    <?php get_template_part('partials/button', null, array('button' => $button['link'],'class_alt' => 'link-btn '.$button['class'], 'has_arrow' => false)); ?>
                <?php } ?>            
          </div>
        <?php } ?>

</div>
</section>