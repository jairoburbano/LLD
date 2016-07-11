<?php
include 'functions.php';
/**
 * Cabacera de la Página
 *
 * Nuestra todo el contenido hasta <body>
 *
 * @package		lld
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 */
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr.js"></script>
    </head>
    <body <?php body_class(); ?>>
        <?php include('svg-defs.svg'); ?>
        <div class="fix__footer">
            <header class="header">
                <div class="menu--top block--flex">
                    <a href="index.php" title="LLD" class="logo">
                        <img src="img/logo.svg" alt="LLD" class="mobile-only">
                        <img src="img/logo-full.svg" alt="LLD" class="no-mobile">
                    </a>
                    <div class="menu--mobile">
                        <p class="menu__button js-menu brackets show"><span></span></p>
                    </div><!--.menu--mobile-->
                    <form action="" class="search js-search">
                        <div class="send-group">
                            <svg><use xlink:href="#shape-search" /></svg>
                        </div><!--.send-group-->
                    </form><!--.search-->
                </div><!--.menu--top-->
                <div class="menu--slide js-slide">
                    <ul class="nav">
                        <li>
                            <a href="page-proyectos.php" title="Proyectos" class="brackets <?php if ( $page == 'proyectos' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Proyectos</a>
                        </li>
                        <li>
                            <a href="page-nosotros.php" title="Nosotros" class="brackets <?php if ( $page == 'nosotros' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Nosotros</a>
                        </li>
                        <li>
                            <a href="page-que-hacemos.php" title="Qué hacemos" class="brackets <?php if ( $page == 'hacemos' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Qué hacemos</a>
                        </li>
                        <li>
                            <a href="page-blog.php" title="Blog" class="brackets <?php if ( $page == 'blog' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Blog</a>
                        </li>
                        <li>
                            <a href="page-contacto.php" title="Contacto" class="brackets <?php if ( $page == 'contacto' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Contacto</a>
                        </li>
                    </ul><!--.nav-->
                    <ul class="language">
                        <li>
                            <a href="#" title="English" class="brackets">En</a>
                        </li>
                        <li>
                            <a href="#" title="Portugues" class="brackets">Pt</a>
                        </li>
                        <li>
                            <a href="#" title="Español" class="brackets active">Es</a>
                        </li>
                    </ul><!--.language-->
                </div><!--.menu--slide-->
            </header>
