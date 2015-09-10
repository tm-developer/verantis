		</div>
		<footer id="page-footer">
			<div class="wrapper">

				<?php wp_nav_menu(array(
					'theme_location' => 'main-nav',
					'container'      => 'nav',
					'container_id'   => 'menu',
					'container_class'=> 'margin bottom-med'
				)) ?>

				<h2 class="logo">

					<a href="<?php bloginfo('url') ?>" title="<?php bloginfo('name') ?> - <?php bloginfo('description') ?>">
						<img src="<?= get_template_directory_uri() ?>/images/verantis_logo_notr.png" alt="<?php bloginfo('name') ?> - <?php bloginfo('description') ?>">
					</a>

				</h2>

			</div>

		</footer>
		<?php wp_footer() ?>
	</body>
</html>
