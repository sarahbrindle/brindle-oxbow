<?php $module = $args['module']; ?>
<!--module banner starts here-->
<section id="special-hero">

    <div class="sph-bg" <?php if($module['background']){?> style="background-image: url(<?=$module['background']['url']?>);" <?php }?>>
        

       <div class="row">
         <div class="col-lg-4 clrside">
           <div class="stpf-txt">
             <h3 class="block-title"><?php echo $module['title'];?></h3>
             <?php echo $module['editor'];?>
           </div>
         </div>
         <div class="col-lg-8 celler">
           <div class="stpfmbox">
             
              <?php if ($module['shortcode'] != "") { ?>
              <div class="landing-form">
                  <?php  echo do_shortcode($module['shortcode']); ?>
              </div>
              <?php } ?>

           </div>
         </div>
       </div>

    </div>


    
    
</section>
<!--module banner ends here-->