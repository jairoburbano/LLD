<?php
/**
 * Archivo principal.
 *
 * Aquí se muestra todo lo que se ve en la portada de la página
 *
 * @package		lld
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 */
$page = 'blog';
$subpage = '';
$type = 'page';
$template = '';
$title = 'Blog';
$subpage_title = ' ';
include 'header.php'; ?>
<div class="wrap blog">
    <div class="content">
        <h1 class="title">Blog</h1>
    </div><!--.content-->
    <div class="style-select">
        <select onChange="window.location.href=this.value" class="select-filtros">
            <option value="http://google.com">Todos</option>
            <option value="linkhere">Muesografía</option>
            <option value="linkhere">Escénica</option>
            <option value="linkhere">Paisajismo</option>
            <option value="linkhere">Arquitectura</option>
        </select>
    </div>
    <ul class="filtros brackets show js-filter">
        <li>
            <a href="single-proyectos.php" title="Todos">Todos</a>
        </li>
        <li>
            <a href="single-proyectos.php" title="Muesografía">Muesografía</a>
        </li>
        <li>
            <a href="single-proyectos.php" title="Escénica">Escénica</a>
        </li>
        <li>
            <a href="single-proyectos.php" title="Paisajismo">Paisajismo</a>
        </li>
        <li>
            <a href="single-proyectos.php" title="Arquitectura">Arquitectura</a>
        </li>
    </ul>
    <section class="noticia">
        <div class="item__news">
            <div class="item__news__image">
                <div class="video">
                    <svg><use xlink:href="#shape-icon-video" /></svg>
                </div><!-- /.video -->
                <img src="assets/single_blog_01.jpg" alt="Titulo">
            </div><!--.item__news__image-->
            <div class="item__news__text">
                <p class="item__news__date">
                    <a href="single-blog.php" title="Museografia" class="item__news__category">Museografía</a>
                    <span>| 3 de junio, 2015</span>
                </p>
                <h3 class="item__news__title"><a href="#">Museo precolombino es reconocido y premiado internacionalmente</a></h3>
                <div class="item__news__content">
                    <p>
                        Durante el EILD 2014 (Encuentro Iberoamericano de Lighting Design) llevado a cabo en Medellín, Colombia, el Museo Chileno de Arte Precolombino recibió el premio ILUMINET de mejor iluminación interior y, en abril 2015 recibió un Award of Merit de la IES (Illuminating engineering Society)
                    </p>
                </div><!--.item__news__content-->
                <a href="single-blog.php" title="Seguir leyendo" class="btn btn--fill">Seguir leyendo</a>
            </div><!--.item__news__text-->
        </div><!--.item__news-->
    </section><!--.noticia-->
    <section class="masonry js-blog">
        <div class="item__news">
            <div class="item__news__image">
                <img src="assets/single_blog_01.jpg" alt="Titulo">
            </div><!--.item__news__image-->
            <div class="item__news__text">
                <p class="item__news__date">
                    <a href="single-blog.php" title="Museografia" class="item__news__category">Museografía</a>
                    <span>| 3 de junio, 2015</span>
                </p>
                <h3 class="item__news__title">Mauris eget mauris vel tortor maximus laoreet consectetur at est</h3>
                <div class="item__news__content">
                    <p>
                        Vestibulum lacinia imperdiet massa a vestibulum. Aliquam et nulla at elit consequat mollis non id diam.
                    </p>
                </div><!--.item__news__content-->
                <a href="single-blog.php" title="Seguir leyendo" class="btn btn--fill">Seguir leyendo</a>
            </div><!--.item__news__text-->
        </div><!--.item__news-->
        <div class="item__news">
            <div class="item__news__image">
                <img src="assets/single_blog_01.jpg" alt="Titulo">
            </div><!--.item__news__image-->
            <div class="item__news__text">
                <p class="item__news__date">
                    <a href="single-blog.php" title="Museografia" class="item__news__category">Museografía</a>
                    <span>| 3 de junio, 2015</span>
                </p>
                <h3 class="item__news__title">Praesent tempus velit enim, aliquam pretium</h3>
                <div class="item__news__content">
                    <p>
                        Durante el EILD 2014 (Encuentro Iberoamericano de Lighting Design) llevado a cabo en Medellín, Colombia, el Museo Chileno de Arte Precolombino recibió el premio ILUMINET de mejor iluminación interior y, en abril 2015 recibió un Award of Merit de la IES (Illuminating engineering Society)
                    </p>
                </div><!--.item__news__content-->
                <a href="single-blog.php" title="Seguir leyendo" class="btn btn--fill">Seguir leyendo</a>
            </div><!--.item__news__text-->
        </div><!--.item__news-->
        <div class="item__news">
            <div class="item__news__image">
                <img src="assets/single_blog_01.jpg" alt="Titulo">
            </div><!--.item__news__image-->
            <div class="item__news__text">
                <p class="item__news__date">
                    <a href="single-blog.php" title="Museografia" class="item__news__category">Museografía</a>
                    <span>| 3 de junio, 2015</span>
                </p>
                <h3 class="item__news__title">Sed at rutrum augue. Donec ultrices ipsum quis pulvinar ornare</h3>
                <div class="item__news__content">
                    <p>
                        Durante el EILD 2014 (Encuentro Iberoamericano de Lighting Design) llevado a cabo en Medellín, Colombia, el Museo Chileno de Arte Precolombino recibió el premio ILUMINET de mejor iluminación interior y, en abril 2015 recibió un Award of Merit de la IES (Illuminating engineering Society)
                    </p>
                </div><!--.item__news__content-->
                <a href="single-blog.php" title="Seguir leyendo" class="btn btn--fill">Seguir leyendo</a>
            </div><!--.item__news__text-->
        </div><!--.item__news-->
        <div class="item__news">
            <div class="item__news__image">
                <img src="assets/single_blog_01.jpg" alt="Titulo">
                <div class="video">
                    <svg><use xlink:href="#shape-icon-video" /></svg>
                </div><!-- /.video -->
            </div><!--.item__news__image-->
            <div class="item__news__text">
                <p class="item__news__date">
                    <a href="single-blog.php" title="Museografia" class="item__news__category">Museografía</a>
                    <span>| 3 de junio, 2015</span>
                </p>
                <h3 class="item__news__title"><a href="#">Sed non mattis ante. Cras convallis lacinia dolor</a></h3>
                <div class="item__news__content">
                    <p>
                        Durante el EILD 2014 (Encuentro Iberoamericano de Lighting Design) llevado a cabo en Medellín, Colombia, el Museo Chileno de Arte Precolombino recibió el premio ILUMINET de mejor iluminación interior y, en abril 2015 recibió un Award of Merit de la IES (Illuminating engineering Society)
                    </p>
                </div><!--.item__news__content-->
                <a href="single-blog.php" title="Seguir leyendo" class="btn btn--fill">Seguir leyendo</a>
            </div><!--.item__news__text-->
        </div><!--.item__news-->
        <div class="item__news">
            <div class="item__news__image">
                <img src="assets/single_blog_01.jpg" alt="Titulo">
            </div><!--.item__news__image-->
            <div class="item__news__text">
                <p class="item__news__date">
                    <a href="single-blog.php" title="Museografia" class="item__news__category">Museografía</a>
                    <span>| 3 de junio, 2015</span>
                </p>
                <h3 class="item__news__title">Phasellus finibus elit massa, a bibendum nisl dignissim semper</h3>
                <div class="item__news__content">
                    <p>
                        Durante el EILD 2014 (Encuentro Iberoamericano de Lighting Design) llevado a cabo en Medellín, Colombia, el Museo Chileno de Arte Precolombino recibió el premio ILUMINET de mejor iluminación interior y, en abril 2015 recibió un Award of Merit de la IES (Illuminating engineering Society)
                    </p>
                </div><!--.item__news__content-->
                <a href="single-blog.php" title="Seguir leyendo" class="btn btn--fill">Seguir leyendo</a>
            </div><!--.item__news__text-->
        </div><!--.item__news-->
        <div class="item__news">
            <div class="item__news__image">
                <img src="assets/single_blog_01.jpg" alt="Titulo">
            </div><!--.item__news__image-->
            <div class="item__news__text">
                <p class="item__news__date">
                    <a href="single-blog.php" title="Museografia" class="item__news__category">Museografía</a>
                    <span>| 3 de junio, 2015</span>
                </p>
                <h3 class="item__news__title">Donec dapibus lorem a aliquam aliquam</h3>
                <div class="item__news__content">
                    <p>
                        Durante el EILD 2014 (Encuentro Iberoamericano de Lighting Design) llevado a cabo en Medellín, Colombia, el Museo Chileno de Arte Precolombino recibió el premio ILUMINET de mejor iluminación interior y, en abril 2015 recibió un Award of Merit de la IES (Illuminating engineering Society)
                    </p>
                </div><!--.item__news__content-->
                <a href="single-blog.php" title="Seguir leyendo" class="btn btn--fill">Seguir leyendo</a>
            </div><!--.item__news__text-->
        </div><!--.item__news-->
    </section><!--.masonry-->
    <a href="single-blog.php" title="Cargar mas" class="btn btn--fill btn--main">Cargar más</a>
</div><!--.wrap-->
<?php include 'footer.php'; ?>