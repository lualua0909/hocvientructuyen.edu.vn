<?php

$title        = get_option("options_theme_home_settings_capacity_title", "");
$text_box_row = get_option("options_theme_home_settings_capacity_text_box", 0);
$stt          = 0;

if ($text_box_row > 0):?>

	<section class="capacity-wrap">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<p class="title"><?= $title ?></p>
				</div>
				<?php for ($i = 0; $i < $text_box_row; $i ++):
					$stt = $i + 1;
					$icon = get_option("options_theme_home_settings_capacity_text_box_{$i}_icon", 0);
					$text = get_option("options_theme_home_settings_capacity_text_box_{$i}_text", "")
					?>
					<div class="col-12 col-md-4">
						<div class="text-box-wrap">
							<div class="text-box" data-num="<?= $stt ?>">
								<span class="part-1"></span>
								<span class="part-2"></span>
								<div class="icon"><?= wp_get_attachment_image($icon) ?></div>
								<div class="text"><?= $text ?></div>
							</div>
						</div>
					</div>
				<?php endfor; ?>
			</div>
		</div>
	</section>

<?php endif;
