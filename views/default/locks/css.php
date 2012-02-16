<?php
$size = get_plugin_setting('size', 'locks');
$margin = $size / 2;
?>
.search_listing_lock, .topic_lock{
	float:right;
	margin-left:<?php echo $margin . 'em'; ?>
}
.lock img{
	border: medium none;
	width:<?php echo $size . 'em'; ?>
}

.groupdetails img{
	width:1.1em;
	vertical-align: bottom;
}