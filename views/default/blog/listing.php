<?php

	/**
	 * Elgg blog listing
	 * 
	 * @package ElggBlog
	 */
		$owner = $vars['entity']->getOwnerEntity();
		$friendlytime = elgg_view_friendly_time($vars['entity']->time_created);
		$icon = elgg_view(
				"profile/icon", array(
										'entity' => $owner,
										'size' => 'small',
									  )
			);
		$info = "<p>" . elgg_echo('blog') . ": <a href=\"{$vars['entity']->getURL()}\">{$vars['entity']->title}</a></p>";
		$info .= "<p class=\"owner_timestamp\"><a href=\"{$owner->getURL()}\">{$owner->name}</a> {$friendlytime}</p>";
		
		$vars = array_merge( $vars, array('icon' => $icon, 'info' => $info) );
	
		echo elgg_view('entities/entity_listing', $vars);
?>