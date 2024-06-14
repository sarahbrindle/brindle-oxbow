<?php if(isset($args['button'])){?>
    <?php $button = $args['button']; ?>
    <?php if (isset($button['url']) and isset($button['title'])) { ?>
        <div x-data="{ textfade: false }" x-intersect.full="textfade = true" x-intersect:leave="textfade = false" :class="textfade && 'in-view'" class="animate">
            <a <?php if (isset($button['target'])){ if ($button['target']){ echo 'target="_blank"'; }}?> <?php  if (isset($button['url'])){ if($button['url']){?>  href="<?=$button['url']?>" <?php }}?> class="button <?php  if (isset($args['class_alt'])){ if($args['class_alt']){echo $args['class_alt']; }}?>"><?php  if (isset($button['title'])){ if($button['title']){?><?php echo $button['title'];?><?php }}?>
                
                <?php if (isset($args['has_arrow'])){ if ($args['has_arrow']){ ?>
                <svg width="40.749975px" height="11.045944px" viewBox="0 0 40.749975 11.045944" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g fill-rule="nonzero">
                        <path d="M40.5303,6.053299 C40.8232,5.760409 40.8232,5.285539 40.5303,4.992639 L35.7574,0.219669 C35.4645,-0.073223 34.9896,-0.073223 34.6967,0.219669 C34.4038,0.512569 34.4038,0.987439 34.6967,1.280329 L38.9393,5.522969 L34.6967,9.765569 C34.4038,10.058469 34.4038,10.533369 34.6967,10.826269 C34.9896,11.119169 35.4645,11.119169 35.7574,10.826269 L40.5303,6.053299 Z M20,6.272969 L40,6.272969 L40,4.772969 L20,4.772969 L20,6.272969 Z" id="Shape" fill="#396781"></path>
                        <polygon id="Shape-Copy" fill="#FFFFFF" points="0 6.272969 20 6.272969 20 4.772969 6.5567e-08 4.772969"></polygon>
                    </g>
                </g>
                </svg>
                <?php }} ?> 
            </a>
        </div>
    <?php } ?>
<?php }?>