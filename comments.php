<?php
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area s-comments">

	<div class="comments-row">
		<?php
		if ( have_comments() ) :
			?>

			<?php the_comments_navigation(); ?>

			<?php
			the_comments_navigation();

			
			if ( ! comments_open() ) :
				?>
				<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'dental_tooth' ); ?></p>
				<?php
			endif;

		endif; 

		comment_form(array(
			'title_reply' => 'Оставить комментарий',
			'fields'               => [
				'author' => '<p class="comment-form-author">
					<input id="author" placeholder="Ваше имя" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . $html_req . ' />
				</p>',
				'email'  => '<p class="comment-form-email">
					<input id="email" name="email" placeholder="Ваш email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-describedby="email-notes"' . $aria_req . $html_req  . ' />
				</p>',
				'cookies' => ''
			],
			'comment_field'        => '<p class="comment-form-comment">
					<textarea id="comment" name="comment" placeholder="Комментарий" cols="45" rows="8"  aria-required="true" required="required"></textarea>
				</p>',
			'submit_button' => '<p class="form-submit"><button id="submit" class="submit">Отправить</button></p>',
		));

		?>

		<div class="comments-count">
			<?php
			$dental_tooth_comment_count = get_comments_number();
			if ( '1' === $dental_tooth_comment_count ) {
				echo '<strong>1</strong> комментарий о посте “'. get_the_title() .'”';
			} else {
				echo '<strong>'. $dental_tooth_comment_count .'</strong> комментариев о посте “'. get_the_title() .'”';
			}
			?>
		</div>
	</div>
		<ul class="comment-list">
				<?php
				wp_list_comments(
					array(
						'style'      => 'ul',
						'short_ping' => true,
					)
				);
				?>
		</ul>

</div>
