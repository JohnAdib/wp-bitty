<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package fabthemes
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
 <meta charset="<?php bloginfo( 'charset' ); ?>">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title><?php wp_title( '|', true, 'right' ); ?></title>
 <meta name="description" content="<?php bloginfo('description'); ?>"/>
 <meta name="site:root" content="<?php bloginfo('url'); ?>"/>
 <meta name="twitter:card" content="summary"/>
 <meta name="twitter:title" content="<?php bloginfo('name'); ?>"/>
 <meta name="twitter:description" content="<?php bloginfo('description'); ?>"/>
 <meta name="twitter:image" content="<?php bloginfo('template_url'); ?>/images/logo.png"/>
 <meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/logo.png"/>
 <meta property="og:url" content="<?php bloginfo('url'); ?>"/>
 <meta property='og:locale' content='fa_IR'/>
 <meta name="msapplication-TileColor" content="#30b28b"/>
 <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png"/>
 <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="body-wrapper">
<div id="page" class="hfeed site">

 <header id="masthead" class="site-header" role="banner">
  <div class="container"> <div class="row">
   <div class="col-md-2 shop">
    <button><a href="/shop" title="فروشگاه بیتی">فروشگاه</a></button>
   </div>
   <div class="col-md-10">
    <div class="top-bar">
     <span>آخرین مطالب</span>
     <div id="ticker-box">
      <div class="ticker">
       <?php $ticker_cat = ft_of_get_option('fabthemes_ticker_cat','1'); ?>
       <?php $ticker_count = ft_of_get_option('fabthemes_ticker_count','3'); ?>
       <?php get_news_ticker($ticker_cat, $ticker_count); ?>
      </div>
     </div>
    </div>
   </div>
   <div class="col-md-6">
    <div class="site-branding">

 <?php if (get_theme_mod(FT_scope::tool()->optionsName . '_logo', '') != '') { ?>
    <h1 class="site-title logo"><a class="mylogo" rel="home" href="<?php bloginfo('siteurl');?>/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><img relWidth="<?php echo intval(get_theme_mod(FT_scope::tool()->optionsName . '_maxWidth', 0)); ?>" relHeight="<?php echo intval(get_theme_mod(FT_scope::tool()->optionsName . '_maxHeight', 0)); ?>" id="ft_logo" src="<?php echo get_theme_mod(FT_scope::tool()->optionsName . '_logo', ''); ?>" alt="" /></a></h1>
 <?php } else { ?>
    <h1 class="site-title logo"><a id="blogname" rel="home" href="<?php bloginfo('siteurl');?>/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
 <?php } ?>

    </div>
   </div>
   <div class="col-md-6">
    <div class="search-right ">
     <?php get_search_form(); ?>
    </div>
   </div>
   <div class="clear"></div>
   <div class="col-md-12">
    <nav id="site-navigation" class="main-navigation" role="navigation">
     <?php wp_nav_menu( array( 'theme_location' => 'primary' ,'menu_id' =>'endolf') ); ?>
    </nav><!-- #site-navigation -->
   </div>
  </div></div>
 </header><!-- #masthead -->

 <div id="content" class="site-content">
  <div class="container"> <div class="row">
