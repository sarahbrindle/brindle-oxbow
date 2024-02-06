<?php
    $text = $args['title']['text'];
    $options = $args['title']['title_options'];
    $style = $options['style'];
    $value = $options['value'];
    $class = isset($args['class']) ? $args['class'] : "";
    $overwrite = $options['overwrite_typography_styles'];
    if ($overwrite) {
        $font_size = $options['font_size'] . "px";
        $font = get_font($options['font']);
        $inline = "font-size:{$font_size};font-family:{$font}";
    }
?>
<?php if ($text) { ?>
    <<?=$value?> x-data="{ textfade: false }" x-intersect.full:enter="textfade = true" x-intersect:leave="textfade = false" :class="textfade && 'in-view'" class="animate <?=$style?> <?=$class?>"<?=$overwrite ? " style='{$inline}'" : ""?>><?=$text?></<?=$value?>>
<?php } ?>