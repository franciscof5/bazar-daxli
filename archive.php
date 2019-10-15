<?php get_header(); ?>
<?php include (TEMPLATEPATH . '/menu.php'); ?>
	<div class="meio">
		<div id="conteudo">
			<div id="cortina">&nbsp;</div>
			<?php if (have_posts()) : ?>
			<div class="post" id="post-<?php the_ID(); ?>"> 
				<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
				<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2>Arquivos da categoria &#8216;<?php single_cat_title(); ?>&#8217;</h2>
				<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2>Posts marcados &#8216;<?php single_tag_title(); ?>&#8217;</h2>
				<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2>Arquivos de  <?php the_time('F jS, Y'); ?></h2>
				<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2>Arquivos de  <?php the_time('F, Y'); ?></h2>
				<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2>Arquivos de  <?php the_time('Y'); ?></h2>
				<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2>Arquivos do Autor</h2>
				<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2>Arquivos do Blog</h2>
				
				<?php } ?>
				<br /><br />
				<?php while (have_posts()) : the_post(); ?>
						<h1 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Link para <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
						<p><?php the_time('l, F jS, Y') ?></p>
						<?php the_content() ?>
						<p><?php the_tags('Tags: ', ', ', '<br />'); ?> Postado na categoria <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('Sem coment&aacute;rios &#187;', '1 Coment&aacute;rio &#187;', '% Coment&aacute;rios &#187;'); ?></p>
						<br />
						<br />
						<hr />
						<br />
						<br />
				<?php endwhile; ?>
		
				<ul>
					<li><?php next_posts_link('&laquo; Older Entries') ?></li>
					<li><?php previous_posts_link('Newer Entries &raquo;') ?></li>
				</ul>
			</div>
		<?php else : ?>
	
			<h2>Not Found</h2>
			<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	
		<?php endif; ?>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
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
