<?php
if( isset($vars['entity_guid']) && is_numeric($vars['entity_guid']) )
{
	$entity = get_entity($vars['entity_guid']);
}
elseif ( isset($vars['entity']) && $vars['entity'] instanceof ElggEntity )
{
	$entity = $vars['entity'];
}
if($entity)
{
	global $CONFIG;

	$size = get_plugin_setting('size', 'locks');
	$href = $CONFIG->url . 'pg/access/edit/' . $entity->guid;
	$src = $CONFIG->url . 'mod/locks/graphics/';

	switch($entity->access_id)
	{
		case ACCESS_PRIVATE:
			echo elgg_view('icon/locks/red', array('href' 	=> $href));
			break;
		
		case ACCESS_PUBLIC:
			echo elgg_view('icon/locks/blue', array('href' 	=> $href));
			break;
		
		case ACCESS_LOGGED_IN:
			echo elgg_view('icon/locks/green', array('href' => $href));
			break;
					
		case ACCESS_FRIENDS:
			echo elgg_view('icon/locks/yellow', array(	'href' => $href,
														'title' => sprintf(elgg_echo('locks:title'),elgg_echo('locks:alt:friends')),
														'alt' 	=> elgg_echo('locks:alt:friends')
														));
			break;
		default:
			echo elgg_view('icon/locks/yellow', array('href' => $href));
			break;
	}
}
