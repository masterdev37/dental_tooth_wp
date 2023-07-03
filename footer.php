<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dental_tooth
 */

?>

<footer class="site-footer">
		<div class="container">
			<div class="footer-row">
				<div class="footer-left">
					<a href="/" class="footer-logo">
						<img src="<?php echo get_field('footer-logo', 18);?>" alt="Dental Tooth">
					</a>
					<div class="footer-info">
						<div class="footer-info-item">
							<span class="footer-info-icon">
								<img src="<?php echo get_template_directory_uri();?>/assets/images/location.svg" alt="Локация">
							</span>
							<span><?php echo get_field('address', 18);?></span>
						</div>

						<div class="footer-info-item">
							<span class="footer-info-icon">
								<img src="<?php echo get_template_directory_uri();?>/assets/images/phone.svg" alt="Телефон">
							</span>
							<span><?php echo get_field('telephone', 18);?></span>
						</div>

						<div class="footer-info-item">
							<span class="footer-info-icon">
								<img src="<?php echo get_template_directory_uri();?>/assets/images/envelope.svg" alt="Email">
							</span>
							<span><?php echo get_field('email', 18);?></span>
						</div>
					</div>

					<div class="footer-social">
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

				<div class="footer-right">

					<div class="footer-menu">

						<div class="footer-title">Наши услуги</div>
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-services',
									'menu_id'        => 'menu-services',
								)
							);
						?>
					</div>

					<div class="footer-menu">
						<div class="footer-title">Наши стоматологи</div>
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-dentists',
									'menu_id'        => 'menu-dentists',
								)
							);
						?>
					</div>

					<div class="footer-menu">
						<?php
							$footer_ext = get_field('ext-block', 18);
							if( $footer_ext ): ?>
								<div class="footer-title"><?php echo $footer_ext['ext-block-title']; ?></div>
								<?php echo $footer_ext['ext-block-info']; ?>
							<?php endif;
						?>
						
					</div>

				</div>
			</div>
		</div>

		<div class="footer-copyright">
			<div class="container">
				<div>
					<?php echo get_field('footer-copyright', 18);?>
				</div>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
