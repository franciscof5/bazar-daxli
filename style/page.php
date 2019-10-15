<?php get_header(); ?>
<?php include (TEMPLATEPATH . '/menu.php'); ?>
	<div class="meio">
		<div id="conteudo">
			<div id="cortina">&nbsp;</div>
			<?php if (have_posts()) : ?> 
			<?php while (have_posts()) : the_post(); ?> 
			<div class="post" id="post-<?php the_ID(); ?>"> 
				<h3><?php the_time("l, j");?> de <?php the_time("F");?> de <?php the_time("Y");?></h3>
				<h1 class="post-titulo"><?php the_title(); ?></h1>
				<div class="blog_details">
					<?php /*if(function_exists('cmd_show_avatar')){ cmd_show_avatar(); }  
					<h3> Postado por: <strong> <?php the_author() ?> </strong></h3> */?>
				</div> 
				<br> 
				<br> 
				<br> 
				<br> 
				<div class="entry"> 
				<?php the_content('Leia o restante deste post &#187;'); ?> 
				</div> 
				<br> 
				<br> 
				<?php wp_related_posts(); ?>
				<div class="descr">Arquivado na categoria
				<?php the_category(', ') ?> 
				<strong></strong> 
				<?php edit_post_link('Editar','','<strong>  </strong>'); ?> 
				tendo
				<?php comments_popup_link('Seja o primeiro a deixar seu coment&aacute;rio &#187;', '1 coment&aacute;rio ', '% coment&aacute;rios &#187;'); ?> 
				</div> 
				<hr />
				<br />
				<br />
				<br />
			</div> 
			<br> 
			<br> 
			<br> 
			<?php comments_template(); ?> 
			<?php endwhile; ?> 
			<p align="center"> 
			<?php next_posts_link(' Posts Anteriores') ?> 
			<?php previous_posts_link('Pr&oacute;ximos Posts &#187;') ?> 
			</p> 
			<?php else : ?> 
			<h2 align="center">Ops! Nada encontrado!</h2> 
			<p align="center">Desculpe, mas n&atilde;o conseguimos encontrar o que voc&ecirc; solicitou. Tem certeza que est&aacute; no sosso site? </p> 
			<?php endif; ?> 
		</div> 

		<div id="sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
	<br class="dirtyLittleTrick" />
<?php get_footer(); ?> 
<?php /*get_header(); ?>
	<div class="meio">
		<div id="conteudo">
		<div id="cortina">&nbsp;</div>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<h3><?php the_time("l, j");?> de <?php the_time("F");?> de <?php the_time("Y");?></h3>
				<h1><?php the_title(); ?></h1>
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<hr />
			</div>
			<?php endwhile; endif; ?>
		<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
		</div>

		<div id="sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); */?>