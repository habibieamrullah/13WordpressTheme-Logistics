<?php get_header(); ?>

<?php if(is_active_sidebar('home_widget')) : ?>
<?php dynamic_sidebar('home_widget'); ?>
<?php endif; ?>

<div class="sitebody">
	<div class="bodycell cnt">
		<div class="latestposts">
			<?php
			$the_query = new WP_Query('posts_per_page=14');

			while($the_query->have_posts()) : $the_query ->
			the_post();
			?>
			<div class="thumbbox" style="display: table; width: 100%;">
			    <div class="thumbimage" style="background: url(<?php if(get_the_post_thumbnail_url() != ""){
			        echo get_the_post_thumbnail_url();
			    }else{
			        echo bloginfo('template_directory') . "/imgs/defaultthumbnail.jpg";
			    }?>) no-repeat center center; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;"></div>
    			<div style="display: table-cell; padding: 20px;">
        			<h2 class="posttitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        			<h5 class="categorytext"><i class="fa fa-tags"></i> Kategori: <?php echo get_the_category(get_the_ID())[0]->name ?></h5>
        			<p><?php the_excerpt(__('(Lanjut...)')); ?></p>
        			<a href="<?php the_permalink() ?>"><div class="morebutton">Baca lebih lanjut</div></a>
    			</div>
			</div>
			<?php
			endwhile;
			wp_reset_postdata();
			?>
		</div>
	</div>
</div>



<?php get_footer(); ?>