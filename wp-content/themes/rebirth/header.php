<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); 
$search_icon = get_theme_mod('core_blog_header_search_icon_display',true);
$menu_sidebar = get_theme_mod('core_blog_header_menu_sidebar_display',true);
?>
<div id="page" class="site is-preload">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'core-blog' ); ?></a>
	<div id="wrapper">
		<!-- Header -->
		<header id="header" class="<?php if(is_user_logged_in() && is_customize_preview()) { ?> core-blog-customizer <?php } if(is_user_logged_in()) { ?>core-blog-header<?php }  ?>"> 
			<div class="logo-burger-head"><img src="/wp-content/themes/rebirth/assets/img/EoTUkraine.svg" alt="logo"></div>
			<nav id="site-navigation" class="core-blog-main-navigation">
				<button class="toggle-button" data-toggle-target=".main-menu-modal" data-toggle-body-class="showing-main-menu-modal" aria-expanded="false" data-set-focus=".close-main-nav-toggle">
				<div class="toggle-text"></div>
					<span class="toggle-bar"></span>
					<span class="toggle-bar"></span>
					<span class="toggle-bar"></span>
				</button>
				<div class="primary-menu-list main-menu-modal cover-modal" data-modal-target-string=".main-menu-modal">
				<button class="close close-main-nav-toggle" data-toggle-target=".main-menu-modal" data-toggle-body-class="showing-main-menu-modal" aria-expanded="false" data-set-focus=".main-menu-modal"></button>
					<div class="header__menu-general">
						<ul>
							<li><a href="#whoWeAre">Who we are</a></li>
							<li><a href="#whatWeDo">What we do</a></li>
						</ul>
						<span><a href="#headTitleSection"></a></span>
						<ul>
							<li><a href="#ourImpact">Our impact</a></li>
							<li><a href="#getInvolved">Get involved</a></li>
						</ul>

					</div>
				
				
				</div>
			</nav>
			
			<?php if($search_icon!='' || $menu_sidebar!=''){?>
			<!-- <nav class="main">
				<ul>
					<?php if($search_icon){ ?>
					<li class="search">
						<a class="fa-search search_f" href="javascript:void(0)"><?php esc_html_e('Search','core-blog');?></a>
						<span class="core-blog-search">
						<?php get_search_form();?>
						</span>
					</li>


					<?php } 
						if($menu_sidebar){
					?>
					<li class="menu">
						<a class="fa-bars focus_search" href="#" data-target="#myModal2"  data-toggle="modal"><?php esc_html_e('Menu','core-blog');?></a>
					</li>
					<?php }?>
				</ul>
			</nav> 
			<?php } ?>
			-->
		</header>

