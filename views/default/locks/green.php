<?php
global $CONFIG;

$src = $CONFIG->url . 'mod/locks/graphics/Cadenas-ouvert-vert.svg';

$default = array( 	'src' => $src,
					'href' => '',
					'class' => 'public',
					'title' => elgg_echo('locks:alt:public'),
					'alt' 	=> elgg_echo('locks:alt:public'));

$vars = array_merge($default, $vars);

echo elgg_view('locks/icon', $vars);
