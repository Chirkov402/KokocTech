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
      <div class="main_slider-wrapper">
        <div class="grid-container">
          <div class="grid-x">
            <div class="main_slider">
              <?php 
              
              include_once('./templates/blocks/main-slider.php');
              
              ?>

            </div>
          </div>
        </div>
      </div>
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
      <div class="main_map">
        <div class="grid-container">
          <div class="main_map-heading heading">Мы работаем по Москве и Московской области</div>
          <div class="main_map-wrapper">
            <div class="main_map-body" id="map"></div>
            <script>
              var mapsPoints = [
                                          {
                                              coords: [55.5572, 37.7086],
                                              locationUrl: '/arenda-bytovok-v-vidnom/',
                                          },
                                          {
                                              coords: [55.4255, 38.2641],
                                              locationUrl: '/arenda-bytovok-v-bronnicah/',
                                          },
                                          {
                                              coords: [56.3439, 37.5203],
                                              locationUrl: '/arenda-bytovok-v-dmitrove/',
                                          },
                                          {
                                              coords: [55.5673, 38.2258],
                                              locationUrl: '/arenda-bytovok-v-ramenskom/',
                                          },
                                          {
                                              coords: [55.1499, 37.4670],
                                              locationUrl: '/arenda-bytovok-v-chekhove/',
                                          },
                                          {
                                              coords: [56.3153, 38.1360],
                                              locationUrl: '/arenda-bytovok-v-sergiev-posade/',
                                          },
                                          {
                                              coords: [56.3317, 36.7287],
                                              locationUrl: '/arenda-bytovok-v-klinu/',
                                          },
                                          {
                                              coords: [55.9143, 36.8603],
                                              locationUrl: '/arenda-bytovok-v-istre/',
                                          },
                                          {
                                              coords: [55.4312, 37.5447],
                                              locationUrl: '/arenda-bytovok-v-podolske/',
                                          },
                                          {
                                              coords: [55.4312, 37.5447],
                                              locationUrl: '/arenda-bytovok-v-vidnom/',
                                          },
                                          {
                                              coords: [56.0357, 35.9585],
                                              locationUrl: '/arenda-bytovok-v-volokolamske/',
                                          },
                                          {
                                              coords: [56.0104, 37.8472],
                                              locationUrl: '/arenda-bytovok-v-pushkino/',
                                          },
                                          {
                                              coords: [55.9919, 37.2144],
                                              locationUrl: '/arenda-bytovok-v-zelenograde/',
                                          },
                                          {
                                              coords: [55.7963, 37.9382],
                                              locationUrl: '/arenda-bytovok-v-balashihe/',
                                          },
                                          {
                                              coords: [55.9202, 37.9915],
                                              locationUrl: '/arenda-bytovok-v-shchelkovo/',
                                          },
                                          {
                                              coords: [55.8545, 38.4418],
                                              locationUrl: '/arenda-bytovok-v-noginske/',
                                          },
              
                                      ];
            </script>
            <div class="main_map-links">
              <div class="main_map-links-title">Аренда бытовок в: </div><a href="/arenda-bytovok-v-vidnom/">Видном</a><a href="/arenda-bytovok-v-bronnicah/">Бронницах</a><a href="/arenda-bytovok-v-dmitrove/">Дмитрове</a><a href="/arenda-bytovok-v-ramenskom/">Раменском</a><a href="/arenda-bytovok-v-chekhove/">Чехове</a><a href="/arenda-bytovok-v-sergiev-posade/">Сергиев Посаде</a><a href="/arenda-bytovok-v-klinu/">Клину</a><a href="/arenda-bytovok-v-istre/">Истре</a><a href="/arenda-bytovok-v-podolske/">Подольске</a><a href="/arenda-bytovok-v-vidnom/">Солнечногорске</a><a href="/arenda-bytovok-v-volokolamske/">Волоколамске</a><a href="/arenda-bytovok-v-pushkino/">Пушкино</a><a href="/arenda-bytovok-v-zelenograde/">Зеленограде</a><a href="/arenda-bytovok-v-balashihe/">Балашихе</a><a href="/arenda-bytovok-v-shchelkovo/">Щелково</a><a href="/arenda-bytovok-v-noginske/">Ногинске</a>
            </div>
          </div>
        </div>
      </div>
      <div class="rent_block">
        <div class="grid-container">
          <div class="rent_info">
            <div class="rent_heading">Условия аренды блок-контейнеров с доставкой</div>
            <div class="rent_text">Сдача блок-контейнера в аренду производится после первоначального платежа: доставка + вывоз + 3 месяц аренды. Минимальный срок - 1 месяц.</div>
          </div>
          <div class="grid-x">
            <div class="rent_item entity">
              <div class="rent_item-heading">Для юридических лиц:</div>
              <ul class="characteristic">
                <li>Заявка на электронную почту с указанием типа бытовка; </li>
                <li>Карточка организации; </li>
                <li>Доверенность от организации на получение товарно-материальных ценностей; </li>
                <li>Оплата по безналичному расчету; </li>
                <li>Залог не требуется!</li>
              </ul>
              <div class="rent_icon"></div>
            </div>
            <div class="rent_item individual">
              <div class="rent_item-heading">Для физических лиц:</div>
              <ul class="characteristic">
                <li>Аренда блок - контейнеров без залога;</li>
                <li>Копия паспорта с пропиской Москва или область; </li>
                <li>Оплата по безналичному расчету или наличными.</li>
              </ul>
              <div class="rent_icon"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="tech-characteristics">
        <div class="grid-container">
          <div class="tech-characteristics-heading heading">Технические характеристики бытовок</div>
          <div class="tech-characteristics-wrapper">
            <?php 

            include_once('./templates/blocks/technikal.php');

            ?>

          </div>
          <div class="grid-x">
            <div class="tech-characteristics-link"><span class="btn_blue">Показать еще</span></div>
          </div>
        </div>
      </div>
