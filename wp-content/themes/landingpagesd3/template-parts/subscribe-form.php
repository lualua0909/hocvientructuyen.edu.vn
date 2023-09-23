<?php

$form_title     = get_option('options_theme_home_settings_subscribe_form_title', '');
$form_shortcode = get_option('options_theme_home_settings_subscribe_form_shortcode', '');

?>

<section class="subscribe-form-wrap">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="form-wrap">
					<p class="form-title"><?= $form_title ?></p>
					<?= do_shortcode($form_shortcode) ?>
				</div>
			</div>
		</div>
	</div>
</section>
