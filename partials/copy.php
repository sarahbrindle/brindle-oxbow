<?php $copy = $args['copy']; ?>
<?php if ($copy) { ?>
    <p x-data="{ textfade: false }" x-intersect="textfade = true" x-intersect:leave="textfade = false" :class="textfade && 'in-view'" class="animate"><?=$copy?></p>
<?php } ?>