<?php

include_once('./templates/blocks/calculator.php');

?>
      <div class="advantages">
        <div class="grid-container">
          <div class="advantages_heading heading">Наши преимущества</div>
          <div class="advantages_slider slider-dots">
            <div class="advantages_item">
              <div class="advantages_item-img"><img src="../assets/img/ad1.png" alt="" title=""></div>
              <div class="advantages_item-content">Наша фирма занимается арендой бытовок с 2008 года, поэтому мы знаем что нужно нашему клиенту!</div>
            </div>
            <div class="advantages_item">
              <div class="advantages_item-img"><img src="../assets/img/ad2.png" alt="" title=""></div>
              <div class="advantages_item-content">
                Оплату за аренду
                и доставку бытовки
                можно производить
                по безналичному
                и наличному расчету.
              </div>
            </div>
            <div class="advantages_item">
              <div class="advantages_item-img"><img src="../assets/img/ad3.png" alt="" title=""></div>
              <div class="advantages_item-content">Для постоянных клиентов у нас действует гибкая система скидок как по аренде бытовки так и по доставке и вывоза её на склад.</div>
            </div>
          </div>
        </div>
      </div>
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
      <div class="price">
        <div class="grid-container">
          <div class="price_heading">
            <div class="heading">Цены на аренду блок-контейнеров</div>
            <div class="link-more"><a href="/czenyi/">Перейти в раздел</a></div>
          </div>
          <div class="price_wrapper">
          <?php

            $itemsRent = $database['item'];
            foreach($itemsRent as $key => $value){
              $itemTitle = $value['title'];
              $itemPrice = $value['price'];
              include_once('./templates/blocks/item-rent.php');
            }

          ?>
          </div>
          <div class="grid-x">
            <div class="price_link"><span class="btn_blue">Показать еще</span></div>
          </div>
        </div>
      </div>
      <div class="grid-container content">
        <div class="seo_text">
          <h1>Сео-текст</h1>
          <p>Компания «Бытовки-Сервис» (Москва) предлагает взять в аренду блок контейнеры и вагончики недорого. Мы гарантируем клиентам выгодные условия сотрудничества и самостоятельно доставляем бытовки до строительных объектов.</p>
          <p>Аренда блок контейнера – это возможность получить качественное временное жилье, не тратясь на его приобретение. Арендовать такое сооружение можно гораздо дешевле, чем купить. К тому же наниматель не тратится на монтаж и демонтаж бытовки: все работы выполняют специалисты нашей компании.</p>
          <p>Преимущества сотрудничества с ООО «Бытовки-Сервис»</p>
          <ul>Аренда бытовок – оптимальный вариант для многих организаций. Каждому клиенту гарантированы следующие преимущества:
            <li>возможность арендовать вагончик любого типа, как утепленный, так и металлический, с разными вариантами отделки и оборудования;</li>
            <li>индивидуальный подход к заказу: учитываются все пожелания клиентов, подбирается наиболее оптимальный вариант сотрудничества для каждого;</li>
            <li>выгодные цены на услуги;</li>
            <li>оперативная доставка сооружений на объект;</li>
            <li>Бытовка арендуется без залога, по договору.</li>
          </ul>
          <ul>Мы предлагаем различные виды бытовок:
            <li>для складов: с решетками на окнах, внутренней отделкой, металлической дверью;</li>
            <li>для офисных помещений: с окнами, дверями, подведенными инженерными коммуникациями, отделкой;</li>
            <li>для торговых точек: с выходами, к которым подключается торговое оборудование, с коммуникациями;</li>
            <li>для проживания: с системой сигнализации, мебелью, отделкой и различными удобствами;</li>
            <li>для охранных постов со всем необходимым оснащением и мебелью.</li>
          </ul>
          <p>Аренда бытовки может осуществляться на любой срок по желанию клиента. Все обязательства прописываются в договоре, действие которого можно продлить. Для постоянных клиентов действуют специальные предложения.</p>
          <p>Звоните по телефонам: <span class="tel">+7 (495) 789-55-63</span>,<span class="tel">+7 (495) 641-85-68 </span>, и наши консультанты подберут для вас наиболее выгодные условия сотрудничества.</p>
        </div>
      </div>

<?php

include_once('./templates/blocks/delivery-calculator.php');

?>

      <div class="often-question">
        <div class="grid-container">
          <div class="often-question heading">Часто задаваемые вопросы</div>
          <div class="often-question-wrapper">
            <?php 
            
            include_once('./templates/blocks/questions.php');
            ?>
          </div>
        </div>
      </div>

<?php

include_once('./templates/blocks/order-form.php');
include_once('./templates/blocks/main-article.php');

?>

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