<section class="s-form" id="s-form">
	<div class="container">
		<div class="form-row">
			<div class="form-wrap">
				<h3 class="form-title"><?php echo get_field('callback-form-title', 18);?></h3>
				<?php echo do_shortcode('[contact-form-7 id="8" title="Записаться на консультацию"]'); ?>
				<div class="form-agree">
					Нажимая кнопку, я даю свое согласие на обработку моих персональных данных
				</div>
			</div>
			
			<div class="form-image">
				<img src="<?php echo get_field('callback-form-image', 18);?>" alt="<?php echo get_field('callback-form-title', 18);?>">
			</div>
		</div>
	</div>
</section>
