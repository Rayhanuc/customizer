<?php
/*
Template Name: Customizer About
*/
?>




<!DOCTYPE html>
<html <?php language_attributes(  ); ?>>
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<?php wp_head();?>

	</head>

	<body <?php body_class(  ); ?>>
		

		<div class="breadcromb-area breadcromb-bg-1 black-overlay">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h1>
							<?php echo __('Hello Dolly','customizer'); ?>
						</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, quibusdam!</p>
					</div>
				</div>
			</div>
		</div>
		<!-- hero area end class-7 -->


		<div class="section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="heading-text">
							<h2 id="about-heading">
								<?php
								echo esc_html(get_theme_mod( 'cust_about_heading',__('About Page Heading.','customizer') ));
								// echo esc_html(cs_get_customize_option('about_heading'));
								?>
							
							</h2>
							<div id="about-discription">
							<?php
							echo apply_filters( 'the_content', get_theme_mod('cust_about_description') );
							// echo esc_html(cs_get_customize_option('about_description'));


							?>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
		

		<!--  footer area -->
		
		<div class="footer-area">
			<div class="container">

				<div class="row">
					<div class="col-md-12 text-center">
						<h3>Follow Us</h3>
						<div class="social-links">
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-linkedin"></i></a>
							<a href=""><i class="fa fa-youtube"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>


		

		<?php wp_footer(); ?>
	</body>
</html>
