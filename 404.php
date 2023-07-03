<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package dental_tooth
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="s-not-found">
			<div class="container">
				<div class="not-found-wrap">
					<img src="<?php echo get_template_directory_uri();?>/assets/images/404-image.png" alt="404">
					<div class="not-fount-content">
						<h3 class="not-found-title">Страница не найдена</h3>
						<a href="<?php echo get_home_url();?>">Перейти на <span class="has-line">главную</span></a>
					</div>
				</div>
			</div>
		</div>


	</main>

<?php
get_footer();
