<?php
	global $CONFIG;
	$plugin = find_plugin_settings('locks');
?>
<p>
    <fieldset style="border: 1px solid; padding: 15px; margin: 0 10px 0 10px">
        <legend><?php echo elgg_echo('locks:settings:label');?></legend>
        
        <label for="params[size]"><?php echo elgg_echo('locks:settings:label:size');?></label><br/>
        <input type="text" name="params[size]" value="<?php if (empty($plugin->size)) {echo '1.5';} else {echo $plugin->size;}?>"/><br/>

    </fieldset>
</p>
