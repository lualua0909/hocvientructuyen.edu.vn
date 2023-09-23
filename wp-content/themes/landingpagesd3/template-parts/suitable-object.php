<?php

$title        = get_option('options_theme_home_settings_suitable_object_title', '');
$desc         = get_option('options_theme_home_settings_suitable_object_desc', '');
$text_box_row = get_option('options_theme_home_settings_suitable_object_text_box', 0);

if ($text_box_row > 0): ?>

	<section class="suitable-object-wrap">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-5 col-lg-6">
					<p class="title"><?= $title ?></p>
					<div class="desc"><?= wpautop($desc) ?></div>
				</div>
				<div class="col-12 col-md-7 col-lg-6">
					<div class="row text-box-wrap">
						<?php for ($i = 0; $i < $text_box_row; $i ++): ?>
							<div class="col-6 text-box-col">
								<div class="text-box">
									<div class="icon">
										<?= wp_get_attachment_image(get_option("options_theme_home_settings_suitable_object_text_box_{$i}_icon", 0)) ?>
									</div>
									<div class="content">
										<?= wpautop(get_option("options_theme_home_settings_suitable_object_text_box_{$i}_text", "")) ?>
									</div>
								</div>
							</div>
						<?php endfor; ?>
					</div>
				</div>
				<div class="col-12">
					<div class="desc mobile"><?= wpautop($desc) ?></div>
				</div>
			</div>
		</div>
	</section>

<?php endif;
