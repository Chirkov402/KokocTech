<?php

$itemRent = array(
    1 => array(
        'img' => '<img src="../assets/img/photo1.jpg" alt="" title="">'
    ),
    2 => array(
        'img' => '<img src="../assets/img/photo2.jpg" alt="" title="">'
    ),
    3 => array(
        'img' => '<img src="../assets/img/photo3.jpg" alt="" title="">'
    ),
    4 => array(
        'img' => '<img src="../assets/img/photo4.jpg" alt="" title="">'
    ),
    5 => array(
        'img' => '<img src="../assets/img/photo5.jpg" alt="" title="">'
    ),
    6 => array(
        'img' => '<img src="../assets/img/photo6.jpg" alt="" title="">'
    )
    );

    foreach ($itemRent as $key => $value){
?>




<div class="photogallery-nav-item">
                <div class="photogallery-nav-img"><?= $value['img']?></div>
              </div>
              

<?php }?>
