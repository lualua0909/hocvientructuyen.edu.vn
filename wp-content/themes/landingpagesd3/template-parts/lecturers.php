<?php

$lecturers_title   = get_option('options_theme_home_settings_lecturers_title', '');
$lecturers_content = get_option('options_theme_home_settings_lecturers_content', '');
$lecturers_img     = get_option('options_theme_home_settings_lecturers_img', 1);
$lecturers_text_1  = get_option('options_theme_home_settings_lecturers_text_1', '');
$lecturers_text_2  = get_option('options_theme_home_settings_lecturers_text_2', '');

?>

<section class="lecturers-wrap">
	<div class="container">
		<div class="row">
			<div class="col-7 col-md-8 col-lg-7">
				<p class="title"><?= $lecturers_title ?></p>
				<div class="content">
					<?= wpautop($lecturers_content) ?>
				</div>
			</div>
			<div class="col-5 col-md-4 col-lg-5">
				<div class="img-wrap">
					<div class="img">
						<?= wp_get_attachment_image($lecturers_img, 'large') ?>
					</div>
					<div class="text-box">
						<p class="text-1"><?= $lecturers_text_1 ?></p>
						<p class="text-2"><?= $lecturers_text_2 ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
