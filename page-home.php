<?php
/**
 * Template name: Главная
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="s-banner">
			<div class="container">
				<div class="banner-row">
					<div class="banner-left">
						<div class="banner-subtitle"><?php echo get_field('banner-subtitle');?></div>
						<h1 class="banner-title"><?php echo get_field('banner-title');?></h1>
						<div class="banner-description">
							<?php echo get_field('banner-description');?>
						</div>
						<a href="<?php echo get_field('banner-btn-link');?>" class="banner-btn anchor-link"><?php echo get_field('banner-btn-text');?></a>
					</div>
					<div class="banner-right">
						<img class="banner-image" src="<?php echo get_field('banner-image');?>" alt="Girl">
						<img class="banner-logo" src="images/banner-logo.png" alt="Banner logo">
						<span class="banner-circle"></span>
					</div>
				</div>
			</div>
		</section>

		<section class="s-about">
			<div class="container">
				<div class="about-row">
					<div class="about-left">
						<img src="<?php echo get_field('about-image');?>" alt="О нас изображение">
					</div>
					<div class="about-right">
						<h2 class="def-title">
							<?php echo get_field('about-title');?>
						</h2>
						<div class="about-description">
							<?php echo get_field('about-description');?>
						</div>

						<div class="about-list-wrap">
							<div class="about-list-title">Мы предлагаем услуги:</div>
							<?php echo get_field('about-services');?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="s-features">
			<?php $feature1 = get_field('feature-1'); ?>
			<?php $feature2 = get_field('feature-2'); ?>
			<?php $feature3 = get_field('feature-3'); ?>
			<div class="container">
				<div class="features-row">
					<div class="features-item">
						<div class="features-icon">
							<img src="<?php echo $feature1['feature-icon-1'];?>" alt="<?php echo $feature1['feature-title-1'];?>">
						</div>
						<div class="features-title"><?php echo $feature1['feature-title-1'];?></div>
						<div class="features-description">
							<?php echo $feature1['feature-descr-1'];?>
						</div>
					</div>
					<div class="features-item">
						<div class="features-icon">
							<img src="<?php echo $feature2['feature-icon-2'];?>" alt="<?php echo $feature2['feature-title-2'];?>">
						</div>
						<div class="features-title"><?php echo $feature2['feature-title-2'];?></div>
						<div class="features-description">
							<?php echo $feature2['feature-descr-2'];?>
						</div>
					</div>
					<div class="features-item">
						<div class="features-icon">
							<img src="<?php echo $feature3['feature-icon-3'];?>" alt="<?php echo $feature3['feature-title-3'];?>">
						</div>
						<div class="features-title"><?php echo $feature3['feature-title-3'];?></div>
						<div class="features-description">
							<?php echo $feature3['feature-descr-3'];?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="s-specialists">
			<div class="container">

				<div class="def-title-wrapper">
					<h2 class="def-title"><?php echo CFS()->get('specialists-title');?></h2>
					<div class="def-description">
						<?php echo CFS()->get('specialists-subtitle');?>
					</div>
				</div>

				<div class="specialists-row">

				<?php
					$args_specialists = array(
						'post_type' => 'specialists',
					);

					$the_specialists = new WP_Query($args_specialists);

					if ($the_specialists->have_posts()) {

						while ($the_specialists->have_posts()) {
							$the_specialists->the_post(); ?>

							<a href="<?php the_permalink(); ?>" class="specialists-item">
								<div class="specialists-image">
									<?php the_post_thumbnail('large');?>
								</div>
								<div class="specialists-footer">
									<div class="specialists-name"><?php the_title();?></div>
									<div class="specialists-profi"><?php echo CFS()->get('specialists-profi'); ?></div>
								</div>
							</a>

					<?php	}
					} else {
						echo 'Нет постов';
					}
					wp_reset_postdata();
					?>

				</div>
			</div>
		</section>

		<section class="s-price">
			<div class="container">
				<div class="price-wrap">
					<div class="def-title-wrapper">
						<h2 class="def-title"><?php echo CFS()->get('price-title'); ?></h2>
						<div class="def-description">
							<?php echo CFS()->get('price-subtitle'); ?>
						</div>
					</div>
					<ul class="price-list-wrap">
					<?php
						$price_loop = CFS()->get('price-loop');
						if($price_loop) :
							foreach ($price_loop as $field) : ?>
								<li>
									<span><?php echo $field['price-service-name'];?></span>
									<span><?php echo $field['price-service-price'];?></span>
								</li>
							<?php endforeach;
						endif;
					?>
					</ul>
				
				</div>
			</div>
		</section>

		<section class="s-news">
			<div class="container">
				<div class="def-title-wrapper">
					<h2 class="def-title">Новости Dental Tooth</h2>
				</div>
				
				<div class="news-row">
				<?php
					$wp_query = new WP_Query();
					$wp_query->query('posts_per_page=6' . '&paged='.$paged);
					while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
						<article class="news-item">
							<div class="news-thumb">
								<?php the_post_thumbnail('large');?>
							</div>

							<div class="news-body">
								<div class="news-top-line">
									<div class="news-date"><?php echo get_the_date('j F Y'); ?></div>
									<div class="news-date"><strong><?php comments_number('0','1','%'); ?></strong> комментариев</div>
								</div>
								<h3 class="news-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>
								<div class="news-description">
									<?php echo wp_trim_words( get_the_content(), 15, '...' ); ?>
								</div>
								<a href="<?php the_permalink(); ?>" class="news-readmore">Читать далее</a>
							</div>
						</article>
					<?php endwhile;
					wp_reset_query();
				?>
				</div>
			</div>
		</section>

		<section class="s-reviews" style="background-image: url('<?php echo CFS()->get('reviews-bg');?>')">
			<div class="container">
				<div class="reviews-wrap">
					<h2 class="def-title"><?php echo CFS()->get('reviews-title'); ?></h2>
					<div class="swiper reviews-swiper">
						<div class="swiper-wrapper">

						<?php
							$reviews_loop = CFS()->get('reviews-slider');
							if($reviews_loop) :
								foreach ($reviews_loop as $field) : ?>
									<div class="swiper-slide">
										<div class="reviews-row">
											<div class="reviews-avatar">
												<img src="<?php echo $field['reviews-avatar'];?>" alt="Аватар">
											</div>
											<div class="reviews-content">
												<div class="reviews-text">
													<?php echo $field['reviews-descr'];?>
												</div>
												<div class="reviews-bottom">
													<div class="reviews-name"><?php echo $field['reviews-name'];?></div>
													<div class="reviews-social">
														<?php if($field['reviews-twitter']): ?>
															<a href="<?php echo $field['reviews-twitter']; ?>">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<g clip-path="url(#clip0_1_345)">
																	<path d="M23.6608 5.26924C23.5216 5.04295 23.2671 4.91469 23.0021 4.93767L21.8289 5.03987L22.9503 2.77917C23.0839 2.50991 23.0311 2.18551 22.8192 1.97241C22.6071 1.75931 22.283 1.70499 22.0131 1.83716L19.045 3.29079C17.2112 2.32269 14.9202 2.61005 13.3437 4.04612C12.028 5.24465 11.3364 7.08781 11.4654 8.92586C8.02652 8.58119 5.11567 6.61285 3.39444 3.43243C3.28024 3.22145 3.06613 3.08344 2.82684 3.06648C2.58709 3.0498 2.35611 3.15605 2.21338 3.34893C1.14582 4.79112 1.07091 6.76851 1.90782 8.3953C1.67712 8.33703 1.43162 8.25817 1.15938 8.16722C0.926152 8.08923 0.669028 8.13919 0.48185 8.29874C0.294672 8.4583 0.20469 8.70421 0.244718 8.94691C0.575876 10.9546 1.74665 12.4976 3.5961 13.411C3.35529 13.4948 3.10956 13.5629 2.8597 13.615C2.61145 13.6668 2.41043 13.8484 2.33392 14.0902C2.2574 14.3319 2.31724 14.5961 2.49049 14.7813C3.82234 16.2049 5.74623 16.9056 7.11278 17.2417C5.55901 18.4585 3.88176 18.6621 1.44453 18.5784C1.16241 18.5699 0.902484 18.7288 0.783872 18.9845C0.665306 19.2403 0.711308 19.5423 0.900784 19.7511C1.91678 20.871 5.61834 22.1338 9.50952 22.2285C9.66342 22.2322 9.82041 22.2342 9.9807 22.2342C12.7128 22.2342 16.3236 21.6485 18.9154 19.0567C20.8771 17.0951 22.1041 14.8368 22.5623 12.3447C22.9323 10.332 22.6984 8.72025 22.5861 7.94562C22.5778 7.88868 22.569 7.82825 22.5618 7.7754L23.6593 6.00656C23.7993 5.78091 23.7999 5.49553 23.6608 5.26924ZM21.1972 8.14709C21.4055 9.58202 22.039 13.9486 17.9231 18.0644C15.5307 20.4568 12.0459 20.8864 9.54361 20.8256C7.40846 20.7737 5.49862 20.3653 4.11443 19.8996C4.67643 19.8307 5.17725 19.7243 5.65 19.5774C6.95327 19.1723 8.05428 18.4434 9.11485 17.2835C9.29164 17.0902 9.34596 16.8146 9.25584 16.5686C9.16572 16.3226 8.94605 16.1474 8.68622 16.1141C8.01714 16.0283 6.00676 15.6899 4.42367 14.5979C4.87987 14.4113 5.31986 14.1778 5.73998 13.8992C5.97045 13.7462 6.08966 13.4722 6.04426 13.1994C5.9989 12.9266 5.79757 12.7058 5.53001 12.6356C4.23429 12.2959 2.6705 11.5358 1.94941 9.839C2.40988 9.9197 2.91057 9.93923 3.44458 9.81952C3.6921 9.76409 3.89044 9.57935 3.96324 9.33634C4.03608 9.09332 3.97211 8.8299 3.79591 8.64746C2.89867 7.71814 2.56315 6.37889 2.85101 5.23289C3.79375 6.61069 4.9881 7.77025 6.35648 8.62756C8.10699 9.7243 10.1501 10.3304 12.265 10.3802C12.4802 10.3847 12.6867 10.2908 12.8237 10.1241C12.9607 9.95738 13.0133 9.73693 12.9665 9.52632C12.6026 7.89052 13.1216 6.14668 14.2887 5.08358C15.4992 3.98087 17.2882 3.81359 18.6392 4.67705C18.8455 4.8089 19.1057 4.82365 19.3256 4.71593L20.7751 4.00601L20.0165 5.53546C19.9037 5.76271 19.9224 6.03312 20.0654 6.24263C20.2083 6.45214 20.4529 6.56846 20.7059 6.54626L21.7281 6.45725L21.2572 7.21621C21.0992 7.47094 21.1319 7.69695 21.1972 8.14709Z" fill="#302D2D"/>
																	</g>
																	<defs>
																	<clipPath id="clip0_1_345">
																	<rect width="23.5294" height="23.5294" fill="white" transform="translate(0.235352 0.235352)"/>
																	</clipPath>
																	</defs>
																</svg>												
															</a>
														<?php endif; ?>

														<?php if($field['reviews-vk']): ?>
															<a href="<?php echo $field['reviews-vk'];?>">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<g clip-path="url(#clip0_1_352)">
																	<path d="M12.1422 19.3529C15.5461 19.3529 14.3324 17.198 14.5952 16.5783C14.5912 16.1156 14.5873 15.6705 14.603 15.3999C14.8187 15.4607 15.3275 15.7185 16.3785 16.7401C18.001 18.3774 18.4157 19.3529 19.7265 19.3529H22.1393C22.904 19.3529 23.302 19.0362 23.501 18.7705C23.6932 18.5136 23.8814 18.0627 23.6755 17.3607C23.1373 15.6705 19.9981 12.7519 19.803 12.444C19.8324 12.3872 19.8795 12.3117 19.904 12.2725H19.902C20.5216 11.4538 22.8863 7.9107 23.2344 6.49305C23.2354 6.49109 23.2363 6.48815 23.2363 6.48521C23.4246 5.83815 23.252 5.41854 23.0736 5.18129C22.805 4.82638 22.3775 4.64697 21.8001 4.64697H19.3873C18.5795 4.64697 17.9667 5.05384 17.6569 5.79599C17.1383 7.11462 15.6814 9.82638 14.5893 10.7862C14.5559 9.42638 14.5785 8.38815 14.5961 7.61658C14.6314 6.11168 14.7452 4.64697 13.1834 4.64697H9.39123C8.4128 4.64697 7.47653 5.7156 8.49025 6.98423C9.37653 8.09599 8.80888 8.7156 9.00006 11.7999C8.25496 11.0009 6.92947 8.84305 5.99221 6.08521C5.72947 5.33913 5.33143 4.64795 4.21084 4.64795H1.7981C0.819665 4.64795 0.235352 5.18129 0.235352 6.07442C0.235352 8.08031 4.67555 19.3529 12.1422 19.3529ZM4.21084 6.11854C4.42359 6.11854 4.44516 6.11854 4.603 6.56658C5.5628 9.39305 7.71574 13.5754 9.28829 13.5754C10.4697 13.5754 10.4697 12.3646 10.4697 11.9087L10.4687 8.27933C10.404 7.07835 9.96673 6.48031 9.67947 6.11756L13.1187 6.12148C13.1206 6.13815 13.0991 10.1362 13.1285 11.1048C13.1285 12.4803 14.2206 13.2685 15.9255 11.5431C17.7246 9.51266 18.9687 6.47737 19.0187 6.35384C19.0922 6.17736 19.1559 6.11756 19.3873 6.11756H21.8001H21.8099C21.8089 6.1205 21.8089 6.12344 21.8079 6.12638C21.5873 7.1558 19.4099 10.4362 18.6814 11.4548C18.6697 11.4705 18.6589 11.4872 18.6481 11.5038C18.3275 12.0274 18.0667 12.6058 18.6922 13.4195H18.6932C18.7501 13.4881 18.8981 13.6489 19.1138 13.8725C19.7844 14.5646 22.0844 16.9313 22.2883 17.8725C22.153 17.894 22.0059 17.8783 19.7265 17.8832C19.2412 17.8832 18.8618 17.1578 17.4138 15.697C16.1118 14.4303 15.2667 13.9127 14.4971 13.9127C13.003 13.9127 13.1118 15.1254 13.1255 16.5921C13.1305 18.1823 13.1206 17.6793 13.1314 17.7793C13.0442 17.8136 12.7942 17.8823 12.1422 17.8823C5.92163 17.8823 1.87065 8.00874 1.71476 6.12148C1.76868 6.11658 2.51084 6.11952 4.21084 6.11854Z" fill="#302D2D"/>
																	</g>
																	<defs>
																	<clipPath id="clip0_1_352">
																	<rect width="23.5294" height="23.5294" fill="white" transform="translate(0.235352 0.235352)"/>
																	</clipPath>
																	</defs>
																</svg>
															</a>
														<?php endif; ?>
														
														
													</div>
												</div>
											</div>
										</div>
									</div>
								<?php endforeach;
							endif;
						?>

						</div>
					
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
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
