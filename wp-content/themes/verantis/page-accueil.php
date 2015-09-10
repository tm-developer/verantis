<?php get_header(); ?>
<div class="wrapper align-center margin bottom med">
	<div class="line"></div>

	<?php if(get_field('textes_de_description')): 

	    while(the_repeater_field('textes_de_description')): ?>

	        <p class="margin bottom-med">
	        	<?php the_sub_field('texte_de_description'); ?>
	        </p>

	        <img src="<?php $image = get_sub_field('image'); echo $image['url']; ?>" alt="">
			
	    <?php endwhile; ?>

	<?php endif; ?>
	
</div>
<?php get_footer(); ?>
