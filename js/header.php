<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
<?php wp_head() // For plugins ?>
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700&v2' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Merriweather&v2' rel='stylesheet' type='text/css' />
        
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.lightbox-0.5.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/foutbgone.js" type="text/javascript"></script>;
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/ui.js"></script>	
</head>

<body class="<?php sandbox_body_class() ?>">

<div id="wrapper" class="hfeed">

	<div id="header">
            <div id="header-content">
                <h1 id="blog-title">
                    <span>
                        <a href="<?php bloginfo('home') ?>/" title="<?php echo wp_specialchars( get_bloginfo('name'), 1 ) ?>" rel="home"><?php bloginfo('name') ?></a>
                    </span>
                    <span class="loc">
                        /<?php sandbox_show_loc(); ?>
                    </span>
                </h1>
                <div id="blog-description"><?php bloginfo('description') ?></div>
                <div id="nav">
                    <form id="searchform" class="blog-search" method="get" action="<?php bloginfo('home') ?>">
                        <div>
                                <input id="s" name="s" type="text" class="text" size="10" tabindex="1" value="<?php the_search_query() ?>" />
                                <input type="submit" class="button" value="<?php _e( 'Find', 'sandbox' ) ?>" tabindex="2" />
                        </div>
                    </form>
                    <ul>
                        <li><a href="http://jasonpriem.com" class="home">home</a></li>
                        <li><a href="http://jasonpriem.com/blog" class="blog">blog</a></li>
                        <li><a href="http://jasonpriem.com/cv" class="cv">cv</a></li>
                        <li><a href="mailto:jason@jasonpriem.com">email</a></li>
                        <li><a href="http://www.twitter.com/jasonpriem">twitter</a></li>
                    </ul>
                </div>
            </div>
                           
        <div id="header-shadow"></div>
	</div><!--  #header -->

	<!--<div id="access">
		<div class="skip-link"><a href="#content" title="<?php _e( 'Skip to content', 'sandbox' ) ?>"><?php _e( 'Skip to content', 'sandbox' ) ?></a></div>
		<?php sandbox_globalnav() ?>-->
	</div><!-- #access -->
