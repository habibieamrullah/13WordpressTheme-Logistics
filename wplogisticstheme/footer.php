	<div class="footer">
		<div class="widthlimiter">
			<div style="display: table; table-layout: fixed; width: 100%;">
				<?php if(is_active_sidebar('home_footer_widget')) : ?>
				<?php dynamic_sidebar('home_footer_widget'); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	
	<div class="footermedsos">
	
		<span>Follow us on </span>
		
		<?php
		
		if(get_option('facebook_url') != ""){
		    ?>
		    <a class="sosmedlink" href="<?php echo get_option('facebook_url'); ?>"><i class="fa fa-facebook"></i> Facebook</a> 
		    <?php
		}
		
		if(get_option('twitter_url') != ""){
		    ?>
		    <a class="sosmedlink" href="<?php echo get_option('twitter_url'); ?>"><i class="fa fa-twitter"></i></a> 
		    <?php
		}
		
		if(get_option('instagram_url') != ""){
		    ?>
		    <a class="sosmedlink" href="<?php echo get_option('instagram_url'); ?>"><i class="fa fa-instagram"></i> Instagram</a> 
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
	
	<!--
	<div class="wabutton">
		<a href="<?php echo get_option('whatsapp_url'); ?>"><img src="<?php echo bloginfo('template_directory'); ?>/imgs/wa.png"></a>
	</div>
	-->
	
	<div class="searchbutton" onclick="togglesearch()">
	    <div>
	        <i class="fa fa-search"></i>
	    </div>
	</div>
	
	<script>
		function togglemobilemenu(){
			$(".mobilemenucontent").toggle();
		}
		
		$( document ).ready(function() {
			setTimeout(function(){
				$("#preloadscreen").fadeOut();
			}, 1000);
		});
		
		function togglesearch(){
		    $(".searchbar").fadeToggle();
		}
	</script>
	<?php wp_footer(); ?>
	</body>
</html>