<?php

$certificate_title      = get_option('options_theme_home_settings_certificate_title', '');
$certificate_background = get_option('options_theme_home_settings_certificate_background', 0);
$certificate_row        = get_option('options_theme_home_settings_certificate_certificates', 0);

if ($certificate_row > 0): ?>

	<section class="certificate-wrap" style="background-image: url(<?= wp_get_attachment_image_url($certificate_background, 'full') ?>)">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<p class="title"><?= $certificate_title ?></p>
				</div>
				<?php for ($i = 0; $i < $certificate_row; $i ++): ?>
					<div class="col-12 col-md-6">
						<div class="img-box">
							<div class="box-title">
								<p><?= get_option("options_theme_home_settings_certificate_certificates_{$i}_title", ""); ?></p>
							</div>
							<div class="box-img">
								<?= wp_get_attachment_image(get_option("options_theme_home_settings_certificate_certificates_{$i}_img", 0), 'large') ?>
							</div>
						</div>
					</div>
				<?php endfor; ?>
			</div>
		</div>
	</section>

<?php endif;
