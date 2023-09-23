<?php

$img_1 = get_option("options_header_settings_img_1", 0);
$img_2 = get_option("options_header_settings_img_2", 0);

?>

<div class="header-wrap">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-7">
				<div class="img-left">
					<?= wp_get_attachment_image($img_1, 'large') ?>
				</div>
			</div>
			<div class="col-5">
				<div class="img-right">
					<?= wp_get_attachment_image($img_2, 'large') ?>
				</div>
			</div>
		</div>
	</div>
</div>
