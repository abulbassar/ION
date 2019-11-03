<?php global $redux_icon;?>
<!DOCTYPE HTML>
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Ion by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<?php wp_head();?>
		
		<style type="text/css">
			#banner {
				background-color: #666666;
				background-image: url(<?php echo $redux_icon['banner']['url'];?>);
				background-size: cover;
				background-position: center center;
				background-repeat: no-repeat;
				color: #d8d8d8;
				padding: 14em 0;
				text-align: center;
				position: relative;
				height:<?php echo $redux_icon['height'];?>px
			}
			.alt .widget-title ul{list-style:npne;}
		</style>
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1><a href="<?php echo esc_url(home_url());?>"><?php echo esc_html($redux_icon['logo']);?></a></h1>
				<nav id="nav">
					<!--<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="left-sidebar.html">Left Sidebar</a></li>
						<li><a href="right-sidebar.html">Right Sidebar</a></li>
						<li><a href="no-sidebar.html">No Sidebar</a></li>
						<li><a href="#" class="button special">Sign Up</a></li>
					</ul>-->
					<?php wp_nav_menu(array(
						'menu'		=>'',
						'container'	=> '<nav>',
						'container_id'	=> 'nav'
					));?>
						
					
				</nav>
				
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h2><?php bloginfo('name');?></h2>
					<p><?php bloginfo('description');?></a></p>
					<ul class="actions">
						<li><a href="#content" class="button big special"><?php echo esc_html($redux_icon['banner_btn1']);?></a></li>
						<li><a href="#elements" class="button big alt"><?php echo esc_html($redux_icon['banner_btn2']);?></a></li>
					</ul>
				</div>
			</section>