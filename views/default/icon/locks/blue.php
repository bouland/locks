<?php
global $CONFIG;

$src = $CONFIG->url . 'mod/locks/graphics/Cadenas-ouvert-bleu.svg';

$default = array( 	'src' => $src,
					'href' => '',
					'class' => 'lock public',
					'title' => sprintf(elgg_echo('locks:title'),elgg_echo('locks:alt:public')),
					'alt' 	=> elgg_echo('locks:alt:public'));

$vars = array_merge($default, $vars);

echo elgg_view('icon/icon', $vars);
