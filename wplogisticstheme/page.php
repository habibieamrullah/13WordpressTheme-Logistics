<?php get_header(); ?>

<div class="sitebody">
	<div class="bodycell cnt">
		<div>
		<?php
		while(have_posts()) : the_post();
		?>
		<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		<?php the_content(); ?>
		<?php
		if(comments_open() || get_comments_number()) :
			comments_template();
		endif;
		endwhile;
		?>
		</div>
	</div>
	<div class="bodycell sb">
    	<?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>