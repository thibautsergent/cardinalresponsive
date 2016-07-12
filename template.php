<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			template.php
* @Package:		GetSimple
* @Action:		Cardinal theme for GetSimple CMS
*
*****************************************************/
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>
	<?php get_header(); ?>
	<meta name="robots" content="index, follow" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes" />
	<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/style.css" media="all" />
</head>
<body id="<?php get_page_slug(); ?>" >
	<header>
		<!-- menu -->
		<nav>
			<ul id="nav">
				<?php get_navigation(return_page_slug()); ?>
			</ul>
		</nav>
		<!-- titre site -->
		<span><a href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a></span>
	</header>
	<main>
		<!-- titre page -->
		<h1><?php get_page_title(); ?></h1>
		<!-- contenu -->
		<div id="page-content">
			<?php get_page_content(); ?>
		</div>
	</main>
	<footer>
		<?php get_footer(); ?>
		<div><p>Theme CardinalResponsive</p></div>
	</footer>
</body>
</html>
