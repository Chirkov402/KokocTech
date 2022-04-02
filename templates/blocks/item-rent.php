<?php

$itemRent = array(
    1 => array(
        'title' => 'Блок контейнер 2,5 х 6 м',
        'price' => '7000',
        'text1' => 'Наружная обшивка:',
        'text2' => 'металлический каркас оцинкованный профнастил С-8',
        'text3' => 'Внутренняя отделка:',
        'text4' => 'ДВП утепление 50 мм электрика'
    ),
    2 => array(
        'title' => 'Блок контейнер 2,5 х 6 м',
        'price' => '7000',
        'text1' => 'Наружная обшивка:',
        'text2' => 'металлический каркас оцинкованный профнастил С-8',
        'text3' => 'Внутренняя отделка:',
        'text4' => 'пластик, деревянная вагонка утепление 50 мм электрика'
    ),
    3 => array(
        'title' => 'Бытовка склад 2400 x 6000 см',
        'price' => '6000',
        'text1' => 'Наружная обшивка:',
        'text2' => 'Металлический каркас Наружная обшивка оцинкованный профнастил',
        'text3' => 'Внутренняя отделка:',
        'text4' => 'Стенды ДВП, Электропроводка Освещение Выключатели  Металлическая дверь На выходе автомат 16А Стальные решетки на окнах'
    ),
    4 => array(
        'title' => 'Бытовка склад 2400 x 6000 см',
        'price' => '7000',
        'text1' => 'Наружная обшивка:',
        'text2' => 'Металлический каркас Наружная обшивка оцинкованный профнастил Стенды ДВП Электропроводка Розетки',
        'text3' => 'Внутренняя отделка:',
        'text4' => 'Освещение Выключатели На выходе автомат 16А'
    ),
    5 => array(
        'title' => 'Блок контейнер 2,5 х 6 м',
        'price' => '7000',
        'text1' => 'Наружная обшивка:',
        'text2' => 'металлический каркас оцинкованный профнастил С-8',
        'text3' => 'Внутренняя отделка:',
        'text4' => 'ДВП утепление 50 мм электрика'
    )
    );

    foreach ($itemRent as $key => $value){
?>




<div class="price_item">
        <div class="price_img"><a data-fancybox="price" href="../assets/img/price.jpg" title=""><img src="../assets/img/price.jpg" alt="" title=""><a class="lupa" data-fancybox="price" href="../assets/img/price.jpg"></a></a></div>
        <div class="price_content">
          <div class="price_description">
            <div class="price_title"><?= $value['title']?></div>
            <div class="price_text">
              <div><span><?= $value['text1']?> </span><?= $value['text2']?></div>
              <div><span><?= $value['text3']?> </span><?= $value['text4']?></div>
            </div>
          </div>
          <div class="price_summ"><span><?= $value['price']?></span>Р/мес</div>
        </div>
      </div>
              

<?php }?>
