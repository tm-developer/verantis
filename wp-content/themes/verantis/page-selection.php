<?php get_header(); ?>
<div class="wrapper align-center margin bottom med">

	<h2 class="title margin bottom-med"><?= the_field('titre_de_la_page'); ?></h2>

	<p class="description margin bottom-big"><?= the_field('description_du_haut_de_la_page'); ?></p>

	<div class="line margin bottom-big"></div>

	<?php if(get_field('bloc_de_texte_ou_image')): 

	    while(the_repeater_field('bloc_de_texte_ou_image')): ?>
			
			<?php if(get_sub_field('texte_de_description')): ?>

		        <p class="margin bottom-med">
		        	<?php the_sub_field('texte_de_description'); ?>
		        </p>

	        <?php endif; ?>

			<?php if(get_sub_field('image')): ?>

	        	<img src="<?php $image = get_sub_field('image'); echo $image['url']; ?>" alt="">

	        <?php endif; ?>
			
	    <?php endwhile; ?>

	<?php endif; ?>

	<div class="line margin bottom-big"></div>

	<p class="description margin bottom-big"><?= the_field('description_du_bas_de_la_page'); ?></p>
	
</div>
<?php get_footer(); ?>
