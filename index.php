<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>AnSiber</title>

  <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700&amp;subset=cyrillic" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700i&amp;subset=cyrillic" rel="stylesheet">
  <link href="js/slick/slick.css" rel="stylesheet">
  <link href="js/slick/slick-theme.css" rel="stylesheet">
  <link rel="stylesheet" href="css/nanoscroller.css">
  <link href="css/style.css?v=11" rel="stylesheet">
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>

<?php require_once 'editor/scripts/get_data.php' ?>

<header class="header">
    <div class="container">

        <nav class="header__menu">
            <a href="#">О проекте</a>
            <a href="#">Галерея</a>
            <a href="#">Новости</a>
            <a href="#">Вопросы</a>
            <a href="#">Wiki</a>
            <a href="#">Форум</a>
        </nav>

        <div class="header__logo">
            <img src="img/logo.png" alt="AnSiber">
        </div>

        <div class="header__play-btn">
            <a href="#">Играть сейчас</a>
        </div>

    </div>

    <img src="img/grass.png" class="header__grass">

</header>

<section class="welcome">

    <div class="section-title"><?php echo $dataArr['section_title']; ?><!--Добро пожаловать в мир AnSiber, путник!--></div>

    <div class="welcome__block-1 welcome__block">
        <div class="container">
            <div class="welcome__text">
                <?php echo $dataArr['welcome__block_1']; ?>
            </div>
        </div>
    </div>
    <div class="welcome__block-2 welcome__block">
        <div class="container">
            <div class="welcome__text">
              <?php echo $dataArr['welcome__block_2']; ?>
        </div>
    </div>
    <div class="welcome__block-3 welcome__block">
        <div class="container">
            <div class="welcome__text">
              <?php echo $dataArr['welcome__block_3']; ?>
            </div>
        </div>
    </div>
    <div class="welcome__block-4 welcome__block">
        <div class="container">
            <div class="welcome__text">
              <?php echo $dataArr['welcome__block_4']; ?>
            </div>
        </div>
    </div>

</section>

<section class="gallery">
  <div class="container">

        <div class="section-title">Галерея</div>


        <div class="gallery__1">
            <div class="gallery__1__item"><img src="img/gallery1.jpg"></div>
            <div class="gallery__1__item"><img src="img/gallery2.jpg"></div>
            <div class="gallery__1__item"><img src="img/gallery3.jpg"></div>
            <div class="gallery__1__item"><img src="img/gallery4.jpg"></div>
            <div class="gallery__1__item"><img src="img/gallery5.jpg"></div>
        </div>


        <div class="gallery__2">
            <div class="gallery__2__item"><img src="img/gallery1.jpg"></div>
            <div class="gallery__2__item"><img src="img/gallery2.jpg"></div>
            <div class="gallery__2__item"><img src="img/gallery3.jpg"></div>
            <div class="gallery__2__item"><img src="img/gallery4.jpg"></div>
            <div class="gallery__2__item"><img src="img/gallery5.jpg"></div>
        </div>

  </div>
</section>


<section class="questions">
  <div class="container">
    <div class="row">


      <div class="col-6">
          <img src="img/questions.jpg" class="questions__woman">
      </div>

      <div class="questions__items nano col-6">
        <div class="nano-content">

            <div class="section-title">Вопросы</div>

            <div class="questions__item1 questions__item questions__item_current">
                <div class="questions__item__title"><?php echo $dataArr['questions__item1__title']; ?></div>
                <p class="questions__item__answer"><?php echo $dataArr['questions__item1__answer']; ?></p>
            </div>

            <div class="questions__item2 questions__item">
                <div class="questions__item__title"><?php echo $dataArr['questions__item2__title']; ?></div>
                <p class="questions__item__answer"><?php echo $dataArr['questions__item2__answer']; ?></p>
            </div>

            <div class="questions__item3 questions__item">
                <div class="questions__item__title"><?php echo $dataArr['questions__item3__title']; ?></div>
                <p class="questions__item__answer"><?php echo $dataArr['questions__item3__answer']; ?></p>
            </div>

            <div class="questions__item4 questions__item">
                <div class="questions__item__title"><?php echo $dataArr['questions__item4__title']; ?></div>
                <p class="questions__item__answer"><?php echo $dataArr['questions__item4__answer']; ?></p>
            </div>

            <div class="questions__item5 questions__item">
                <div class="questions__item__title"><?php echo $dataArr['questions__item5__title']; ?></div>
                <p class="questions__item__answer"><?php echo $dataArr['questions__item5__answer']; ?></p>
            </div>

            <div class="questions__item6 questions__item">
                <div class="questions__item__title"><?php echo $dataArr['questions__item6__title']; ?></div>
                <p class="questions__item__answer"><?php echo $dataArr['questions__item6__answer']; ?></p>
            </div>

            <div class="questions__item7 questions__item">
                <div class="questions__item__title"><?php echo $dataArr['questions__item7__title']; ?>?</div>
                <p class="questions__item__answer"><?php echo $dataArr['questions__item6__answer']; ?></p>
            </div>

        </div>
      </div>

    </div>
  </div>
