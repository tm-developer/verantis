<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes() ?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" <?php language_attributes() ?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" <?php language_attributes() ?>><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes() ?>><!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ) ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <title>Verantis | <?=  wp_title(''); ?></title>
        <link rel= "icon" href= "<?= get_template_directory_uri() ?>/favicon.png" type= "image/x-icon" />
        <meta name="description" content="Artisanat de Thés Parfumés">
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
				
				<div class="menu-button mobile"><span></span></div>
				<div class="clicked hidden mobile"><span></span></div>
			</div>
			
			<div class="pop-up contact">
				<a href="" class="cross"></a>
				<?php echo do_shortcode('[contact-form-7 id="51" title="Formulaire de contact 1"]'); ?>
			</div>

		</header>

		<div class="content margin bottom">
			