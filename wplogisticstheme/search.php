<?php get_header(); ?>

<div class="sitebody">
	<div class="bodycell cnt">
		<?php
        $s=get_search_query();
        $args = array(
                        's' =>$s
                    );
            // The Query
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) {
                _e("<p style='font-weight:bold;color:#000'><i class='fa fa-search'></i> Hasil pencarian kata: ".get_query_var('s')."</p>");
                while ( $the_query->have_posts() ) {
                   $the_query->the_post();
                         ?>
                            <div class="thumbbox" style="padding: 20px;">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <p><?php the_excerpt(__('(Lanjut...)')); ?></p>
        			            <a href="<?php the_permalink() ?>"><div class="morebutton">Baca lebih lanjut</div></a>
                            </div>
                         <?php
                }
            }else{
        ?>
                <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
                <div class="alert alert-info">
                  <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
                </div>
        <?php } ?>
	</div>
	<div class="bodycell sb">
    	<?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
