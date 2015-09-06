<!doctype html>
<html>
<head><title>Framework</title>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/grid.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/content.css">
<script src="/js/custom.js"></script>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>
<body class="<?php body_class(); ?>">
<div class="wrapper">
	<header class="banner" role="banner">
		<div class="container clearfix">
			<div class="logo left">
				<h1 class="site-title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
			</div>
			<button class="btn btn primary" id="nav-btn"></button>
			<div id="nav-mobile" class="nagigation" role="navigation">
				<nav>
					<ul class="navbar">
						<?php wp_list_pages('title_li='); ?>
					</ul>
				</nav>
			</div>
			<div id="nav" class="nagigation left" role="navigation">
				<nav>
					<ul class="navbar">
						<?php wp_list_pages('title_li='); ?>
					</ul>
				</nav>
			</div>

			<div class="header-contact right">
				<span class="phone">Call <a href="tel:8008888484">800-888-8484</a></span>
			</div>

		</div>


	</header>