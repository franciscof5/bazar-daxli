<?php get_header(); ?>
<?php include (TEMPLATEPATH . '/menu.php'); ?>
	<div class="meio">
		<div id="conteudo">
			<div id="cortina">&nbsp;</div>
			<?php if (have_posts()) : ?> 
			<?php while (have_posts()) : the_post(); ?> 
			<div class="post" id="post-<?php the_ID(); ?>"> 
				<h1 class="post-titulo"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h1>
				<div class="blog_details">
					<?php /*if(function_exists('cmd_show_avatar')){ cmd_show_avatar(); }  
					<h3> Postado por: <strong> <?php the_author() ?> </strong></h3> */?>
				</div> 
				<br /> 
				<div class="entry"> 
					<?php the_content('Leia o restante deste post &#187;'); ?> 
					
				</div>
				<br /><br /><br /><br />
				<hr />
				<br /><br />.
			</div> 
			<br /><br /><br />
			
			
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