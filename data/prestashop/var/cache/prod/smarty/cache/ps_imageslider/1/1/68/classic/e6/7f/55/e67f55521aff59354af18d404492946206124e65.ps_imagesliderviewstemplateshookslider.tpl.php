<?php
/* Smarty version 4.3.4, created on 2024-06-14 20:57:16
  from 'module:ps_imagesliderviewstemplateshookslider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666ce6ec984896_40993746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:ps_imagesliderviewstemplateshookslider.tpl',
      1 => 1708963242,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_666ce6ec984896_40993746 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Contenedor carrusel ">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="https://www.prestashop-project.org">            <figure>
              <img src="http://35.184.79.241/modules/ps_imageslider/images/d992d4beb7cc141df3ebf78e54d432479f995b4d_sample-1.jpg" alt="Tienda insana" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase"></h2>
                  <div class="caption-description"><h3>La mejor tienda para pasar Administración de Redes</h3>
<p>Compre todo lo necesario para pasar el ramo, los articulos mas insanos.</p></div>
                </figcaption>
                          </figure>
          </a>        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://35.184.79.241/art/4-16-the-adventure-begins-framed-poster.html#/19-dimension-40x60cm">            <figure>
              <img src="http://35.184.79.241/modules/ps_imageslider/images/36a8e1f63c2162c88faa96a5d7cc098e833072d2_sample-3.jpg" alt="Vinilo 2 Shipitia" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Vinilo 2 Shipitia</h2>
                  <div class="caption-description"><h3>Vinilo 2 Shipitia</h3>
<p>Albúm debut de Rene Puente, disco de culto para los amantes de la música.</p></div>
                </figcaption>
                          </figure>
          </a>        </li>
          </ul>
    <div class="direction" aria-label="Botones del carrusel">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Anterior">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Siguiente">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}
