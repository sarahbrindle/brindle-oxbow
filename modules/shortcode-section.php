<?php $module = $args['module']; 

?>
<style>

  .shortcode_section h2,.shortcode_section h3,.shortcode_section h4,.shortcode_section h5,.shortcode_section h6{
    padding: 0 0 0.2em;
  }

</style>
<section class="sec-gallery-full shortcode_section">
      <div class="container">
        <div class="sec-wide ">
        <?php echo do_shortcode($module['introduction_message']); ?>
        </div>
        <?php echo do_shortcode($module['short_code']); ?>

      </div>
</section>