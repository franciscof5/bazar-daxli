<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">
		
		<title>
			<?php if (is_home()) { echo bloginfo('name');
			} elseif (is_404()) {
			echo '404 - Nada encontrado';
			} elseif (is_category()) {
			echo 'Categoria:'; wp_title('');
			} elseif (is_search()) {
			echo 'Resultado da Busca';
			} elseif ( is_day() || is_month() || is_year() ) {
			echo 'Arquivos:'; wp_title('');
			} else {
			echo wp_title('');
			}
			?>
		</title>

	    <meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
		<meta name="description" content="<?php bloginfo('description') ?>" />
		<?php if(is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" /> 
	    <?php }?>
	
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<?php wp_head(); ?>
		<STYLE TYPE="text/css">
		@font-face {
			font-family:Segoe;
			font-style:normal;
			font-weight:normal;
			src:url(style/fonts/SEGOEPR0.eot);
		}
		-->
		</STYLE>

	</head>
<body>

<div id="header">
	<img id="mascote" src="<?php bloginfo('stylesheet_directory'); ?>/style/images/meninas/menina<?php echo rand(1, 4); ?>.png" />
	<a href="/index.php"><img src="<?php bloginfo('stylesheet_directory'); ?>/style/images/logo-bazar-dasli.png" alt="Bazar Dasli (Logotipo)" /></a>
</div>
