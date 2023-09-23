<?php

$training_route_title        = get_option('options_theme_home_settings_training_route_title', '');
$training_route_desc         = get_option('options_theme_home_settings_training_route_desc', '');
$training_route_button_label = get_option('options_theme_home_settings_training_route_button_label', '');
$training_route_button_url   = get_option('options_theme_home_settings_training_route_button_url', '');
$text_box_row                = get_option('options_theme_home_settings_training_route_text_box', 0);

?>

<section class="training-route-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<p class="title"><?= $training_route_title ?></p>
			</div>
		</div>
	</div>
	<div class="text-box-wrap">
		<?php if ($text_box_row > 0):
			for ($i = 0; $i < $text_box_row; $i ++):
				$list_row = get_option("options_theme_home_settings_training_route_text_box_{$i}_list", 0); ?>
				<div class="text-box">
					<div class="container">
						<div class="row <?= $i % 2 == 0 ? 'flex-row-reverse' : '' ?>">
							<div class="col-7">
								<div class="text-box-content">
									<p class="text-box-title"><?= get_option("options_theme_home_settings_training_route_text_box_{$i}_title", "") ?></p>
									<?php if ($list_row): ?>
										<ul class="text-box-list">
											<?php for ($x = 0; $x < $list_row; $x ++): ?>
												<li>
													<div class="icon">
														<?= wp_get_attachment_image(get_option("options_theme_home_settings_training_route_text_box_{$i}_list_{$x}_icon")) ?>
													</div>
													<?= get_option("options_theme_home_settings_training_route_text_box_{$i}_list_{$x}_text", "") ?>
												</li>
											<?php endfor; ?>
										</ul>
									<?php endif; ?>
								</div>
							</div>
							<div class="col-5">
								<div class="text-box-img">
									<?= wp_get_attachment_image(get_option("options_theme_home_settings_training_route_text_box_{$i}_img"), "large") ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endfor;
		endif; ?>
	</div>
	<div class="training-route-desc">
		<div class="container">
			<div class="desc">
				<?= wpautop($training_route_desc) ?>
			</div>
			<?php if ($training_route_button_label != ''): ?>
				<div class="button-wrap">
					<a href="<?= $training_route_button_url ?>" class="n-button"><?= $training_route_button_label ?></a>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
