<?php
if(isset($vars['class']) && isset($vars['href']) && isset($vars['title']) && isset($vars['alt']) && isset($vars['src']) )
{
	echo '	<a class="lock ' . $vars['class'] . '" href="' . $vars['href'] . '">';
	echo '		<img title="' . $vars['title'] . '" alt="' . $vars['alt'] . '" src="' . $vars['src'] . '">';
	echo '	</a>';
}