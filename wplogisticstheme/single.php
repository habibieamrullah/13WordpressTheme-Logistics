<?php get_header(); ?>


<div class="sitebody">
	<div class="bodycell cnt">
		<?php
		while(have_posts()) : the_post();
		?>
		<div class="thumbbox">
		    <div class="thumbimage" style="display: block; height: 256px; width: 100%; box-sizing: border-box; background: url(<?php if(get_the_post_thumbnail_url() != ""){
		        echo get_the_post_thumbnail_url();
		    }else{
		        echo bloginfo('template_directory') . "/imgs/defaultthumbnail.jpg";
		    }?>) no-repeat center center; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; color: white; text-align: center;"></div>
		    <div style="padding: 20px;">
		        <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
		        <h5 class="categorytext"><i class="fa fa-tags"></i> Kategori: <?php echo get_the_category(get_the_ID())[0]->name ?></h5>
    		    <?php the_content(); ?>
    		</div>
		</div>
		
		<div style="padding: 20px;">
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