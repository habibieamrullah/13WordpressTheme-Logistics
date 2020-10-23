<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		
		<?php echo wp_site_icon(); ?>
		<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&display=swap" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/css/font-awesome.css">
		<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
        <?php wp_head(); ?>
		<?php
		include(get_template_directory() . "/style.php");
		?>
		<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/slick/slick-theme.css"/>
        <script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/slick/slick.min.js"></script>
	</head>
	<body>
	    
	    <div id="preloadscreen">
    		<div style="display: table-cell; height: 100%; width: 100%; vertical-align: middle; text-align: center;">
    			<?php
    			if ( has_custom_logo() ) {
    				$custom_logo_id = get_theme_mod( 'custom_logo' );
    				$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    				echo '<img src="' . $logo[0] . '" alt="' . get_bloginfo( 'name' ) . '" height="128px" style="margin-top: 10px;">';
    			}else{
    				echo "<p>Please wait...</p>";
    			}
    			?>
    		</div>
    	</div>
	    
		<div class="header">
		    <div class="desktopmenu">
    		    <?php			
    			wp_nav_menu(array(
    				'theme_location' => 'my-header-menu',
    				'container_class' => 'header-menu'
    			));
    			?>
			</div>
		    
			<?php
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			if ( has_custom_logo() ) {
					echo '<a href="' .get_site_url(). '"><img src="' . $logo[0] . '" alt="' . get_bloginfo( 'name' ) . '" height="60px" style="margin-top: 10px;"></a>';
			} else {
					echo '<h1><a href="' .get_site_url(). '">'. get_bloginfo( 'name' ) .'</a></h1>';
			}
			
			?>
			
			<div class="mobilemenucontent">
    			<?php			
    			wp_nav_menu(array(
    				'theme_location' => 'my-header-menu',
    				'container_class' => 'header-menu-mobile'
    			));
    			?>
    		</div>
		</div>
		
		
		
		<?php echo do_shortcode(get_option('header_shortcode')); ?>
		
		<div class="searchbar">
		    <div style="display: table; width: 100%; height: 100%;">
		        <div style="display: table-cell; vertical-alingn: middle; padding: 50px;">
        		    <form method="get">
        		        <h2 style="color: white; margin: 30px; font-size: 30px;">
        		           Search 
        		        </h2>
                        <div style="display: table; width: 100%; height: 100%; color: <?php echo letsgetop("primary_color", "#8d7a42"); ?>;">
                            <div style="display: table-cell; vertical-align: middle; width: 20px; padding: 10px;"><i class="fa fa-search"></i></div>
                            <div style="display: table-cell; vertical-align: middle; padding: 10px;"><input type="text" name="s" id="search" placeholder="Search..." value="<?php the_search_query(); ?>" style="width: 100%; box-sizing: border-box;" /></div>
                            <div style="display: table-cell; vertical-align: middle; width: 20px; padding: 10px;"><input type="submit" value="Find" style="background-color: <?php echo letsgetop("primary_color", "#8d7a42"); ?>; color: white;"></div>
                        </div>
                        <div onclick="togglesearch()" style="color: white; cursor: pointer; padding: 20px;">
                            <i class="fa fa-times"> Close</i>
                        </div>
                    </form>
                </div>
            </div>
		</div>
		
		<div class="mobilemenubutton vonmobile" onclick="togglemobilemenu()"><i class="fa fa-bars"></i></div>
		