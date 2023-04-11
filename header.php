<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html class="html" lang="ru">

<head>
  <? $APPLICATION->ShowHead(); ?>
  <title><? $APPLICATION->ShowTitle(false) ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/swiper@8/swiper-bundle.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" rel="stylesheet" />
  <link href="/dest/css/style.min.css" rel="stylesheet" />
  <link href="/dest/css/social_icons_styles.css" rel="stylesheet" />
  <link href="/dest/css/font-awesome.min.css" type="text/css" rel="stylesheet"/>
  <link rel="icon" href="/favicon.ico" sizes="any">
  <link rel="icon" href="/favicon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <meta name="yandex-verification" content="74efb2bfceb8fc30" />
  <meta name="google-site-verification" content="B2k4dQmVZUQBTQs11z6LugxUBepFlXCRh3EuF5lwiCo" />
  <script src="/dest/js/swipers.min.js" type="module"></script>
  <script src="/dest/js/jquery-2.2.4.min.js"></script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WGTLSTV');</script>
<!-- End Google Tag Manager -->

</head>

<body class="landing">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WGTLSTV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>
  <header class="header">
    <div class="container">
      <div class="header__info">
        <div>
          <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
              "PLAIN_TEXT" => true,
              "AREA_FILE_SHOW" => "file",
              "AREA_FILE_SUFFIX" => "inc",
              "EDIT_TEMPLATE" => "",
              "PATH" => "/include/geo_inc.php"
            )
          ); ?>
        </div>
        <div>Режим работы: круглосуточно, без выходных</div>
      </div>
      <div class="header__mobile">
        <a class="logo" href="/"><img src="/dest/images/static/logo.svg" alt=""></a>
        <button class="menu-btn">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
      <div class="header__body">
        <nav class="header__menu">
          <? $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"header", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "nested",
		"DELAY" => "N",
		"MAX_LEVEL" => "4",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "header",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "header"
	),
	false
); ?>
        </nav>
        <a class="logo" href="/"><img src="/dest/images/static/logo.svg" alt=""></a>
        <div class="header__call-wrapper">
          <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
              "AREA_FILE_SHOW" => "file",
              "AREA_FILE_SUFFIX" => "inc",
              "EDIT_TEMPLATE" => "",
              "PATH" => "/include/tel_inc.php",
              "IS_HEADER" => TRUE
            )
          ); ?>
          <button class="btn type2 popup-btn">Заказать&nbsp;звонок</button>
        </div>
        <div class="header__additional-info">
          <div>Старо-Аракчинская 2-я, 11 к1 Яхт Клуб "Волжская Гавань"</div>
          <div>Режим работы: круглосуточно, без выходных</div>
        </div>
      </div>
    </div>
  </header>
  <div class="breadcrumbs <? $APPLICATION->ShowProperty('breadcrumbs_class') ?>">
    <div class="container">
      <? $APPLICATION->IncludeComponent(
        "bitrix:breadcrumb",
        "breadcrumbs",
        array(
          "PATH" => "",
          "SITE_ID" => "s1",
          "START_FROM" => "0"
        )
      ); ?>
    </div>
  </div>
  <div class="popup">
    <div class="popup__body">
      <div class="req-popup popup__content">
        <button class="close-btn">
          <span></span>
        </button>
        <div class="req-popup__body">
          <div class="req-popup__title title">Обратная связь</div>
          <div class="req-popup__text">Оставьте заявку и наш специалист свяжется с вами в течении 15 минут</div>
          <form class="form req-popup__form">
            <input type="hidden" name="url" value="<?= $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>">
            <input type="hidden" name="formType" value='Заказ звонка'>
            <input type="hidden" name="product">
            <input type="hidden" name="productDate">
            <input class="input" type="text" placeholder="Имя" name="name" required>
            <input class="input" type="text" placeholder="Телефон" name="tel" required>
            <button class="btn" type="submit">Оставить заявку</button>
            <div class="form__privacy">Нажимая кнопку «Оставить заявку» вы соглашаетесь на обработку персональных данных
            </div>
          </form>
        </div>
        <div class="req-popup__bg-placeholder"></div>
        <div class="req-popup__img-wrapper">
          <img src="/dest/images/static/popup-bg.png" alt="">
        </div>
      </div>
      <div class="thx-popup popup__content">
        <button class="close-btn">
          <span></span>
        </button>
        <div class="thx-popup__body">
          <div class="thx-popup__title title">Спасибо за заявку</div>
          <div class="thx-popup__text">Мы свяжемся с вами в ближайшее время</div>
        </div>
      </div>
      <div class="calendar-popup card-item popup__content type2">
        <button class="close-btn">
          <span></span>
        </button>
        <div class="card-item__info"><span>5-16</span> чел</div>
        <img class="card-item__img" src="./images/content/events-img1.jpg" alt="">
        <div class="card-item__body">
          <div class="card-item__name text-title">Теплоходы на свадьбу</div>
          <div class="card-item__buttons">
            <div class="btn type2 popup-btn">Забронировать</div>
            <a class="btn type2" href="">Узнать подробнее</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-wrapper">
    <main class="main">