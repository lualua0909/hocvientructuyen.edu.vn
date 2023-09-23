<?php

$why_choose_title        = get_option("options_theme_home_settings_why_choose_title", "");
$text_box_row            = get_option("options_theme_home_settings_why_choose_text_box", 0);
$why_choose_button_label = get_option('options_theme_home_settings_why_choose_button_label', '');
$why_choose_button_url   = get_option('options_theme_home_settings_why_choose_button_url', '');

if ($text_box_row > 0): ?>

	<section class="why-choose-wrap">
		<div class="container">
			<p class="title"><?= $why_choose_title ?></p>
			<div class="row">
				<?php for ($i = 0; $i < $text_box_row; $i ++):
					$text_list_row = get_option("options_theme_home_settings_why_choose_text_box_{$i}_text_list", 0);
					?>
					<div class="col-6 text-box-wrap">
						<div class="text-box">
							<div class="text-box-header">
								<p class="text-box-title"><?= get_option("options_theme_home_settings_why_choose_text_box_{$i}_title", "") ?></p>
							</div>
							<?php if ($text_list_row > 0): ?>
								<ul class="text-list">
									<?php for ($x = 0; $x < $text_list_row; $x ++): ?>
										<li><?= wpautop(get_option("options_theme_home_settings_why_choose_text_box_{$i}_text_list_{$x}_text")) ?></li>
									<?php endfor; ?>
								</ul>
							<?php endif; ?>
						</div>
					</div>
				<?php endfor; ?>
			</div>
			<?php if ($why_choose_button_label != ''): ?>
				<div class="button-wrap">
					<a href="<?= $why_choose_button_url ?>" class="n-button"><?= $why_choose_button_label ?></a>
				</div>
			<?php endif; ?>
		</div>
	</section>

<?php endif;
