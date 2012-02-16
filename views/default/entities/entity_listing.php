<?php
/**
 * Elgg entity listing
 *
 * @package Elgg
 * @subpackage Core
 */
?>

<div class="search_listing">

	<div class="search_listing_icon">
		<?php

			echo $vars['icon'];

		?>
	</div>
	<div class="search_listing_lock">
		<?php

			echo elgg_view('locks/entity', $vars);

		?>
	</div>
	<div class="search_listing_info">
		<?php

			echo $vars['info'];

		?>
	</div>
</div>
