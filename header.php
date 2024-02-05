<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
        wp_head();
        // Get global style data from ACF
        $colors = get_field('colors', 'options');
        $fonts = get_field('fonts', 'options');
        $typography = get_field('typography', 'options');
        $import_string = get_import_string($fonts);
    ?>
    <style>
        /* Font import */
        /* @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Source+Sans+3:wght@400;500;600;700&display=swap');*/

        @import url('<?=$import_string?>');

      
        
        :root {
            /* Colors */
            --primary-color: <?php echo $colors['primary_color']; ?>;
            --secondary-color: <?php echo $colors['secondary_color']; ?>;
            --tertiary-color: <?php echo $colors['tertiary_color']; ?>;
            --black: <?php echo $colors['black']; ?>;
            --white: <?php echo $colors['white']; ?>;
            /* Fonts */
            --headings: "<?php echo $fonts['headings']['font_name']; ?>";
            --primary-font: "<?php echo $fonts['headings']['font_name']; ?>";
            --body-copy: "<?php echo $fonts['body_copy']['font_name']; ?>";
            --subheadings: "<?php echo $fonts['subheadings']['font_name']; ?>";
            --secondary-font: "<?php echo $fonts['subheadings']['font_name']; ?>";
            /* Typography */
            --h1-size: <?php echo "{$typography['h1']['font_size']}px"; ?>;
            --h2-size: <?php echo "{$typography['h2']['font_size']}px"; ?>;
            --h3-size: <?php echo "{$typography['h3']['font_size']}px"; ?>;
            --h4-size: <?php echo "{$typography['h4']['font_size']}px"; ?>;
            --h5-size: <?php echo "{$typography['h5']['font_size']}px"; ?>;
            --h6-size: <?php echo "{$typography['h6']['font_size']}px"; ?>;
            --h1-font: <?php echo get_font($typography['h1']['font']); ?>;
            --h2-font: <?php echo get_font($typography['h2']['font']); ?>;
            --h3-font: <?php echo get_font($typography['h3']['font']); ?>;
            --h4-font: <?php echo get_font($typography['h4']['font']); ?>;
            --h5-font: <?php echo get_font($typography['h5']['font']); ?>;
            --h6-font: <?php echo get_font($typography['h6']['font']); ?>;
            --body-copy-large-size: <?php echo "{$typography['body_copy_large']['font_size']}px"; ?>;
            --body-copy-standard-size: <?php echo "{$typography['body_copy_standard']['font_size']}px"; ?>;
            --body-copy-small-size: <?php echo "{$typography['body_copy_small']['font_size']}px"; ?>;
            --body-copy-large-font: <?php echo get_font($typography['body_copy_large']['font']); ?>;
            --body-copy-standard-font: <?php echo get_font($typography['body_copy_standard']['font']); ?>;
            --body-copy-small-font: <?php echo get_font($typography['body_copy_small']['font']); ?>;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/aos.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/style.css">
</head>
<body <?php body_class(); ?>>
    <div id="global">
    <a class="sr-only" href="#content">Skip to Main Content</a>
    <?php get_template_part('partials/header'); ?>
    <!--page-content-starts-here-->