<?php
global $CONFIG;

$src = $CONFIG->url . 'mod/locks/graphics/Cadenas-ferme-rouge.svg';

$default = array( 	'src' => $src,
					'href' => '',
					'class' => 'lock private',
					'title' => sprintf(elgg_echo('locks:title'),elgg_echo('locks:alt:private')),
					'alt' 	=> elgg_echo('locks:alt:private'));

$vars = array_merge($default, $vars);

echo elgg_view('icon/icon', $vars);
