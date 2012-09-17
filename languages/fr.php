<?php

	/**
	* Elgg locks plugin language pack
	* 
	* @package ElggFile
	**/

	$french = array (
	
		/**
		* Menu items and titles
			**/
		'locks:title' => "Niveau d'accès en lecture : %s",
		'locks:alt:public' => elgg_echo('PUBLIC'),
		'locks:alt:private' => elgg_echo('PRIVATE'),
		'locks:alt:logged' => elgg_echo('LOGGED_IN'),
		'locks:alt:restricted' => 'Restreint au groupe',
		'locks:alt:friends' => 'Restreint aux contacts',
		'locks:settings:label:size' => 'Taille des icones de cadenas',
		'locks:group:open' => 'Inscription libre',
		'locks:group:closed' => 'Inscription modérée par le propriétaire',
	);
					
	add_translation("fr",$french);

?>
