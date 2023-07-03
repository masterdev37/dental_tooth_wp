<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dental_tooth
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

		<section class="s-dentist">
			<div class="container">

				<div class="dentist-row">
					<div class="dentist-left">
						<?php the_post_thumbnail('large');?>
					</div>

					<div class="dentist-right">
						<h1 class="def-title"><?php the_title(); ?></h1>
						<div class="dentist-list">
							<?php
								$specialists_fields = CFS()->get('specialists-loop');
								foreach ( $specialists_fields as $field ) : ?>
									<div class="dentist-list">
										<h3 class="dentist-list-title"><?php echo $field['specialists-info-title'];?></h3>
										<?php echo $field['specialists-info-content'];?>
									</div>
								<?php endforeach;
							?>
						</div>
					</div>
				</div>

				<div class="contacts-row dentist-contacts-row">
					<div class="contacts-item">
						<div class="contacts-icon">
							<img src="<?php echo get_template_directory_uri();?>/assets/images/phone.svg" alt="Телефон">
						</div>
						<div class="contacts-name">Наш телефон</div>
						<div class="contacts-descr">
							<?php echo CFS()->get('specialists-phone'); ?>
						</div>
					</div>

					<div class="contacts-item">
						<div class="contacts-icon">
							<img src="<?php echo get_template_directory_uri();?>/assets/images/envelope.svg" alt="Email">
						</div>
						<div class="contacts-name">Email</div>
						<div class="contacts-descr">
							<?php echo CFS()->get('specialists-email'); ?>
						</div>
					</div>

					<div class="contacts-item">
						<div class="contacts-icon">
							<img src="<?php echo get_template_directory_uri();?>/assets/images/molekula.svg" alt="Мы в социальных сетях">
						</div>
						<div class="contacts-name">Социальные сети</div>
						<div class="contacts-descr">
							<div class="contacts-social">
								<?php
									$specialists_social = CFS()->get('specialists-social');
									foreach ( $specialists_social as $field ) : ?>
										<a href="<?php echo $field['specialists-social-link'];?>" target="_blank">
											<img src="<?php echo $field['specialists-social-icon'];?>" alt="Icon">
										</a>
									<?php endforeach;
								?>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>
		

		<?php
			get_template_part('template-parts/s-form');
		?>

	</main>

<?php

get_footer();
