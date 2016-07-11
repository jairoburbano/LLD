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
    <body class="error404">
        <?php include('svg-defs.svg'); ?>
        <div class="content__404">
            <img src="img/logo-full.svg" alt="LLD" class="404__logo">
            <div class="category__404">Error 404</div><!-- /.404__category -->
            <div class="title__404">
                Interdum et malesuada fames ac ante ipsum primis in faucibus
            </div><!-- /.404__title -->
            <div class="text__404">
                <p>
                    Praesent sed consectetur dolor. Quisque bibendum, mi vel varius tempor, orci ipsum mattis lorem, consequat ullamcorper purus orci at dolor. Etiam interdum neque.
                </p>
            </div><!-- /.404__text -->
            <div class="buttons__404">
                <a href="#" title="Volver al inicio" class="btn btn--fill">Volver al inicio</a>
                <a href="#" title="Buscar" class="btn btn--fill js-search">Buscar</a>
            </div><!-- /.404__buttons -->
        </div><!-- /.404__content -->
        <?php include 'footer.php'; ?>