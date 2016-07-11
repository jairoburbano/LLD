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
$subpage = '';
$type = 'page';
$template = '';
$title = 'Proyectos';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="wrap wrap--index projects">
    <div class="content">
        <h1 class="title">Proyectos</h1>
    </div><!--.content-->
    <div class="style-select">
        <select onChange="window.location.href=this.value" class="select-filtros">
            <option value="http://google.com">Todos</option>
            <option value="linkhere">Museografía</option>
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
    <section class="proyectos inside">
        <div class="block--full js-grid">
            <!--NOTE: No eliminar item--sizer-->
            <div class="item--sizer"></div>
            <!--NOTE: No eliminar item--sizer-->
            <a href="single-proyectos.php" title="titulo" class="item">
                <span class="item__image">
                    <img src="assets/mc.jpg" alt="Titulo imagen">
                </span><!--.item__image-->
                <span class="item__content">
                    <span class="item__title">Museo Chileno de arte precolombino</span>
                    <span class="categoria">Museografia | 2013</span>
                </span><!--.item__content-->
            </a><!--.item-->
            <a href="single-proyectos.php" title="titulo" class="item">
                <span class="item__image">
                    <img src="assets/teatro-lago_1.jpg" alt="Titulo imagen">
                </span><!--.item__image-->
                <span class="item__content">
                    <span class="item__title">Teatro del lago</span>
                    <span class="categoria">Arquitectura | 2010</span>
                </span><!--.item__content-->
            </a><!--.item-->
            <a href="single-proyectos.php" title="titulo" class="item">
                <span class="item__image">
                    <img src="assets/rosso_1.jpg" alt="Titulo imagen">
                </span><!--.item__image-->
                <span class="item__content">
                    <span class="item__title">Restaurante rosso italiano</span>
                    <span class="categoria">Arquitectura | 2010</span>
                </span><!--.item__content-->
            </a><!--.item-->
            <a href="single-proyectos.php" title="titulo" class="item">
                <span class="item__image">
                    <img src="assets/expo-china.jpg" alt="Titulo imagen">
                </span><!--.item__image-->
                <span class="item__content">
                    <span class="item__title">Expo la antigua china y el ejercito de terracota</span>
                    <span class="categoria">Museografia | 2009</span>
                </span><!--.item__content-->
            </a><!--.item-->
            <a href="single-proyectos.php" title="titulo" class="item">
                <span class="item__image">
                    <img src="assets/canete_1.jpg" alt="Titulo imagen">
                </span><!--.item__image-->
                <span class="item__content">
                    <span class="item__title">Museo mapuche cañete</span>
                    <span class="categoria">Museografia | 2010</span>
                </span><!--.item__content-->
            </a><!--.item-->
            <a href="single-proyectos.php" title="titulo" class="item">
                <span class="item__image">
                    <img src="assets/memoria_1.jpg" alt="Titulo imagen">
                </span><!--.item__image-->
                <span class="item__content">
                    <span class="item__title">Museo de la memoria de los derechos humanos</span>
                    <span class="categoria">Museografia | 2010</span>
                </span><!--.item__content-->
            </a><!--.item-->
        </div><!--.block--full-->
        <p class="btn btn--fill">Cargar más Proyectos</p>
    </section><!--.proyetos-->
</div><!--.wrap-->
<?php include 'footer.php'; ?>