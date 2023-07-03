<?php
/**
 * Template name: Контакты
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="s-breadcrumbs">
			<div class="container">
				<ul>
					<?php bcn_display($return = false, $linked = true, $reverse = false, $force = false); ?>
				</ul>
			</div>
		</div>

		<div class="s-contacts">
		<div class="container">
			<div class="def-title-wrapper">
				<h2 class="def-title"><?php echo get_field('contacts-title'); ?></h2>
			</div>
			<div class="contacts-row">

				<div class="contacts-item">
					<div class="contacts-icon">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/location.svg" alt="Локация">
					</div>
					<div class="contacts-name">Наш офис</div>
					<div class="contacts-descr">
						<?php echo get_field('contacts-office'); ?>
					</div>
				</div>

				<div class="contacts-item">
					<div class="contacts-icon">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/phone.svg" alt="Телефон">
					</div>
					<div class="contacts-name">Наш телефон</div>
					<div class="contacts-descr">
						<?php echo get_field('contacts-phone'); ?>
					</div>
				</div>

				<div class="contacts-item">
					<div class="contacts-icon">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/envelope.svg" alt="Email">
					</div>
					<div class="contacts-name">Наш email</div>
					<div class="contacts-descr">
						<?php echo get_field('contacts-email'); ?>
					</div>
				</div>

				<div class="contacts-item">
					<div class="contacts-icon">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/molekula.svg" alt="Мы в социальных сетях">
					</div>
					<div class="contacts-name">Мы в социальных сетях</div>
					<div class="contacts-descr">
						<div class="contacts-social">
						<?php
							$contacts_social = get_field('contacts-social-group');
							if($contacts_social): 
								if($contacts_social['contacts-social-twitter']) : ?>
									<a href="<?php echo $contacts_social['contacts-social-twitter'];?>">
										<img src="<?php echo get_template_directory_uri();?>/assets/images/twitter.svg" alt="Twitter">
									</a>
								<?php endif;
								if($contacts_social['contacts-social-instagram']) : ?>
									<a href="<?php echo $contacts_social['contacts-social-instagram'];?>">
										<img src="<?php echo get_template_directory_uri();?>/assets/images/instagram.svg" alt="Instagram">
									</a>
								<?php endif;
								if($contacts_social['contacts-social-vk']) : ?>
									<a href="<?php echo $contacts_social['contacts-social-vk'];?>">
										<img src="<?php echo get_template_directory_uri();?>/assets/images/vk.svg" alt="Vk">
									</a>
								<?php endif;
							endif; ?>
						</div>
					</div>
				</div>

			</div>

			<div class="s-contacts-form">
				<h3 class="contacts-form-title"><?php echo get_field('contacts-form-title');?></h3>
				<?php echo do_shortcode('[contact-form-7 id="205" title="Связаться с нами"]');?>
				<!-- <div class="wpcf7">
					<form class="wpcf7-form init">
						<p><span class="wpcf7-form-control-wrap"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" placeholder="Ваше имя" type="text"></span></p>
						<p><span class="wpcf7-form-control-wrap"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-phonemask" placeholder="Ваш телефон" type="text" name="phone"></span></p>
						<p><span class="wpcf7-form-control-wrap"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-phonemask" placeholder="Ваш email" type="text" name="email"></span></p>
						<p><span class="wpcf7-form-control-wrap"><textarea class="wpcf7-form-control wpcf7-text" placeholder="Комментарий" name="comment"></textarea></span></p>
						<p><button class="wpcf7-form-control has-spinner wpcf7-submit">Отправить</button></p>
					</form>
				</div> -->
			</div>

		</div>
	</div>


			<?php
				get_template_part('template-parts/s-form');
			?>

	</main>

<?php
get_footer();
