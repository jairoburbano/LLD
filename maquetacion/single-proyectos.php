<?php
/**
 * template-{Valor}.php
 *
 *
 * @package		lld
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 *
 */
$page = 'proyectos';
$subpage = 'single';
$type = 'single';
$template = '';
$title = 'Single';
$subpage_title = ' ';
include 'header.php';  ?>
<section class="single single--proyecto">
    <div class="wrap">
        <div class="content">
            <div class="single__category"><a href="#" title="Museografia">Museografía</a> | 2013</div><!-- /.single__category -->
            <h1 class="title title--single">Museo Chileno de Arte Precolombino</h1>
        </div><!--.content-->
    </div><!--.wrap-->
    <div class="slider js-slider">
        <ul class="slides">
            <li style="background-image: url(assets/mc.jpg);"></li>
            <li style="background-image: url(assets/mc.jpg);"></li>
            <li style="background-image: url(assets/mc.jpg);"></li>
            <li style="background-image: url(assets/mc.jpg);"></li>
        </ul><!--.slides-->
        <div class="gallery__controls__content">
            <div class="gallery__number">
                <span class="current-slide"></span>
                <span>/</span>
                <span class="total-slides"></span>
            </div>
            <div class="custom-controls-container"></div>
        </div><!--.gallery__controls__content-->
    </div><!--.slider-->
    <div class="wrap">
        <div class="description">
            <div class="description__item">
                <h2 class="description__title">Ubicación / Año</h2>
                <p>Santiago, 2013</p>
            </div><!--.description__item-->
            <div class="description__item">
                <h2 class="description__title">Arquitectura</h2>
                <p>Smiljan Radic</p>
            </div><!--.description__item-->
            <div class="description__item">
                <h2 class="description__title">Museografía / Producción</h2>
                <p>Geoffrey Pisckup, Sumo</p>
            </div><!--.description__item-->
            <div class="description__item">
                <h2 class="description__title">Instrumentos</h2>
                <p>Erco, Bega, Iguzzini, Lamp, Trilux, Artemide, Leds-C4, Lutron</p>
            </div><!--.description__item-->
            <div class="description__item">
                <h2 class="description__title">Fotos</h2>
                <p>Aryeh Kornfeld</p>
            </div><!--.description__item-->
            <div class="description__item">
                <h2 class="description__title">Premios</h2>
                <p>
                    Iluminet 2014
                </p>
                <p>
                    Award of Merit IES 2015
                </p>
                <p>
                    Premios Lamp 2015
                </p>
            </div><!--.description__item-->
        </div><!--.description-->
    </div><!--.wrap-->
    <div class="share--box">
        <p class="share--text">Comparte este proyecto</p>
        <ul class="share brackets show">
            <li>
                <a href="#" title="Comparte en facebook">
                    <svg><use xlink:href="#shape-icon-facebook" /></svg>
                </a>
            </li>
            <li>
                <a href="#" title="Comparte en Twitter">
                    <svg><use xlink:href="#shape-icon-twitter" /></svg>
                </a>
            </li>
            <li>
                <a href="#" title="Comparte en Mail">
                    <svg><use xlink:href="#shape-icon-mail" /></svg>
                </a>
            </li>
            <li>
                <a href="#" title="Comparte en google plus">
                    <svg><use xlink:href="#shape-icon-googleplus" /></svg>
                </a>
            </li>
            <li>
                <a href="#" title="Comparte en Pinterest">
                    <svg><use xlink:href="#shape-icon-pinterest" /></svg>
                </a>
            </li>
            <li class="mobile-only">
                <a href="#" title="Comparte en whatsapp">
                    <svg><use xlink:href="#shape-icon-whatsapp" /></svg>
                </a>
            </li>
        </ul>
    </div><!-- /.share--box -->
    <div class="related">
        <div class="wrap">
            <h2 class="sub-title">Proyectos relacionados</h2>
            <div class="related__content">
                <a href="#" title="Titulo" class="related__item">
                    <span class="related__image">
                        <img src="assets/canete_1.jpg" alt="Titulo">
                    </span><!--.related__image-->
                    <span class="related__text">
                        <span class="related__title">Museo Mapuche Cañete</span>
                        <span>Museografia | 2010</span>
                    </span><!--.related__text-->
                </a><!--.related__item-->
                <a href="#" title="Titulo" class="related__item">
                    <span class="related__image">
                        <img src="assets/memoria_1.jpg" alt="Titulo">
                    </span><!--.related__image-->
                    <span class="related__text">
                        <span class="related__title">Museo de la Memoria y los Derechos Humanos</span>
                        <span>Museografia | 2010</span>
                    </span><!--.related__text-->
                </a><!--.related__item-->
                <a href="#" title="Titulo" class="related__item">
                    <span class="related__image">
                        <img src="assets/teatro-lago_1.jpg" alt="Titulo">
                    </span><!--.related__image-->
                    <span class="related__text">
                        <span class="related__title">Teatro del Lago</span>
                        <span>Arquitectura | 2010</span>
                    </span><!--.related__text-->
                </a><!--.related__item-->
                <a href="#" title="Titulo" class="related__item">
                    <span class="related__image">
                        <img src="assets/rosso_1.jpg" alt="Titulo">
                    </span><!--.related__image-->
                    <span class="related__text">
                        <span class="related__title">Restaurante Rosso italiano</span>
                        <span>Arquitectura | 2010</span>
                    </span><!--.related__text-->
                </a><!--.related__item-->
            </div><!--.related__content-->
        </div><!--.wrap-->
    </div><!--.related-->
</section><!--.proyetos-->
<?php include 'footer.php'; ?>