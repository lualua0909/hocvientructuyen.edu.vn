<?php

$title                      = get_option("options_theme_home_settings_learning_form_title", "");
$background                 = get_option("options_theme_home_settings_learning_form_background", 0);
$img                        = get_option("options_theme_home_settings_learning_form_img", 0);
$img_mobile                 = get_option("options_theme_home_settings_learning_form_img_mobile", 0);
$learning_form_button_label = get_option('options_theme_home_settings_learning_form_button_label', '');
$learning_form_button_url   = get_option('options_theme_home_settings_learning_form_button_url', '');

?>

<section class="learning-form-wrap" style="background-image: url(<?= wp_get_attachment_image_url($background, 'full') ?>)">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<p class="title"><?= $title ?></p>
			</div>
			<div class="col-12">
				<div class="img-wrap-mobile">
					<?= wp_get_attachment_image($img_mobile, 'full') ?>
				</div>
				<div class="img-wrap">
					<?= wp_get_attachment_image($img, 'full') ?>
				</div>
			</div>
			<div class="col-12">
				<?php if ($learning_form_button_label != ''): ?>
					<div class="button-wrap">
						<a href="<?= $learning_form_button_url ?>" class="n-button"><?= $learning_form_button_label ?></a>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
