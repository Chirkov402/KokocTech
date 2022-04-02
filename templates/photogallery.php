<!DOCTYPE html>
<html lang="ru">
<?php

include_once('./templates/blocks/head.php');

?>

<body>

<?

include_once('./templates/blocks/header.php');
include_once('./templates/blocks/mobile-menu.php');

?>

    <main>
      <div class="content">
        <div class="grid-container">
          <ul class="breadcrumbs">
            <li><a href="/index.php">Главная</a></li>
            <li><span>Фотогалерея</span></li>
          </ul>
        </div>
        <?php
        include_once('./templates/blocks/main-h1.php');
        ?>
        <div class="photogallery">
          <div class="grid-container">
            <div class="photogallery-for slider-dots">
              <?php 
              
              include_once('./templates/blocks/photogallery-slider.php');

              ?>

            </div>
            <div class="photogallery-nav">
              <?php 
              
              include_once('./templates/blocks/photogallery-photo.php');
              
              ?>
            </div>
          </div>
        </div>
        <?php
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