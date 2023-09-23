<?php

$footer_img       = get_option('options_theme_footer_settings_img', '');
$form_title       = get_option('options_theme_footer_settings_form_title', '');
$form_shortcode   = get_option('options_theme_footer_settings_form_shortcode', '');
$contact_info_row = (int) get_option('options_theme_footer_settings_contact_info', 0);
$social_row       = (int) get_option('options_theme_footer_settings_social_social', 0);
$social_title     = get_option('options_theme_footer_settings_social_title', '');
// options_theme_footer_settings_social_social_0_url
// options_theme_footer_settings_social_social_0_icon

?>

<div class="footer-wrap">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-4 order-lg-1">
				<div class="footer-img">
					<?= wp_get_attachment_image($footer_img, 'large') ?>
				</div>
				<?php if ($contact_info_row > 0): ?>
					<ul class="contact-info">
						<?php for ($i = 0; $i <= $contact_info_row; $i ++): ?>
							<li><?= get_option("options_theme_footer_settings_contact_info_{$i}__text", "") ?></li>
						<?php endfor; ?>
					</ul>
				<?php endif; ?>
			</div>
			<div class="col-12 col-lg-4 order-lg-3">
				<div class="form-wrap">
					<p class="form-title"><?= $form_title ?></p>
					<?= do_shortcode($form_shortcode) ?>
				</div>
				<div class="copyright">Privacy © 2023 Viện Quản trị và Tài chính (IFA)</div>
			</div>
			<div class="col-12 col-lg-4 order-lg-2">
				<div class="social-wrap">
					<p class="social-text"><?= $social_title ?></p>
					<?php if ($contact_info_row > 0):
						for ($i = 0; $i <= $social_row; $i ++): ?>
							<a href="<?= get_option("options_theme_footer_settings_social_social_{$i}_url") ?>">
								<?= wp_get_attachment_image(get_option("options_theme_footer_settings_social_social_{$i}_icon")) ?>
							</a>
						<?php endfor;
					endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
