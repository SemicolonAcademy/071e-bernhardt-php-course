<html>
	<head>	
		<title><?php bloginfo( 'name' ); ?></title>
		
		<link 
		href="<?php echo get_template_directory_uri(); ?>/style.css"	
		rel="stylesheet" type="text/css" 
		/>
		
		
	</head>
		
	<body>
	
	<div id="wrapper">
	
		<div id="header">
		
			<div id="logo">
				<h1><?php bloginfo( 'name' ); ?></h1>
				<?php //bloginfo( 'description' ); ?>
			</div>
			
			<div id="nav">	
				
			<a href="<?php echo home_url( '/' ); ?>">Home</a>		
			
			<?php 

				$params = array(
					'container'       => false,
					'echo'            => false,
					'items_wrap'      => '%3$s',
					'depth'           => 0,
				);
				
				echo strip_tags( wp_nav_menu($params), '<a>');
	 
			?>
			
			
			</div>
			
				

			
			
			
		</div>
		
		<div id="content-wrapper">
				
				<div id="left_sidebar">				
					<div class="left_box">
	<h4>Latest News</h4>
	<div>
		
		
		<?php while ( have_posts() ) { ?>
		
					<?php the_post(); ?>
				
					<?php //the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
				
					<a href="<?php the_permalink();?>">
						<?php the_title(); ?><br/>
						<span>							
							<?php echo substr(the_excerpt(),0,100); ?> 
							,<?php the_time('Y/m/d') ?>
						</span>
					</a>	
				
		<?php } ?>
		
				
	</div>
</div>

				</div> <!-- left_sidebar end -->
				
				<div id="content_area">
				
						
						<?php query_posts('page_id=15'); //pname = your page name?> 

						<?php while (have_posts()) { 
						the_post(); ?> 
						
							<h2><?php the_title(); ?></h2> 
							<div> 
							<?php the_content() ?> 
							</div>     
							
						<?php } ?>

						
						<div class="content_box bg_red">						
							<p>
								Lorem ipsum dolar sit amet ipsum dolar sit amet
								ipsum dolar sit amet ipsum dolar sit amet Lorem ipsum dolar sit amet 
								ipsum dolar. Ipsum dolar sit amet ipsum.						
								
							</p>
						</div>
						
						<div class="content_box bg_green">						
							<p>
								Lorem ipsum dolar sit amet ipsum dolar sit amet
								ipsum dolar sit amet ipsum dolar sit amet Lorem ipsum dolar sit amet 
								ipsum dolar. Ipsum dolar sit amet ipsum.						
								
							</p>
						</div>
						
						<div class="content_box bg_blue">						
							<p>
								Lorem ipsum dolar sit amet ipsum dolar sit amet
								ipsum dolar sit amet ipsum dolar sit amet Lorem ipsum dolar sit amet 
								ipsum dolar. Ipsum dolar sit amet ipsum.						
								
							</p>
						</div>
				
				</div> <!-- content_are end -->
				
				
		
		</div> <!-- content_wrapper end -->
		
		<div class="clear"></div>
		
		<div id="footer">
			<p>
				&copy; 2014. All Rights Reserved.
			</p>
		</div>
		
	
	</div> <!-- wrapper end -->
	
	</body>
</html>

	