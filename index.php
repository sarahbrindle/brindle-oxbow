<?php get_header(); ?>
    <main id="content">
          <?php 
            if ( !(is_404()) ) {
              $modules = get_fields()['modules'];
              if ($modules) {
                  foreach ($modules as $module) {
                      $module_path = str_replace("_", "-", $module['acf_fc_layout']);
                      get_template_part('modules/' . $module_path, null, array('module' => $module));
                  }
              }
            }else{
              echo '<section class="text-banner-outer"><div class="container"><div class="text-banner-wrap"><p>404 Error</p></div></div></section>';
            }
          ?>       
    </main>
<?php get_footer(); ?>