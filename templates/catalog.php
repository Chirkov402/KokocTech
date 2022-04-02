<!DOCTYPE html>
<html lang="ru">
<?php

include_once('./templates/blocks/head.php');

?>

<body>

<?

include_once('./templates/blocks/header.php');
include_once('./templates/blocks/mobile-menu.php');

// include_once($_SERVER['DOCUMENT_ROOT'] . '/src/config.php');
?>

    <main>
      <div class="content">
        <div class="grid-container">
          <ul class="breadcrumbs">
            <li><a href="#">Главная</a></li>
            <li><span>Аренда бытовки</span></li>
          </ul>
        </div>
        <?php
        include_once('./templates/blocks/main-h1.php');
        ?>
        <div class="preview_bytovka-wrapper">
          <div class="grid-container">
<?php

include_once('./templates/blocks/item-full.php');

?>
            <div class="grid-x">
              <div class="preview_bytovka-more"><span class="btn_blue">Показать еще</span></div>
            </div>
          </div>
        </div>
<?php

include_once('./templates/blocks/calculator.php');

?>
        <div class="main_photogallery">
          <div class="grid-container">
            <div class="main_photogallery-heading heading">Фотогалерея</div>
            <div class="main_photogallery-slider slider-arrows slider-dots">
            <?php

            include_once('./templates/blocks/main-photogallery.php'); 

            ?>
            </div>
          </div>
        </div>
<?php



include_once('./templates/blocks/order-form.php');
include_once('./templates/blocks/main-article.php');
?>


      </div>
    </main>
<?php

include_once('./templates/blocks/site-footer.php');

?>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="/assets/js/foundation.min.js"></script>
    <script src="/assets/js/slick.min.js"></script>
    <script src="/assets/js/jquery.fancybox.min.js"></script>
    <script src="/assets/js/jquery.mask.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script async src="/assets/js/main.js"></script>

<?php

include_once('./templates/blocks/popur-order.php');

?>
  </body>
</html>