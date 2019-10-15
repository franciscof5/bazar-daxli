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
				<div class="entry"> 
				<?php the_content('Leia o restante deste post &#187;'); ?> 
				</div>
				<br />
				<h3>Avalie este post:</h3>
				<?php if(function_exists('the_ratings')) { the_ratings(); } ?>  
				<br> 
				<h3>Arquivo:</h3>
				<div class="descr">
				<?php the_category(', ') ?> 
				<?php edit_post_link('Editar','','<strong>  </strong>'); ?> 
				tendo
				<?php comments_popup_link('Seja o primeiro a deixar seu coment&aacute;rio &#187;', '1 coment&aacute;rio ', '% coment&aacute;rios &#187;'); ?> 
				</div> 
				<br />
				<?php if(function_exists('wp_related_posts')) { wp_related_posts(); } ?>
				<br />
				<br />
				<hr />
				<br />
				<br />
			</div> 
			<br> 
			<br />
			<br />
			<?php comments_template(); ?> 
			<?php endwhile; ?> 
			
			<p align="center"> 
			<?php next_posts_link(' Posts Anteriores') ?> 
			<?php previous_posts_link('Pr&oacute;ximos Posts &#187;') ?> 
			</p> 
			<?php else : ?> 
			<h2 align="center">Ops! Nada encontrado!</h2> 
			<p align="center">Desculpe, mas n&atilde;o conseguimos encontrar o que voc&ecirc; solicitou. Tem certeza que est&aacute; no nosso site? </p> 
			<?php endif; ?> 
		</div> 

		<div id="sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
	<br class="dirtyLittleTrick" />
<?php get_footer(); ?> 