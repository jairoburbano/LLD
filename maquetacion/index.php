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
$page = 'home';
$subpage = '';
include 'header.php'; ?>
<div class="wrap wrap--index">
    <div class="content">
        <p>
            La luz se nos presenta como la forma fundamental de la presencia. Brindamos escenarios para una búsqueda que permita descubrir o diseñar ideas con ella.
        </p>
    </div><!--.content-->
    <section class="proyectos">
        <div class="block--full js-grid">
            <!--NOTE: No eliminar item--sizer-->
            <div class="item--sizer"></div>
            <!--NOTE: No eliminar item--sizer-->
            <a href="#" item__title="titulo" class="item">
                <span class="item__image">
                    <img src="assets/mc.jpg" alt="Titulo imagen">
                </span><!--.item__image-->
                <span class="item__content">
                    <span class="item__title">Museo Chileno de arte precolombino</span>
                    <span class="categoria">Museografia | 2013</span>
                </span><!--.item__content-->
            </a><!--.item-->
            <a href="single-proyectos.php" item__title="titulo" class="item">
                <span class="item__image">
                    <img src="assets/teatro-lago_1.jpg" alt="Titulo imagen">
                </span><!--.item__image-->
                <span class="item__content">
                    <span class="item__title">Teatro del lago</span>
                    <span class="categoria">Arquitectura | 2010</span>
                </span><!--.item__content-->
            </a><!--.item-->
            <a href="single-proyectos.php" item__title="titulo" class="item">
                <span class="item__image">
                    <img src="assets/rosso_1.jpg" alt="Titulo imagen">
                </span><!--.item__image-->
                <span class="item__content">
                    <span class="item__title">Restaurante rosso italiano</span>
                    <span class="categoria">Arquitectura | 2010</span>
                </span><!--.item__content-->
            </a><!--.item-->
            <a href="single-proyectos.php" item__title="titulo" class="item">
                <span class="item__image">
                    <img src="assets/expo-china.jpg" alt="Titulo imagen">
                </span><!--.item__image-->
                <span class="item__content">
                    <span class="item__title">Expo la antigua china y el ejercito de terracota</span>
                    <span class="categoria">Museografia | 2009</span>
                </span><!--.item__content-->
            </a><!--.item-->
            <a href="single-proyectos.php" item__title="titulo" class="item">
                <span class="item__image">
                    <img src="assets/canete_1.jpg" alt="Titulo imagen">
                </span><!--.item__image-->
                <span class="item__content">
                    <span class="item__title">Museo mapuche cañete</span>
                    <span class="categoria">Museografia | 2010</span>
                </span><!--.item__content-->
            </a><!--.item-->
            <a href="single-proyectos.php" item__title="titulo" class="item">
                <span class="item__image">
                    <img src="assets/memoria_1.jpg" alt="Titulo imagen">
                </span><!--.item__image-->
                <span class="item__content">
                    <span class="item__title">Museo de la memoria de los derechos humanos</span>
                    <span class="categoria">Museografia | 2010</span>
                </span><!--.item__content-->
            </a><!--.item-->
        </div><!--.block--full-->
    </section><!--.proyetos-->
    <section class="noticia">
        <h2 class="sub-title">Noticia destacada</h2>
        <div class="item__news">
            <div class="item__news__image">
                <img src="assets/single_blog_01.jpg" alt="Titulo">
            </div><!--.item__news__image-->
            <div class="item__news__text">
                <p class="item__news__date">
                    <a href="#" item__title="Museografia" class="item__news__category">Museografía</a>
                    <span>| 3 de junio, 2015</span>
                </p>
                <h3 class="item__news__title">Museo precolombino es reconocido y premiado internacionalmente</h3>
                <div class="item__news__content">
                    <p>
                        Durante el EILD 2014 (Encuentro Iberoamericano de Lighting Design) llevado a cabo en Medellín, Colombia, el Museo Chileno de Arte Precolombino recibió el premio ILUMINET de mejor iluminación interior y, en abril 2015 recibió un Award of Merit de la IES (Illuminating engineering Society)
                    </p>
                </div><!--.item__news__content-->
                <a href="#" item__title="Seguir leyendo" class="btn btn--fill">Seguir leyendo</a>
            </div><!--.item__news__text-->
        </div><!--.item__news-->
    </section><!--.noticia-->
</div><!--.wrap-->
<?php include 'footer.php'; ?>