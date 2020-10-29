<?php get_header(); ?>

<div class="sitebody">
	<div class="bodycell cnt">
		<div>
		<?php
		while(have_posts()) : the_post();
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
		?>
		</div>
	</div>
	<div class="bodycell sb">
    	<?php get_sidebar(); ?>
    </div>
</div>


<?php get_footer(); ?>