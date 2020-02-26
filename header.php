<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta <?php bloginfo('charset'); ?>>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	
	<!-- fonts-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"></link>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,800,900|Playfair+Display:400,400i,700,700i&display=swap" rel="stylesheet">
    <!--estilo-->
	  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.css"> 
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/style.css">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">

    <?php wp_head();?>

</head>
<!-- Bootstrap CSS -->
    
    <body>
    	<header>
    		<div class="container">
    			<img src="<?php bloginfo('template_url');?>/img/logo.png" alt="" class="img-fluid">

    			<div class="video-header">
                    <?php
                      //args
                      $my_args_header = array(
                          'post_type' => 'header',
                          'post_per_page' => 1,
                      );

                      //query

                      $my_query_header = new WP_Query ($my_args_header);
                    ?>
                    <?php if($my_query_header->have_posts()) : while($my_query_header->have_posts() ) : $my_query_header->the_post();?>

    				<?php the_content()?>
    				


                    <?php endwhile; endif; ?>
                    <?php wp_reset_query(); ?>
    			</div>

    		</div>
    	</header>