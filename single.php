<?php get_header(); ?>
<?php include (TEMPLATEPATH . '/menu.php'); ?>
<div class="meio">
	<div id="conteudo">
		<div id="cortina">&nbsp;</div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h1><?php the_title(); ?></h1>
			<?php the_content(''); ?>
			<br />
			<h3>Avalie este post:</h3>
			<?php if(function_exists('the_ratings')) { the_ratings(); } ?>  
			<br />
			<?php wp_related_posts(); ?>
			<br />
			<br />
			<hr />
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
			<?php comments_template(); ?>
			<br />
			<br />
			<hr />
			<br />
			<div class="post">
			<br />
			<h2>Mais informa&ccedil;&otilde;es</h2>
			<br />
				Essa entrada foi postada 
				<?php /* This is commented, because it requires a little adjusting sometimes.
					You'll need to download this plugin, and follow the instructions:
					http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
					/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
				<?php the_time("l, j");?> de <?php the_time("F");?> de <?php the_time("Y");?>
				e arquivada na categoria <?php the_category(', ') ?>.
				Voc&ecirc; pode acompanhar modifica&ccedil;&otilde;es assinando nosso 
				<?php post_comments_feed_link('RSS 2.0'); ?> feed.

				<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
					// Both Comments and Pings are open ?>
					Tamb&eacute;m pode <a href="#respond">deixar uma resposta</a> ou um <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> do seu pr&oacute;prio site.

				<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
					// Only Pings are Open ?>
					Respostas est&atilde;o bloqueadas, mas voc&ecirc; pode ter um <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> no seu site.

				<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
					// Comments are open, Pings are not ?>
					Pode ir at&eacute; o final e deixar seu coment&aacute;rio. Pinging n&atilde;o &eacute; permitido.

				<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
					// Neither Comments, nor Pings are open ?>
					Comentários e pings n&atilde;o s&atilde;o permitidos.

				<?php } edit_post_link('Editar esse post','','.'); ?>
				<br />
			</div>
			<?php endwhile; else: ?>
		
				<p>Desculpe mas n&atilde;o encontramos nada relacionado nos posts.</p>
		
		<?php endif; ?>
	<br />
	<br />
	<br />
	<br />
	</div>
	<div id="sidebar">
		<?php get_sidebar(); ?>
	</div>
</div>
<br class="dirtyLittleTrick" />
<?php get_footer(); ?>
