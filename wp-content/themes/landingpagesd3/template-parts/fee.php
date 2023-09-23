<?php

$fee_title   = get_option('options_theme_home_settings_fee_title', '');
$fee_content = get_option('options_theme_home_settings_fee_content', '');

?>

<section class="fee-wrap">
	<div class="container">
		<div class="fee-content">
			<div class="content-wrap">
				<p class="title"><?= $fee_title ?></p>
				<div class="content">
					<?= wpautop($fee_content) ?>
				</div>
			</div>
		</div>
	</div>
</section>
