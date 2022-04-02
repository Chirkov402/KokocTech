<?php

$itemRent = array(
    1 => array(
        'title' => '',
        'img' => '<img src="../assets/img/bytovka1.png" alt="" title="">'
    ),
    2 => array(
        'title' => 'Компания "Бытовки-Сервис" предлагает взять в аренду бытовку для жилья',
        'img' => '<img src="../assets/img/bytovka2.png" alt="" title="">'
    ),
    3 => array(
        'title' => 'Компания "Бытовки-Сервис" предлагает взять в аренду бытовку пост-охраны',
        'img' => '<img src="../assets/img/bytovka3.png" alt="" title="">'
    ),
    4 => array(
        'title' => 'Компания "Бытовки-Сервис" предлагает взять в аренду бытовку под склад',
        'img' => '<img src="../assets/img/bytovka4.png" alt="" title="">'
    ),
    5 => array(
        'title' => 'Компания "Бытовки-Сервис" предлагает взять в аренду офисную бытовку',
        'img' => '<img src="../assets/img/bytovka5.png" alt="" title="">'
    ),
    6 => array(
        'title' => 'Компания "Бытовки-Сервис" предлагает взять в аренду бытовку-раздевалку',
        'img' => '<img src="../assets/img/bytovka6.png" alt="" title="">'
    )
    );

    foreach ($itemRent as $key => $value){
?>




<div class="main_slider-item"><?php echo $value['img']?>
                <div class="main_slider-substrate">
                  <div class="main_substrate-heading">Строительные бытовки недорого!</div>
                  <div class="main_substrate-description"><?= $value['title']?></div>
                  <div class="main_substrate-button"><a class="btn_pink" href="/rent.php">Заказать<span class="show-for-mobile"> бытовку</span></a></div>
                </div>
</div>

<?php }?>