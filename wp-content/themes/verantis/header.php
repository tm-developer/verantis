<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes() ?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" <?php language_attributes() ?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" <?php language_attributes() ?>><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes() ?>><!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ) ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <title><?php wp_title( '|', true, 'right' ) ?></title>
		<meta name="author" content="">
		<link rel="author" href="">
		<?php wp_head() ?>
    </head>
    <body <?php body_class() ?>>

		<header class="align-center">

			<div class="wrapper">

				<h1 class="logo margin bottom-med">

					<a href="<?php bloginfo('url') ?>" title="<?php bloginfo('name') ?> - <?php bloginfo('description') ?>">
						<img src="<?= get_template_directory_uri() ?>/images/verantis_logo_notr.png" alt="<?php bloginfo('name') ?> - <?php bloginfo('description') ?>">
					</a>

				</h1>

				<?php wp_nav_menu(array(
					'theme_location' => 'main-nav',
					'container'      => 'nav',
					'container_id'   => 'menu',
					'container_class'=> 'margin bottom'
				)) ?>

			</div>

		</header>
		<div class="content margin bottom">
