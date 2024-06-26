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

        $h1_size = $typography['h1']['font_size']/10;
        $h2_size = $typography['h2']['font_size']/10;
        $h3_size = $typography['h3']['font_size']/10;
        $h4_size = $typography['h4']['font_size']/10;
        $h5_size = $typography['h5']['font_size']/10;
        $h6_size = $typography['h6']['font_size']/10;

        $body_copy_large = $typography['body_copy_large']['font_size']/10;
        $body_copy_standard = $typography['body_copy_standard']['font_size']/10;
        $body_copy_small = $typography['body_copy_small']['font_size']/10;

    ?>
    <style>
        /* Font import */
        /* @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Source+Sans+3:wght@400;500;600;700&display=swap');*/

        @import url('<?=$import_string?>');

      
        
        :root {
            /* Colors */
            --primary-color: <?php echo $colors['primary_color']; ?>;
            --secondary-color: <?php echo $colors['secondary_color']; ?>;
            --accent-color: <?php echo $colors['accent_color']; ?>;            
            --primary-text-color: <?php echo $colors['primary_text_color']; ?>;            
            --white: <?php echo $colors['white']; ?>;
            --background-color: <?php echo $colors['background_color']; ?>;
            --hover-color: <?php echo $colors['hover_color']; ?>;
            /* Fonts */
            --headings: "<?php echo $fonts['headings']['font_name']; ?>";
            --primary-font: "<?php echo $fonts['headings']['font_name']; ?>";
            --body-copy: "<?php echo $fonts['body_copy']['font_name']; ?>";
            --subheadings: "<?php echo $fonts['subheadings']['font_name']; ?>";
            --secondary-font: "<?php echo $fonts['subheadings']['font_name']; ?>";
            /* Typography */
            --h1-size: <?php echo "{$h1_size}rem"; ?>;
            --h2-size: <?php echo "{$h2_size}rem"; ?>;
            --h3-size: <?php echo "{$h3_size}rem"; ?>;
            --h4-size: <?php echo "{$h4_size}rem"; ?>;
            --h5-size: <?php echo "{$h5_size}rem"; ?>;
            --h6-size: <?php echo "{$h6_size}rem"; ?>;
            --h1-font: <?php echo get_font($typography['h1']['font']); ?>;
            --h2-font: <?php echo get_font($typography['h2']['font']); ?>;
            --h3-font: <?php echo get_font($typography['h3']['font']); ?>;
            --h4-font: <?php echo get_font($typography['h4']['font']); ?>;
            --h5-font: <?php echo get_font($typography['h5']['font']); ?>;
            --h6-font: <?php echo get_font($typography['h6']['font']); ?>;
            --body-copy-large-size: <?php echo "{$body_copy_large}rem"; ?>;
            --body-copy-standard-size: <?php echo "{$body_copy_standard}rem"; ?>;
            --body-copy-small-size: <?php echo "{$body_copy_small}rem"; ?>;
            --body-copy-large-font: <?php echo get_font($typography['body_copy_large']['font']); ?>;
            --body-copy-standard-font: <?php echo get_font($typography['body_copy_standard']['font']); ?>;
            --body-copy-small-font: <?php echo get_font($typography['body_copy_small']['font']); ?>;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/aos.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/style.min.css">
</head>
<body <?php body_class(); ?>>
    <div id="global">
    <a class="sr-only" href="#content">Skip to Main Content</a>
    <?php get_template_part('partials/header'); ?>
    <!--page-content-starts-here-->