<?php

	global $meta;
	
	global $homepage;
		   $homepage = get_fields(5);
	global $contact;
		   $contact = get_fields(9);
		   
		
	$options = get_fields('options');

?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?=$meta['title']?></title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
		<meta name="description" content="<?=$meta['description']?>">
		
		<?php if (isset($meta['noindex'])): ?>
			<meta name="robots" content="noindex, nofollow">
		<?php else: ?>
			<meta name="robots" content="index, follow">
		<?php endif; ?>
		
		<?php if (!isset($meta['noindex'])): ?>
			<meta property="og:type" content="article">
			<meta property="og:title" content="<?=$meta['title']?>">
			<meta property="og:site_name" content="Forum Real Estate Income and Impact Fund (REIIF)">
			<meta property="og:url" content="<?=get_site_url(null, $meta['url'])?>">
			<meta property="og:image" content="<?=$meta['image']?>">
			<meta property="og:description" content="<?=$meta['description']?>">
			<meta name="twitter:card" content="summary_large_image">
			<meta name="twitter:site" content="">
			<meta name="twitter:title" content="<?=$meta['title']?>">
			<meta name="twitter:description" content="<?=$meta['description']?>">
			<meta name="twitter:image" content="<?=$meta['image']?>">
		<?php endif; ?>
		
		<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/assets/css/forum.min.css?v2.04">		
	
