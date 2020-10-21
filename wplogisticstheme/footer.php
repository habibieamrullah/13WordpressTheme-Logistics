	<div class="footer">
		<?php if(is_active_sidebar('home_footer_widget')) : ?>
		<?php dynamic_sidebar('home_footer_widget'); ?>
		<?php endif; ?>
	</div>
	
	<div class="footermedsos">
		
		<?php
		
		if(get_option('facebook_url') != ""){
		    ?>
		    <a class="sosmedlink" href="<?php echo get_option('facebook_url'); ?>"><i class="fa fa-facebook"></i></a> 
		    <?php
		}
		
		if(get_option('twitter_url') != ""){
		    ?>
		    <a class="sosmedlink" href="<?php echo get_option('twitter_url'); ?>"><i class="fa fa-twitter"></i></a> 
		    <?php
		}
		
		if(get_option('instagram_url') != ""){
		    ?>
		    <a class="sosmedlink" href="<?php echo get_option('instagram_url'); ?>"><i class="fa fa-instagram"></i></a> 
		    <?php
		}
		
		if(get_option('youtube_url') != ""){
		    ?>
		    <a class="sosmedlink" href="<?php echo get_option('youtube_url'); ?>"><i class="fa fa-youtube"></i></a> 
		    <?php
		}
		
		if(get_option('whatsapp_url') != ""){
		    ?>
		    <a class="sosmedlink" href="<?php echo get_option('whatsapp_url'); ?>"><i class="fa fa-whatsapp"></i></a> 
		    <?php
		}
		
		?>
	</div>
	
	<div class="footercopyright">
		© <?php echo date("Y"); ?> <?php bloginfo('name'); ?>. All Rights Reserved. 
	</div>
	
	<div id="preloadscreen">
		<div style="display: table-cell; height: 100%; width: 100%; vertical-align: middle; text-align: center;">
			<?php
			if ( has_custom_logo() ) {
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				echo '<img src="' . $logo[0] . '" alt="' . get_bloginfo( 'name' ) . '" height="60px" style="margin-top: 10px;">';
			}else{
				echo "<p>Please wait...</p>";
			}
			?>
		</div>
	</div>
	
	<!--
	<div class="wabutton">
		<a href="<?php echo get_option('whatsapp_url'); ?>"><img src="<?php echo bloginfo('template_directory'); ?>/imgs/wa.png"></a>
	</div>
	-->
	
	<script>
		function togglemobilemenu(){
			$(".mobilemenucontent").toggle();
		}
		
		$( document ).ready(function() {
			setTimeout(function(){
				$("#preloadscreen").fadeOut();
			}, 1000);
		});
	</script>
	<?php wp_footer(); ?>
	</body>
</html>