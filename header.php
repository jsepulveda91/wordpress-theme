<!DOCTYPE html>
<html lang="en" dir="ltr">
<head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=devide-width">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="container">

    <header class="site-header">

        <div class="hd-search"><?php get_search_form(); ?></div>

        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>

        <h5><?php bloginfo( 'description' ); ?>
            <?php
                if ( is_page('portfolio') ) { // porfolio es también el post 11
                    echo "- Thank you for visiting portfolio";
                }
            ?>
        </h5>

        <nav class="site-nav">
            <?php $args = array( 'theme_location' => 'primary' ); ?>
            <?php wp_nav_menu( $args ); ?>
        </nav>
    </header>
