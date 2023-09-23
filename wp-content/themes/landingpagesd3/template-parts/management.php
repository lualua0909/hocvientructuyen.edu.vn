<?php

$management_title   = get_option('options_theme_home_settings_management_title', '');
$management_content = get_option('options_theme_home_settings_management_content', '');
$management_img     = get_option('options_theme_home_settings_management_img', 0);

?>

<section class="management-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-7 col-lg-6 order-md-2">
				<p class="title"><?= $management_title ?></p>
				<div class="content">
					<?= wpautop($management_content) ?>
				</div>
			</div>
			<div class="col-12 col-md-5 col-lg-6 order-md-1">
				<div class="img">
					<?= wp_get_attachment_image($management_img, 'large') ?>
				</div>
			</div>
		</div>
	</div>
</section>
