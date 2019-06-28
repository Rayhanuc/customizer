<!DOCTYPE html>
<html <?php language_attributes(  ); ?>>
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<?php wp_head();?>

	</head>

	<body <?php body_class(  ); ?>>
		<!-- <div class="header-area header-absolute">
			<div class="container">
				<div class="row">
				    <div class="col-md-2">
				        <div class="logo">
				            <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/img/logo-icon.png" alt="">twist</a>
				        </div>
				    </div>
					<div class="col-md-8 text-center">
						<div class="mainmenu">
							<ul id="nav">
								<li class="itm1"><a href="">Home</a></li>
								<li class="itm2"><a href="">About</a></li>
								<li class="itm3"><a href="">Services</a></li>								
								<li class="itm4"><a href="">Work</a></li>
								<li class="itm5"><a href="">Page</a></li>
								<li class="itm6"><a href="">Blog</a></li>
								<li class="itm7"><a href="">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-2 text-right">
						<span  class="search-icon"><i class="fa fa-search"></i></span>
					</div>
				</div>
			</div>
		</div> -->

		<div class="breadcromb-area breadcromb-bg-1 black-overlay">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h1>
							Hello Dolly
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
							<h2>
							<?php 
							echo esc_html(get_theme_mod( 'cust_services_heading',__('Our Mission Statement','customizer') ));
							// echo esc_html(get_option( 'cust_services_heading',__('Our Mission Statement','customizer') ));
							?>
							</h2>
							<?php
							if (get_theme_mod('cust_services_display_subheading',1)):
							?>
							<p><?php echo esc_html(get_theme_mod('cust_services_subheading',__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta iusto sit distinctio debitis, delectus perferendis nihil qui quasi laudantium. Id nemo autem molestiae odio placeat eos nulla nihil, officiis quisquam!','customizer'
							)));
							?></p>
							<?php
							endif;
							?>
						</div>
					</div>
					<?php
					$cust_column = get_theme_mod('cust_services_number_of_items',4);
					?>
					<div class="col-md-<?php echo esc_attr( $cust_column ); ?> text-center">
						<div class="service-box">
							<div class="service-icon">
								<div class="service-icon-table">
									<div class="service-icon-tablecell">
										<i class="fa fa-laptop"></i>
									</div>
								</div>
							</div>

							<h3>Digital Marketing</h3>
							<p>From a business perspective, it was not hard to understand why West Ham Unite found it impossible to resist.Aaron Judge, a 25-year-old Yank rookie, finally offered.</p>
						</div>
					</div>
					<div class="col-md-<?php echo esc_attr( $cust_column ); ?> text-center">
						<div class="service-box">
							<div class="service-icon">
								<div class="service-icon-table">
									<div class="service-icon-tablecell">
										<i class="fa fa-cog"></i>
									</div>
								</div>
							</div>

							<h3>Web Development</h3>
							<p>From a business perspective, it was not hard to understand why West Ham Unite found it impossible to resist.Aaron Judge, a 25-year-old Yank rookie, finally offered.</p>
						</div>
					</div>
					<div class="col-md-<?php echo esc_attr( $cust_column ); ?> text-center">
						<div class="service-box">
							<div class="service-icon">
								<div class="service-icon-table">
									<div class="service-icon-tablecell">
										<i class="fa fa-diamond"></i>
									</div>
								</div>
							</div>

							<h3>Graphic Design</h3>
							<p>From a business perspective, it was not hard to understand why West Ham Unite found it impossible to resist.Aaron Judge, a 25-year-old Yank rookie, finally offered.</p>
						</div>
					</div>
					<div class="col-md-<?php echo esc_attr( $cust_column ); ?> text-center">
						<div class="service-box">
							<div class="service-icon">
								<div class="service-icon-table">
									<div class="service-icon-tablecell">
										<i class="fa fa-send"></i>
									</div>
								</div>
							</div>

							<h3>Branding</h3>
							<p>From a business perspective, it was not hard to understand why West Ham Unite found it impossible to resist.Aaron Judge, a 25-year-old Yank rookie, finally offered.</p>
						</div>
					</div>
					<div class="col-md-<?php echo esc_attr( $cust_column ); ?> text-center">
						<div class="service-box">
							<div class="service-icon">
								<div class="service-icon-table">
									<div class="service-icon-tablecell">
										<i class="fa fa-line-chart"></i>
									</div>
								</div>
							</div>

							<h3>SEO Marketing</h3>
							<p>From a business perspective, it was not hard to understand why West Ham Unite found it impossible to resist.Aaron Judge, a 25-year-old Yank rookie, finally offered.</p>
						</div>
					</div>
					<div class="col-md-<?php echo esc_attr( $cust_column ); ?> text-center">
						<div class="service-box">
							<div class="service-icon">
								<div class="service-icon-table">
									<div class="service-icon-tablecell">
										<i class="fa fa-gift"></i>
									</div>
								</div>
							</div>

							<h3>Print Design</h3>
							<p>From a business perspective, it was not hard to understand why West Ham Unite found it impossible to resist.Aaron Judge, a 25-year-old Yank rookie, finally offered.</p>
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

		<!--  All link Should be link properly -->

		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery-circle-progress-1.2.2.min.js"></script>
		<script src="assets/js/owl.carousel.min.js"></script>
		<script src="assets/js/scripts.js"></script>

		<?php wp_footer(); ?>
	</body>
</html>