</section>


<section class="news__wrap">

    <div class="news-rib-top"></div>

    <div class="news">

        <div class="section-title">Новости</div>

        <div class="news__items">
            <div class="news__item news__item1 news__item__visible">
                  <div class="news__date">Опубликовано 6 января 2017, 14:33</div>
                  <img class="news__pic" src="img/news-pic.jpg">
                  <a href="#" class="news__item__title">Ура! У нас есть сайт</a>
                  <p class="news__item__content">Описание того, как сильно мы рады по этому поводу, как нас переполняют эмоции и ещё немного текста для объема</p>
                  <a href="#" class="news__read-more">Читать далее...</a>
            </div>

            <div class="news__item news__item2 news__item__visible">
                  <div class="news__date">Опубликовано 6 января 2017, 14:33</div>
                  <img class="news__pic" src="img/news-pic.jpg">
                  <a href="#" class="news__item__title">Ура! У нас есть сайт</a>
                  <p class="news__item__content">Описание того, как сильно мы рады по этому поводу, как нас переполняют эмоции и ещё немного текста для объема</p>
                  <a href="#" class="news__read-more">Читать далее...</a>
            </div>

            <div class="news__item news__item3">
                  <div class="news__date">Опубликовано 6 января 2017, 14:33</div>
                  <img class="news__pic" src="img/news-pic.jpg">
                  <a href="#" class="news__item__title">Ура! У нас есть сайт</a>
                  <p class="news__item__content">Описание того, как сильно мы рады по этому поводу, как нас переполняют эмоции и ещё немного текста для объема</p>
                  <a href="#" class="news__read-more">Читать далее...</a>
            </div>

            <div class="news__item news__item4">
                  <div class="news__date">Опубликовано 6 января 2017, 14:33</div>
                  <img class="news__pic" src="img/news-pic.jpg">
                  <a href="#" class="news__item__title">Ура! У нас есть сайт</a>
                  <p class="news__item__content">Описание того, как сильно мы рады по этому поводу, как нас переполняют эмоции и ещё немного текста для объема</p>
                  <a href="#" class="news__read-more">Читать далее...</a>
            </div>

            <div class="news__item news__item5">
                  <div class="news__date">Опубликовано 6 января 2017, 14:33</div>
                  <img class="news__pic" src="img/news-pic.jpg">
                  <a href="#" class="news__item__title">Ура! У нас есть сайт</a>
                  <p class="news__item__content">Описание того, как сильно мы рады по этому поводу, как нас переполняют эмоции и ещё немного текста для объема</p>
                  <a href="#" class="news__read-more">Читать далее...</a>
            </div>

            <div class="news__item news__item6">
                  <div class="news__date">Опубликовано 6 января 2017, 14:33</div>
                  <img class="news__pic" src="img/news-pic.jpg">
                  <a href="#" class="news__item__title">Ура! У нас есть сайт</a>
                  <p class="news__item__content">Описание того, как сильно мы рады по этому поводу, как нас переполняют эмоции и ещё немного текста для объема</p>
                  <a href="#" class="news__read-more">Читать далее...</a>
            </div>

        </div>

        <div class="news__up"></div>
        <div class="news__down"></div>

    </div>

</section>

<section class="pack">
    <div class="pack__container">

            <div class="pack__title section-title">Спеши приобрести набор раннего доступа!</div>

            <div class="pack__items">
              <?php echo $dataArr['pack__item1']; ?>
              <?php echo $dataArr['pack__item2']; ?>
              <?php echo $dataArr['pack__item3']; ?>
            </div>

    </div>
</section>


<footer class="footer">
  <div class="container container1">

      <div class="footer__logo footer-col"><img src="img/footer-logo.png"></div>

      <nav class="footer__menu footer-col">
          <a href="#">Главная</a><br />
          <a href="#">Скачать клиент</a><br />
          <a href="#">Пресс-кит</a><br />
          <a href="#">Правовая информация</a>
      </nav>

      <div class="footer__social footer-col">
          <p>Мы в социальных сетях:</p><br />
          <a class="social__vk" href="#"></a>
          <a class="social__fb" href="#"></a>
          <a class="social__twitter" href="#"></a>
          <a class="social__yt" href="#"></a>
      </div>

      <div class="footer__contacts footer-col">
          <p class="footer__contacts__title">Контакты</p>
          <p>*Контакт 1*</p>
          <p>*Контакт 1*</p>
          <p>*Контакт 1*</p>
      </div>

    </div>

    <div class="powered-by">
      <div class="container">
          <span>Дизайн - <a href="https://vk.com/dreamsbroker" target="_blank">Роман Сироватко</a></span>
          <span>Верстка - <a href="https://bisenbaev.ru" target="_blank">Алмаз Бисенбаев</a></span>
      </div>
    </div>

</footer>


  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="js/slick/slick.js"></script>
  <script src="js/jquery.nanoscroller.min.js"></script>
  <script src="js/scripts.js?v=11"></script>

</body>
</html>
