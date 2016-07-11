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
$page = 'contacto';
$subpage = '';
$type = 'page';
$template = '';
$title = 'Contacto';
$subpage_title = ' ';
include 'header.php';  ?>
<section class="contact">
    <div class="wrap">
        <div class="content">
            <h1 class="title">Contacto</h1>
        </div><!--.content-->
        <div class="mapa-container">
            <div id="map"></div>
            <div class="contact__direction">
                <img src="img/map-icon.svg" alt="Icono">
                <div class="contact__direction__text">
                    <p class="dark">Limarí <strong>Lighting Design</strong></p>
                    <p>Manuel Montt 1684, Providencia, Santiago de Chile</p>
                </div>
            </div><!--.contact__direction-->
            <a href="#" title="Ver en mapa" class="btn btn--fill mobile-only">Ver en mapa</a>
            <form action="" class="formulario">
                <div class="input-group">
                    <label for="name">Nombre <span>*</span></label>
                    <input type="text" name="name" id="name" required data-validate="Ingresa un nombre valido">
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="input-group">
                    <label for="fono">Fono</label>
                    <input type="text" name="fono" id="fono">
                </div>
                <div class="input-group">
                    <label for="country">País</label>
                    <input type="text" name="country" id="country">
                </div>
                <div class="input-group">
                    <label for="subject">Asunto</label>
                    <input type="text" name="subject" id="subject">
                </div>
                <div class="input-group">
                    <label for="message">Mensaje</label>
                    <textarea name="message" id="message"></textarea>
                </div>
                <div class="send-group">
                   <span><span>*</span> Campos requeridos</span>
                    <input type="submit" class="btn btn--fill" value="Enviar">
                </div>
            </form>
            <div class="message">
                <div class="message__content message--error"><div class="message__text">
                        Mensaje de éxito Pellentesque condimentum sem et dolor faucibus porttitor.
                    </div>
                    <div class="btn btn--fill message--close">Ok</div>
                </div>
            </div><!-- /.message -->
        </div>
    </div><!--.wrap-->
</section><!--.contact-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
    function initialize() {
        //MAPA
        var myLatlng = new google.maps.LatLng(-33.418580, -70.599599);
        var thisLatlng = new google.maps.LatLng(-33.418580, -70.599599);
        var myOptions = {
            zoom: 15, //nivel de zoom
            center: myLatlng,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById("map"), myOptions);
        var marker = new google.maps.Marker({
            position: thisLatlng,
            map: map
        });
        marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<?php include 'footer.php'; ?>