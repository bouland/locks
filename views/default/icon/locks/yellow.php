<?php
global $CONFIG;

$src = $CONFIG->url . 'mod/locks/graphics/Cadenas-entrouvert-jaune.svg';

$default = array( 	'src' => $src,
					'href' => '',
					'class' => 'lock restricted',
					'title' => sprintf(elgg_echo('locks:title'),elgg_echo('locks:alt:restricted')),
					'alt' 	=> elgg_echo('locks:alt:restricted'));

$vars = array_merge($default, $vars);

echo elgg_view('icon/icon', $vars);
