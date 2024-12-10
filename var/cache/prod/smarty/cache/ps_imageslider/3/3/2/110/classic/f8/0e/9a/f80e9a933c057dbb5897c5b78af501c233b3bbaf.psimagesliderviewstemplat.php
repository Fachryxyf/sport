<?php
/* Smarty version 4.2.1, created on 2024-12-04 20:18:41
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_675056b188b607_84873293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1666708672,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_675056b188b607_84873293 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Carousel container">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="http://www.prestashop.com/?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-EN&amp;utm_content=download">            <figure>
              <img src="http://localhost/sport/modules/ps_imageslider/images/5f21ed864bace5f85c7909be75befc430d59651c_1.png" alt="" loading="lazy" width="1110" height="340">
                          </figure>
          </a>        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://www.prestashop.com/?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-EN&amp;utm_content=download">            <figure>
              <img src="http://localhost/sport/modules/ps_imageslider/images/cc3f730e079a33fd11556373eb74e9345fb67d9a_2.png" alt="" loading="lazy" width="1110" height="340">
                          </figure>
          </a>        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://www.prestashop.com/?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-EN&amp;utm_content=download">            <figure>
              <img src="http://localhost/sport/modules/ps_imageslider/images/e9a09a1edb5ee0af9932bf645df8d9fa85a54fe3_3.png" alt="" loading="lazy" width="1110" height="340">
                          </figure>
          </a>        </li>
          </ul>
    <div class="direction" aria-label="Tombol korsel">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Sebelumnya">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Berikutnya">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}
