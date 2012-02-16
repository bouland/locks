<?php
if (isset($vars['entity_guid']) && is_numeric($vars['entity_guid'])) {

	$entity = get_entity($vars['entity_guid']);
	if($entity)
	{
		global $CONFIG;

		$size = get_plugin_setting('size', 'locks');
		$href = $CONFIG->url . 'pg/access/edit/' . $vars['entity_guid'];
		$src = $CONFIG->pluginpath . 'locks/graphics/';
		 
		switch($entity->access_id)
		{
			case ACCESS_PRIVATE:
				$class = 'private';
				$alt = elgg_echo('locks:alt:private');
				$src .= 'Cadenas-ferme-rouge.svg';
				break;
			
			case ACCESS_PUBLIC:
				$class = 'public';
				$alt = elgg_echo('locks:alt:public');
				$src .= 'Cadenas-ouvert-vert.svg';
				break;
			
			case ACCESS_LOGGED_IN:
				$class = 'logged';
				$alt = elgg_echo('locks:alt:logged');
				$src .= 'Cadenas-ouvert-vert.svg';
				break;
						
			case ACCESS_FRIENDS:
			default:
				$class = 'restricted';
				$alt = elgg_echo('locks:alt:restricted');
				$src .= 'Cadenas-entrouvert-jaune.svg';
				break;
		}
		
		echo '<div class="locks">';
		echo '	<a class="icon ' . $class . '" href="' . $href . '">';
		echo '		<img border="0" width="' . $size . '" height="' . $size . '" title="' . $title . '" alt="' . $alt . '" src="' . $src . '">';
		echo '	</a>';
		echo '</div>';'
	}
}
