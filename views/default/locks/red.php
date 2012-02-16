<?php
global $CONFIG;
$src = $CONFIG->url . 'mod/locks/graphics/Cadenas-ferme-rouge.svg';

$default = array( 	'src' => $src,
					'href' => '',
					'class' => 'private',
					'title' => elgg_echo('locks:alt:private'),
					'alt' 	=> elgg_echo('locks:alt:private'));

$vars = array_merge($default, $vars);

echo elgg_view('locks/icon', $vars);
