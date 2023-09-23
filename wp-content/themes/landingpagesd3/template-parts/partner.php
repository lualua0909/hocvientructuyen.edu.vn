<?php

$partner_title = get_option('options_theme_home_settings_partner_title', '');
$partner_row   = get_option('options_theme_home_settings_partner_partner', 0);

?>

<section class="partner-wrap">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<p class="partner-title"><?= $partner_title ?></p>
				<?php if ($partner_row > 0): ?>
					<div class="partner-slider-wrap">
						<div class="partner-slider">
							<?php for ($i = 0; $i <= $partner_row; $i ++): ?>
								<div class="partner-item-wrap">
									<div class="partner-item">
										<a href="<?= get_option("options_theme_home_settings_partner_partner_{$i}_url", "") ?>">
											<?= wp_get_attachment_image(get_option("options_theme_home_settings_partner_partner_{$i}_img"), "medium") ?>
										</a>
									</div>
								</div>
							<?php endfor; ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
