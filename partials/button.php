<?php if(isset($args['button'])){?>
    <?php $button = $args['button']; ?>
    <?php if (isset($button['url']) and isset($button['title'])) { ?>
        <div x-data="{ textfade: false }" x-intersect.full="textfade = true" x-intersect:leave="textfade = false" :class="textfade && 'in-view'" class="animate">
            <a <?php if (isset($button['target'])){ if ($button['target']){ echo 'target="_blank"'; }}?> <?php  if (isset($button['url'])){ if($button['url']){?>  href="<?=$button['url']?>" <?php }}?> class="button <?php  if (isset($args['class_alt'])){ if($args['class_alt']){echo $args['class_alt']; }}?>"><?php  if (isset($button['title'])){ if($button['title']){?><?php echo $button['title'];?><?php }}?>
                
                <?php if (isset($args['has_arrow'])){ if ($args['has_arrow']){ ?>
                <svg class="svg-right-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="54" height="14" viewBox="0 0 54 14">
                  <defs>
                    <clipPath id="clip-path">
                      <rect id="Button_SVG_Frame_Clip_Content_Mask_" data-name="Button → SVG [Frame Clip Content Mask]" width="54" height="14" transform="translate(1722 4880.11)" fill="none"/>
                    </clipPath>
                  </defs>
                  <g id="Group_3544" data-name="Group 3544" transform="translate(-922.5 -593.61)">
                    <g id="Group_3495" data-name="Group 3495">
                      <g id="Button_SVG_Clip_Content_" data-name="Button → SVG (Clip Content)" transform="translate(-799.5 -4286.5)" clip-path="url(#clip-path)">
                        <path id="Combined-Shape" d="M7.153,0l.691-.689-5.979-6H53.706V-7.66H1.865l5.979-6-.691-.689L.343-7.517,0-7.172l.343.344Z" transform="translate(1775.854 4879.765) rotate(180)" fill="#9a7536"/>
                      </g>
                    </g>
                  </g>
                </svg>
                <?php }} ?> 
            </a>
        </div>
    <?php } ?>
<?php }?>