<?php
/**
 * Template name: Блог
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

	<section class="s-news s-blog">
		<div class="container">
			<div class="def-title-wrapper">
				<h2 class="def-title">Блог</h2>
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

		<?php
			get_template_part('template-parts/s-form');
		?>

	</main>

<?php
get_footer();
