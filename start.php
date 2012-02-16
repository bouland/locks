<?php

register_elgg_event_handler('init','system','locks_init');

function locks_init()
{
	register_page_handler('access','locks_page_handler');
}
function locks_page_handler($page)
{
	gatekeeper();
	
	global $CONFIG;
		
	if (isset($page[0]) && isset($page[1]) && is_numeric($page[1])){
		set_input('content_guid', $page[1]);
		// See what context we're using
		switch($page[0])
		{
			case "allowed":
					include($CONFIG->pluginspath . "locks/allowed.php");
				break;
			case "edit":
					include($CONFIG->pluginspath . "webinar/edit.php");
				break;
			default:
				return false;
			break;
		}
	}else{
		return false;
	}
}