<? /*
		<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/assets/css/public.css?v2.x.<?=md5(time())?>">
*/ ?>

		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?=get_template_directory_uri()?>/assets/img/favicon/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=get_template_directory_uri()?>/assets/img/favicon/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=get_template_directory_uri()?>/assets/img/favicon/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=get_template_directory_uri()?>/assets/img/favicon/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?=get_template_directory_uri()?>/assets/img/favicon/apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?=get_template_directory_uri()?>/assets/img/favicon/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?=get_template_directory_uri()?>/assets/img/favicon/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?=get_template_directory_uri()?>/assets/img/favicon/apple-touch-icon-152x152.png" />
		<link rel="icon" type="image/png" href="<?=get_template_directory_uri()?>/assets/img/favicon/favicon-196x196.png" sizes="196x196" />
		<link rel="icon" type="image/png" href="<?=get_template_directory_uri()?>/assets/img/favicon/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="<?=get_template_directory_uri()?>/assets/img/favicon/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="<?=get_template_directory_uri()?>/assets/img/favicon/favicon-16x16.png" sizes="16x16" />
		<link rel="icon" type="image/png" href="<?=get_template_directory_uri()?>/assets/img/favicon/favicon-128.png" sizes="128x128" />
		<meta name="application-name" content="&nbsp;"/>
		<meta name="msapplication-TileColor" content="#FFFFFF" />
		<meta name="msapplication-TileImage" content="mstile-144x144.png" />
		<meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
		<meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
		<meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
		<meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
		<link rel="icon" href="<?=get_template_directory_uri()?>/assets/img/favicon/favicon.ico">
		
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fast.fonts.net">
		<link rel="dns-prefetch" href="https://f.vimeocdn.com">
		<link rel="dns-prefetch" href="https://player.vimeo.com">
		<link rel="dns-prefetch" href="https://www.googletagmanager.com">

		<script type="application/ld+json">
		[
			{
			  "@context": "https://schema.org/",
			  "@type": "WebSite",
			  "name": "Forum Real Estate Income and Impact Fund (REIIF)",
			  "url": "<?=get_site_url()?>",
			  "potentialAction": {
				"@type": "SearchAction",
				"target": "{search_term_string}",
				"query-input": "required name=search_term_string"
			  }
			},
			
			{
			  "@context": "https://schema.org",
			  "@type": "Corporation",
			  "name": "Forum Asset Management",
			  "url": "<?=get_site_url()?>",
			  "logo": "<?=get_template_directory_uri()?>/assets/img/logo.jpg",
			  "sameAs": "https://www.linkedin.com/company/forumassetmanagement/"
			}
		]
		</script>
		<!-- Google tag (gtag.js) -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=G-WT6B2QMS3W"></script>
			<script>
			  window.dataLayer = window.dataLayer || [];
			  function gtag(){dataLayer.push(arguments);}
			  gtag('js', new Date());
			
			  gtag('config', 'G-WT6B2QMS3W');
			</script>

		
		<?php wp_head(); ?>
	</head>
	
	<body>
		<main id="main">
			<div data-scroll id="smoothscroll">
				<header controller="global" class="<?=isset($meta['header']) ? $meta['header'] : false?>" smoothscroll="fixed">
					<section id="header" scroll="header" role="banner">
						<div class="container">
							<div id="logo">
								<a href="/" aria-label="Homepage"></a>
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 828.57 228.51" style="enable-background:new 0 0 828.57 228.51" xml:space="preserve"><style>.st0{fill:#010101}</style><path class="st0" d="M0 0v223.81h37.25v-95.16h96.72V96.72H37.25V31.61h116.28V0zM234.33 228.51c-50.08 0-80.44-34.74-80.44-84.51s30.36-84.52 80.44-84.52c50.09 0 80.45 34.75 80.45 84.52 0 49.77-30.36 84.51-80.45 84.51m0-26.92c31.31 0 47.58-24.73 47.58-57.6 0-33.18-16.28-57.6-47.58-57.6-31.3 0-47.58 24.42-47.58 57.6 0 32.87 16.28 57.6 47.58 57.6M422.39 61.04v30.99h-.63c-31.62-5.32-56.97 15.96-56.97 50.08v81.7h-32.87V63.86h32.87V93.9h.62c8.45-20.03 21.6-33.8 42.57-33.8 5.64 0 9.71.31 14.41.94M579.31 63.86v159.96h-32.86v-20.66h-.63c-8.45 12.52-25.04 25.05-52.59 25.05-29.73 0-53.21-17.22-53.21-53.84V63.86h33.18v101.11c0 21.6 9.08 35.37 31.62 35.37 25.36 0 41.64-15.34 41.64-39.13V63.86h32.85zM828.57 113.32v110.5h-33.18V122.71c0-21.6-4.38-35.37-26.92-35.37-22.23 0-36 15.34-36 39.13v97.35h-33.18V122.71c0-21.6-4.38-35.37-27.23-35.37-21.92 0-36 15.34-36 39.13v97.35h-32.87V63.86h32.87v20.66h.62c8.45-12.52 23.48-25.04 47.58-25.04 22.54 0 36 10.33 42.57 27.54h.62c11.9-15.34 27.55-27.54 52.28-27.54 32.25-.01 48.84 19.4 48.84 53.84"/></svg>
							</div>
							
							<div id="header-menu">
								<button type="button" action="menu.open" aria-label="Open Menu"><strong class="small-header">Menu</strong><span></span></button>
							</div>
						</div>
					</section>
					
					<section id="menu" smoothscroll="fixed">
						<div id="menu-container">
							<button type="button" action="menu.close" aria-label="Close Menu"></button>
							<div class="container">							
								<nav id="main-nav" role="navigation">
									<div menu="main" class="active">
										<?php foreach ($options['menu'] as $link): ?>
											<a href="<?=$link['link']['url']?>" target="<?=$link['link']['target']?>" class="menu-item text-reveal words"><?=$link['link']['title']?></a>
										<?php endforeach; ?>
									</div>
								</nav>
								
								<nav id="secondary-nav" class="fade-up fade-up-para-lg" activate="reveal" role="navigation">
									<?php foreach ($options['small_menu'] as $link): ?>
										<a href="<?=$link['link']['url']?>" target="<?=$link['link']['target']?>" class="para sm"><?=$link['link']['title']?></a>
									<?php endforeach; ?>
								</nav>								
							</div>
						</div>
					</section>
				</header>
