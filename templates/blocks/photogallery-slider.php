<?php

$itemRent = array(
    1 => array(
        'title' => 'Бытовка-склад',
        'img' => '<a href="../assets/img/photo1.jpg" data-fancybox="photogallery" data-caption="Бытовка-склад" title=""><img src="../assets/img/photo1.jpg" alt="" title=""></a>>'
    ),
    2 => array(
        'title' => 'Фото2',
        'img' => '<a href="../assets/img/photo2.jpg" data-fancybox="photogallery" data-caption="Фото2" title=""><img src="../assets/img/photo2.jpg" alt="" title=""></a>'
    ),
    3 => array(
        'title' => 'Фото3',
        'img' => '<a href="../assets/img/photo3.jpg" data-fancybox="photogallery" data-caption="Фото3" title=""><img src="../assets/img/photo3.jpg" alt="" title=""></a>'
    ),
    4 => array(
        'title' => 'Фото4',
        'img' => '<a href="../assets/img/photo4.jpg" data-fancybox="photogallery" data-caption="Фото4" title=""><img src="../assets/img/photo4.jpg" alt="" title=""></a>'
    ),
    5 => array(
        'title' => 'Фото5',
        'img' => '<a href="../assets/img/photo5.jpg" data-fancybox="photogallery" data-caption="Фото5" title=""><img src="../assets/img/photo5.jpg" alt="" title=""></a>'
    ),
    6 => array(
        'title' => 'Фото6',
        'img' => '<a href="../assets/img/photo6.jpg" data-fancybox="photogallery" data-caption="Фото6" title=""><img src="../assets/img/photo6.jpg" alt="" title=""></a>'
    )
    );

    foreach ($itemRent as $key => $value){
?>




<div class="photogallery-for-item">
                <div class="photogallery-for-img"><?= $value['img']?></div>
                <div class="photogallery-for-caption"><?= $value['title']?></div>
              </div>
              

<?php }?>