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

        $h1_size = $typography['h1']['font_settings']['font_size']/10;
        $h1_weight = $typography['h1']['font_settings']['font_weight'];
        $h1_style = $typography['h1']['font_settings']['font_style'];
        $h1_line_height = $typography['h1']['font_settings']['line_height'];
        $h1_letter_spacing = $typography['h1']['font_settings']['letter_spacing'];


        $h2_size = $typography['h2']['font_settings']['font_size']/10;
        $h2_weight = $typography['h2']['font_settings']['font_weight'];
        $h2_style = $typography['h2']['font_settings']['font_style'];
        $h2_line_height = $typography['h2']['font_settings']['line_height'];
        $h2_letter_spacing = $typography['h2']['font_settings']['letter_spacing'];

        $h3_size = $typography['h3']['font_settings']['font_size']/10;
        $h3_weight = $typography['h3']['font_settings']['font_weight'];
        $h3_style = $typography['h3']['font_settings']['font_style'];
        $h3_line_height = $typography['h3']['font_settings']['line_height'];
        $h3_letter_spacing = $typography['h3']['font_settings']['letter_spacing'];

        $h4_size = $typography['h4']['font_settings']['font_size']/10;
        $h4_weight = $typography['h4']['font_settings']['font_weight'];
        $h4_style = $typography['h4']['font_settings']['font_style'];
        $h4_line_height = $typography['h4']['font_settings']['line_height'];
        $h4_letter_spacing = $typography['h4']['font_settings']['letter_spacing'];

        $h5_size = $typography['h5']['font_settings']['font_size']/10;
        $h5_weight = $typography['h5']['font_settings']['font_weight'];
        $h5_style = $typography['h5']['font_settings']['font_style'];
        $h5_line_height = $typography['h5']['font_settings']['line_height'];
        $h5_letter_spacing = $typography['h5']['font_settings']['letter_spacing'];

        $h6_size = $typography['h6']['font_settings']['font_size']/10;
        $h6_weight = $typography['h6']['font_settings']['font_weight'];
        $h6_style = $typography['h6']['font_settings']['font_style'];
        $h6_line_height = $typography['h6']['font_settings']['line_height'];
        $h6_letter_spacing = $typography['h6']['font_settings']['letter_spacing'];


        $body_copy_large = $typography['body_copy_large']['font_settings']['font_size']/10;
        $body_copy_large_weight = $typography['body_copy_large']['font_settings']['font_weight'];
        $body_copy_large_style = $typography['body_copy_large']['font_settings']['font_style'];
        $body_copy_large_line_height = $typography['body_copy_large']['font_settings']['line_height'];
        $body_copy_large_letter_spacing = $typography['body_copy_large']['font_settings']['letter_spacing'];


        $body_copy_standard = $typography['body_copy_standard']['font_settings']['font_size']/10;
        $body_copy_standard_weight = $typography['body_copy_standard']['font_settings']['font_weight'];
        $body_copy_standard_style = $typography['body_copy_standard']['font_settings']['font_style'];
        $body_copy_standard_line_height = $typography['body_copy_standard']['font_settings']['line_height'];
        $body_copy_standard_letter_spacing = $typography['body_copy_standard']['font_settings']['letter_spacing'];


        $body_copy_small = $typography['body_copy_small']['font_settings']['font_size']/10;
        $body_copy_small_weight = $typography['body_copy_small']['font_settings']['font_weight'];
        $body_copy_small_style = $typography['body_copy_small']['font_settings']['font_style'];
        $body_copy_small_line_height = $typography['body_copy_small']['font_settings']['line_height'];
        $body_copy_small_letter_spacing = $typography['body_copy_small']['font_settings']['letter_spacing'];

        $menu_regular = $typography['menu_regular']['font_settings']['font_size']/10;
        $menu_regular_weight = $typography['menu_regular']['font_settings']['font_weight'];
        $menu_regular_style = $typography['menu_regular']['font_settings']['font_style'];
        $menu_regular_line_height = $typography['menu_regular']['font_settings']['line_height'];
        $menu_regular_letter_spacing = $typography['menu_regular']['font_settings']['letter_spacing'];

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
            --h1-font: <?php echo get_font($typography['h1']['font_settings']['font']); ?>;
            --h1-size: <?php echo "{$h1_size}rem"; ?>;
            --h1-style: <?php echo $h1_style; ?>;
            --h1-weight: <?php echo $h1_weight; ?>;
            --h1-line-height: <?php echo $h1_line_height; ?>;
            --h1-letter-spacing: <?php echo $h1_letter_spacing; ?>;

            --h2-font: <?php echo get_font($typography['h2']['font_settings']['font']); ?>;
            --h2-size: <?php echo "{$h2_size}rem"; ?>;
            --h2-style: <?php echo $h2_style; ?>;
            --h2-weight: <?php echo $h2_weight; ?>;
            --h2-line-height: <?php echo $h2_line_height; ?>;
            --h2-letter-spacing: <?php echo $h2_letter_spacing; ?>;

            --h3-font: <?php echo get_font($typography['h3']['font_settings']['font']); ?>;
            --h3-size: <?php echo "{$h3_size}rem"; ?>;
            --h3-style: <?php echo $h3_style; ?>;
            --h3-weight: <?php echo $h3_weight; ?>;
            --h3-line-height: <?php echo $h3_line_height; ?>;
            --h3-letter-spacing: <?php echo $h3_letter_spacing; ?>;

            --h4-font: <?php echo get_font($typography['h4']['font_settings']['font']); ?>;
            --h4-size: <?php echo "{$h4_size}rem"; ?>;
            --h4-style: <?php echo $h4_style; ?>;
            --h4-weight: <?php echo $h4_weight; ?>;
            --h4-line-height: <?php echo $h4_line_height; ?>;
            --h4-letter-spacing: <?php echo $h4_letter_spacing; ?>;

            --h5-font: <?php echo get_font($typography['h5']['font_settings']['font']); ?>;
            --h5-size: <?php echo "{$h5_size}rem"; ?>;
            --h5-style: <?php echo $h5_style; ?>;
            --h5-weight: <?php echo $h5_weight; ?>;
            --h5-line-height: <?php echo $h5_line_height; ?>;
            --h5-letter-spacing: <?php echo $h5_letter_spacing; ?>;

            --h6-font: <?php echo get_font($typography['h6']['font_settings']['font']); ?>;
            --h6-size: <?php echo "{$h6_size}rem"; ?>;
            --h6-style: <?php echo $h6_style; ?>;
            --h6-weight: <?php echo $h6_weight; ?>;
            --h6-line-height: <?php echo $h6_line_height; ?>;
            --h6-letter-spacing: <?php echo $h6_letter_spacing; ?>;



           
            
            
            --body-copy-large-font: <?php echo get_font($typography['body_copy_large']['font_settings']['font']); ?>;
            --body-copy-large-size: <?php echo "{$body_copy_large}rem"; ?>;
            --body-copy-large-style: <?php echo $body_copy_large_style; ?>;
            --body-copy-large-weight: <?php echo $body_copy_large_weight; ?>;
            --body-copy-large-line-height: <?php echo $body_copy_large_line_height; ?>;
            --body-copy-large-letter-spacing: <?php echo $body_copy_large_letter_spacing; ?>;

            --body-copy-standard-font: <?php echo get_font($typography['body_copy_standard']['font_settings']['font']); ?>;
            --body-copy-standard-size: <?php echo "{$body_copy_standard}rem"; ?>;
            --body-copy-standard-style: <?php echo $body_copy_standard_style; ?>;
            --body-copy-standard-weight: <?php echo $body_copy_standard_weight; ?>;
            --body-copy-standard-line-height: <?php echo $body_copy_standard_line_height; ?>;
            --body-copy-standard-letter-spacing: <?php echo $body_copy_standard_letter_spacing; ?>;

            --body-copy-small-font: <?php echo get_font($typography['body_copy_small']['font_settings']['font']); ?>;
            --body-copy-small-size: <?php echo "{$body_copy_small}rem"; ?>;
            --body-copy-small-style: <?php echo $body_copy_small_style; ?>;
            --body-copy-small-weight: <?php echo $body_copy_small_weight; ?>;
            --body-copy-small-line-height: <?php echo $body_copy_small_line_height; ?>;
            --body-copy-small-letter-spacing: <?php echo $body_copy_small_letter_spacing; ?>;

            --menu-regular-font: <?php echo get_font($typography['menu_regular']['font_settings']['font']); ?>;
            --menu-regular-size: <?php echo "{$menu_regular}rem"; ?>;
            --menu-regular-style: <?php echo $menu_regular_style; ?>;
            --menu-regular-weight: <?php echo $menu_regular_weight; ?>;
            --menu-regular-line-height: <?php echo $menu_regular_line_height; ?>;
            --menu-regular-letter-spacing: <?php echo $menu_regular_letter_spacing; ?>;
            
            
            
        }
    </style>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/aos.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/bootstrap.min.css">
    <!--<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/style.min.css">-->

    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/style.css">


</head>
<body <?php body_class(); ?>>
    <div id="global">
    <a class="sr-only" href="#content">Skip to Main Content</a>
    <?php get_template_part('partials/header'); ?>
    <!--page-content-starts-here-->