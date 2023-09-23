<?php

$text_1       = get_option("options_theme_home_settings_hero_text_1", "");
$text_2       = get_option("options_theme_home_settings_hero_text_2", "");
$text_3       = get_option("options_theme_home_settings_hero_text_3", "");
$button_label = get_option("options_theme_home_settings_hero_button_label", "");
$button_url   = get_option("options_theme_home_settings_hero_button_url", "");
$background   = get_option("options_theme_home_settings_hero_background", 0);

?>

<section class="hero-wrap" style="background-image: url(<?= wp_get_attachment_image_url($background, 'full') ?>)">
	<div class="container">
		<p class="text-1"><?= $text_1 ?></p>
		<p class="text-2"><?= $text_2 ?></p>
		<p class="text-3"><?= $text_3 ?></p>
		<?php if ($button_label): ?>
			<div class="button-wrap">
				<a href="<?= $button_url ?>" class="n-button"><?= $button_label ?></a>
			</div>
		<?php endif; ?>
	</div>
</section>
