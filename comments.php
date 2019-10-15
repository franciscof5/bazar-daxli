<?php // Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p>Esse post é protegido por senha, somente pessoas autorizadas podem acessá-lo</p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
?>

<!-- You can start editing here. -->
	<?php if ($comments) : ?>
		<h3 id="comments"><?php comments_number('Seja o primeiro a comentar', 'Uma reposta', '% Responstas' );?> para &#8220;<?php the_title(); ?>&#8221;</h3>
	
		<ol id="comentario_unico">
			<?php foreach ($comments as $comment) : ?>
			<li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
				<p>
					<a><?php the_time("l, j");?> de <?php the_time("F");?> de <?php the_time("Y");?></a>
					<br />
					<?php edit_comment_link('edit','&nbsp;&nbsp;',''); ?>
				</p>
				<?php echo get_avatar( $comment, 32 ); ?>
				<cite><?php comment_author_link() ?></cite> comentou:
				<?php if ($comment->comment_approved == '0') : ?>
				<p>Seu comentário está aguardando modera&ccedil;&atilde;o.</p>
				<?php endif; ?>
				<br />
				<br />
				<?php comment_text() ?>
				<br />
			</li>
			<?php
				/* Changes every other comment to a different class */
				$oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : '';
			?>
			<?php endforeach; /* end for each comment */ ?>
		</ol>
	
	 <?php else : // this is displayed if there are no comments so far ?>
	
		<?php if ('open' == $post->comment_status) : ?>
			<!-- If comments are open, but there are no comments. -->
	
		 <?php else : // comments are closed ?>
			<!-- If comments are closed. -->
			<p>Coment&aacute;rios est&atilde;o fechados.</p>
	
		<?php endif; ?>
	<?php endif; ?>
	
	<?php if ('open' == $post->comment_status) : ?>
	
	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
	<p>Você precisa <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">se logar</a> para comentar no post.</p>
	<?php else : ?>
	
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
	
	<?php if ( $user_ID ) : ?>
	
	<p>Logado como <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Sair &raquo;</a></p>
	
	<?php else : ?>
	<br />
	<h2>Deixe seu coment&aacute;rio</h2>
	<br />
	<h3>Nome <?php if ($req) echo "*"; ?></h3>
	<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
	<br />
	<br />
	<h3>Email (n&atilde;o ser&aacute; publicado) <?php if ($req) echo "*"; ?></h3>
	<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
	<br />
	<br />
	<h3>Site</h3>
	<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
	
	<?php endif; ?>
	<br />
	<br />
	<h3>Seu coment&aacute;rio:</h3>
	<textarea name="comment" id="comment" cols="70" rows="10" tabindex="4"></textarea>
	<br />
	<input name="submit" type="submit" id="submit" tabindex="5" value="Enviar Coment&aacute;rio" />
	<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
	<?php do_action('comment_form', $post->ID); ?>
	
	</form>
	
	<?php endif; // If registration required and not logged in ?>
	
	<?php endif; // if you delete this the sky will fall on your head ?>

	</div> 

	