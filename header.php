<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dental_tooth
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	
	<div class="callback-popup mfp-hide mfp-with-anim" id="callback-popup">
		<div class="callback-header">
			<div class="callback-logo">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/logo.svg" alt="Dental Tooth">
			</div>
			<button title="Close" type="button" class="mfp-close-custom">
				<svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M0.977032 19.0005C0.72675 19.0005 0.476467 18.9053 0.28631 18.7137C-0.0954366 18.3319 -0.0954366 17.713 0.28631 17.3313L17.3313 0.28631C17.713 -0.0954366 18.3319 -0.0954366 18.7137 0.28631C19.0954 0.668056 19.0954 1.28696 18.7137 1.66895L1.66895 18.7137C1.47736 18.9041 1.22708 19.0005 0.977032 19.0005V19.0005Z" fill="#F0DFDF"/>
					<path d="M18.0232 19.0005C17.7729 19.0005 17.5229 18.9053 17.3325 18.7137L0.28631 1.66895C-0.0954366 1.28696 -0.0954366 0.668056 0.28631 0.28631C0.668056 -0.0954366 1.28696 -0.0954366 1.66895 0.28631L18.7137 17.3313C19.0954 17.713 19.0954 18.3319 18.7137 18.7137C18.5221 18.9041 18.2721 19.0005 18.0232 19.0005Z" fill="#F0DFDF"/>
				</svg>					
			</button>
		</div>
		<div class="callback-body">
			<div class="form-wrap">
				<h3 class="callback-form-title">Получить консультацию</h3>
				<div class="wpcf7">
					<?php echo do_shortcode('[contact-form-7 id="8" title="Записаться на консультацию"]'); ?>
				</div>
				<div class="form-agree">
					Нажимая кнопку, я даю свое согласие на обработку моих персональных данных
				</div>
			</div>
		</div>
	</div>

	<header class="header">
		<div class="header-top">
			<div class="container">
				<div class="header-top-row">
					<div class="header-top-location">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/location.svg" alt="Адрес">
						<span><?php echo get_field('address', 18);?></span>
					</div>

					<div class="header-top-right">
						<a href="tel:77776544454" class="header-top-phone">
							<img src="<?php echo get_template_directory_uri();?>/assets/images/phone.svg" alt="Телефон">
							<span><?php echo get_field('telephone', 18);?></span>
						</a>
						<a href="malito:info@dentaltooth.kz" class="header-top-email">
							<img src="<?php echo get_template_directory_uri();?>/assets/images/envelope.svg" alt="Email">
							<span><?php echo get_field('email', 18);?></span>
						</a>

						<div class="header-top-social">
							<?php
								if(get_field('social-twitter', 18)) { ?>
									<a href="<?php echo get_field('social-twitter', 18);?>">
										<img src="<?php echo get_template_directory_uri();?>/assets/images/twitter.svg" alt="Twitter">
									</a>
								<?php }
							?>

							<?php
								if(get_field('social-instagram', 18)) { ?>
									<a href="<?php echo get_field('social-instagram', 18);?>">
										<img src="<?php echo get_template_directory_uri();?>/assets/images/instagram.svg" alt="Instagram">
									</a>
								<?php }
							?>

							<?php
								if(get_field('social-vk', 18)) { ?>
									<a href="<?php echo get_field('social-vk', 18);?>">
										<img src="<?php echo get_template_directory_uri();?>/assets/images/vk.svg" alt="Vk">
									</a>
								<?php }
							?>
						</div>
					</div>
					<div class="hamburger">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/hamburger.svg" alt="Hamburger">
					</div>
				</div>
			</div>
		</div>

		<div class="header-bottom">
			<div class="container">
				<div class="header-bottom-row">
					<?php the_custom_logo(); ?>
					<nav class="menu-nav">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-header',
									'menu_id'        => 'menu-header',
								)
							);
						?>
					</nav>
					<a href="#callback-popup" class="header-bottom-btn" data-effect="mfp-zoom-in"><?php echo get_field('modal-btn', 18);?></a>
				</div>
			</div>
		</div>

		<div class="mobile-menu">
			<div class="mobile-menu-header">
				<div class="mobile-menu-title">Меню</div>
				<div class="mobile-menu-close"><img src="<?php echo get_template_directory_uri();?>/assets/images/close.svg" alt="Закрыть меню"></div>
			</div>
			<div class="mobile-menu-body">
				<a href="tel:77776544454" class="header-top-phone">
					<img src="<?php echo get_template_directory_uri();?>/assets/images/phone.svg" alt="Телефон">
					<span><?php echo get_field('telephone', 18);?></span>
				</a>
				<a href="malito:info@dentaltooth.kz" class="header-top-email">
					<img src="<?php echo get_template_directory_uri();?>/assets/images/envelope.svg" alt="Email">
					<span><?php echo get_field('email', 18);?></span>
				</a>

				<div class="header-top-social">
				<?php
					if(get_field('social-twitter', 18)) { ?>
						<a href="<?php echo get_field('social-twitter', 18);?>">
							<img src="<?php echo get_template_directory_uri();?>/assets/images/twitter.svg" alt="Twitter">
						</a>
					<?php }
					?>

					<?php
						if(get_field('social-instagram', 18)) { ?>
							<a href="<?php echo get_field('social-instagram', 18);?>">
								<img src="<?php echo get_template_directory_uri();?>/assets/images/instagram.svg" alt="Instagram">
							</a>
						<?php }
					?>

					<?php
						if(get_field('social-vk', 18)) { ?>
							<a href="<?php echo get_field('social-vk', 18);?>">
								<img src="<?php echo get_template_directory_uri();?>/assets/images/vk.svg" alt="Vk">
							</a>
						<?php }
					?>
				</div>

				<nav class="mobile-menu-nav">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-header',
								'menu_id'        => 'menu-header',
							)
						);
					?>
				</nav>
			</div>
		</div>
	</header>