<?php
	/**
	 * Elgg user display (small)
	 *
	 * @package ElggGroups
	 *
	 * @uses $vars['entity'] The user entity
	 */
	$group = $vars['entity'];
	if($group instanceof ElggGroup)
	{
		$icon = elgg_view(
				"groups/icon", array(
										'entity' => $group,
										'size' => 'small',
									)
			);
		$info = "<div class=\"groupdetails\">";
		//get the membership type
		$membership = $group->membership;
		if ($membership == ACCESS_PUBLIC) {
			$lock_label = elgg_echo("groups:open");
			$lock_icon = elgg_view('icon/locks/green');
		} else {
			$lock_label = elgg_echo("groups:closed");
			$lock_icon = elgg_view('icon/locks/red');
		}
		$info .= '<p>' . $lock_label . $lock_icon . '</p>';
		
		//for admins display the feature or unfeature option
		
		if (is_plugin_enabled('edifice')){
			$group_category = get_entity(get_item_categories($group->guid));
		}
		if ($group_category){
			
			$info .= "<p>" . elgg_echo("theme_inria:category") . " <a href=" . $group_category->getURL() .">". $group_category->title . "</a></p>";
		}
		
		$nb_member = $group->getMembers(999,0,true);
		$nb_content = count($group->getObjects('', 999, 0));
		$info .= "<p><b>" . $nb_member ."</b> " . elgg_echo("groups:member") . " / <b>" . $nb_content ."</b> " . elgg_echo("groups:publications") ."</p>" ;
		$latest = $group->getObjects('', 1, 0);
		if ($latest) {
			$latest = $latest[0];
		
			$time_updated = $latest->time_created;
			$owner_guid = $latest->owner_guid;
							
			$info .= "<p>".sprintf(elgg_echo("groups:lastactivity"), elgg_view_friendly_time($time_updated)) . "</p>";
		}
		if($group->featured_group == "yes"){
			$url = elgg_add_action_tokens_to_url($vars['url'] . "action/groups/featured?group_guid=" . $group->guid . "&action_type=unfeature");
			$wording = elgg_echo("groups:makeunfeatured");
		}else{
			$url = elgg_add_action_tokens_to_url($vars['url'] . "action/groups/featured?group_guid=" . $group->guid . "&action_type=feature");
			$wording = elgg_echo("groups:makefeatured");
		}
		//if admin, show make featured option
		if(isadminloggedin())
			$info .= "<p><a href=\"{$url}\">{$wording}</a></p>";
		
		$info .= "</div>";
		$info .= "<div class=\"groupdesc\">";
		$info .= "<p><b><a href=\"" . $group->getUrl() . "\">" . $group->name . "</a></b></p>";
		$info .= "<p class=\"owner_timestamp\">" . $group->briefdescription . "</p>";
		$info .= "</div><div class=\"clearfloat\"></div>";
		// num users, last activity, owner etc
	
		echo elgg_view_listing($icon, $info);
	}

?>
