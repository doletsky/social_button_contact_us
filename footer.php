<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

</main>
<footer class="footer" id="contacts">
  <div class="container">
    <div class="footer__logo-block">
      <a class="logo" href="/">
        <img src="/dest/images/static/logo.svg" alt="">
      </a>
      <div class="footer__copyright">© kazan.yacht 2022</div>
      <a class="footer__policy" href="">Политика персональных данных</a>
      <div class="footer__creators">
        <span>Создание и продвижение сайтов:</span>
        <a href="https://aaccent.ru">Акцент на результат</a>
      </div>
    </div>
    <div class="footer__menu-block">
      <div class="footer__menu-block-inner">
        <ul class="footer__menu-list-wrapper">
          <span class="footer__menu-list-header">Аренда судов</span>
          <ul class="footer__menu-list">
            <? $APPLICATION->IncludeComponent(
              "bitrix:catalog.section.list",
              "footer-menu",
              array(
                "ADD_SECTIONS_CHAIN" => "N",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "COUNT_ELEMENTS" => "Y",
                "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                "FILTER_NAME" => "sectionsFilter",
                "IBLOCK_ID" => "6",
                "IBLOCK_TYPE" => "content",
                "SECTION_CODE" => "",
                "SECTION_FIELDS" => array("", ""),
                "SECTION_ID" => $_REQUEST["SECTION_ID"],
                "SECTION_URL" => "",
                "SECTION_USER_FIELDS" => array("", ""),
                "SHOW_PARENT_NAME" => "Y",
                "TOP_DEPTH" => "2",
                "VIEW_MODE" => "LINE"
              )
            ); ?>
          </ul>
        </ul>
        <ul class="footer__menu-list-wrapper">
          <span class="footer__menu-list-header">Меню</span>
          <ul class="footer__menu-list">
            <? $APPLICATION->IncludeComponent(
              "bitrix:menu",
              "footer",
              array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "footer",
                "DELAY" => "N",
                "MAX_LEVEL" => "1",
                "MENU_CACHE_GET_VARS" => array(""),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "footer",
                "USE_EXT" => "N"
              )
            ); ?>
          </ul>
        </ul>
      </div>
      <ul class="footer__menu-list-wrapper">
        <span class="footer__menu-list-header">Организация мероприятий</span>
        <ul class="footer__menu-list">
          <? $APPLICATION->IncludeComponent(
            "bitrix:catalog.section",
            "footer-menu",
            array(
              "ACTION_VARIABLE" => "action",
              "ADD_PICT_PROP" => "-",
              "ADD_PROPERTIES_TO_BASKET" => "Y",
              "ADD_SECTIONS_CHAIN" => "N",
              "AJAX_MODE" => "N",
              "AJAX_OPTION_ADDITIONAL" => "",
              "AJAX_OPTION_HISTORY" => "N",
              "AJAX_OPTION_JUMP" => "N",
              "AJAX_OPTION_STYLE" => "Y",
              "BACKGROUND_IMAGE" => "-",
              "BASKET_URL" => "/personal/basket.php",
              "BROWSER_TITLE" => "-",
              "CACHE_FILTER" => "N",
              "CACHE_GROUPS" => "Y",
              "CACHE_TIME" => "36000000",
              "CACHE_TYPE" => "A",
              "COMPATIBLE_MODE" => "Y",
              "DETAIL_URL" => "",
              "DISABLE_INIT_JS_IN_COMPONENT" => "N",
              "DISPLAY_BOTTOM_PAGER" => "Y",
              "DISPLAY_COMPARE" => "N",
              "DISPLAY_TOP_PAGER" => "N",
              "ELEMENT_SORT_FIELD" => "sort",
              "ELEMENT_SORT_FIELD2" => "id",
              "ELEMENT_SORT_ORDER" => "asc",
              "ELEMENT_SORT_ORDER2" => "desc",
              "ENLARGE_PRODUCT" => "STRICT",
              "FILTER_NAME" => "arrFilter",
              "IBLOCK_ID" => "8",
              "IBLOCK_TYPE" => "content",
              "INCLUDE_SUBSECTIONS" => "Y",
              "LABEL_PROP" => array(),
              "LAZY_LOAD" => "N",
              "LINE_ELEMENT_COUNT" => "3",
              "LOAD_ON_SCROLL" => "N",
              "MESSAGE_404" => "",
              "MESS_BTN_ADD_TO_BASKET" => "В корзину",
              "MESS_BTN_BUY" => "Купить",
              "MESS_BTN_DETAIL" => "Подробнее",
              "MESS_BTN_LAZY_LOAD" => "Показать ещё",
              "MESS_BTN_SUBSCRIBE" => "Подписаться",
              "MESS_NOT_AVAILABLE" => "Нет в наличии",
              "META_DESCRIPTION" => "-",
              "META_KEYWORDS" => "-",
              "OFFERS_LIMIT" => "5",
              "PAGER_BASE_LINK_ENABLE" => "N",
              "PAGER_DESC_NUMBERING" => "N",
              "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
              "PAGER_SHOW_ALL" => "N",
              "PAGER_SHOW_ALWAYS" => "N",
              "PAGER_TEMPLATE" => ".default",
              "PAGER_TITLE" => "Товары",
              "PAGE_ELEMENT_COUNT" => "18",
              "PARTIAL_PRODUCT_PROPERTIES" => "N",
              "PRICE_CODE" => array(),
              "PRICE_VAT_INCLUDE" => "Y",
              "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
              "PRODUCT_ID_VARIABLE" => "id",
              "PRODUCT_PROPS_VARIABLE" => "prop",
              "PRODUCT_QUANTITY_VARIABLE" => "quantity",
              "PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
              "PROPERTY_CODE_MOBILE" => array(),
              "RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
              "RCM_TYPE" => "personal",
              "SECTION_CODE" => "",
              "SECTION_ID" => $_REQUEST["SECTION_ID"],
              "SECTION_ID_VARIABLE" => "SECTION_ID",
              "SECTION_URL" => "",
              "SECTION_USER_FIELDS" => array("", ""),
              "SEF_MODE" => "N",
              "SET_BROWSER_TITLE" => "N",
              "SET_LAST_MODIFIED" => "N",
              "SET_META_DESCRIPTION" => "N",
              "SET_META_KEYWORDS" => "N",
              "SET_STATUS_404" => "N",
              "SET_TITLE" => "N",
              "SHOW_404" => "N",
              "SHOW_ALL_WO_SECTION" => "N",
              "SHOW_FROM_SECTION" => "N",
              "SHOW_PRICE_COUNT" => "1",
              "SHOW_SLIDER" => "Y",
              "SLIDER_INTERVAL" => "3000",
              "SLIDER_PROGRESS" => "N",
              "TEMPLATE_THEME" => "blue",
              "USE_ENHANCED_ECOMMERCE" => "N",
              "USE_MAIN_ELEMENT_SECTION" => "N",
              "USE_PRICE_COUNT" => "N",
              "USE_PRODUCT_QUANTITY" => "N"
            )
          ); ?>
        </ul>
      </ul>
    </div>
    <div class="footer__tel-block">
      <div class="footer__links">
        <? $APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
          array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/include/tel_inc.php",
            "CLASSES" => "tel-icon icon"
          )
        ); ?>
        <? $APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
          array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/include/geo_inc.php"
          )
        ); ?>
        <? $APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
          array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/include/mail_inc.php"
          )
        ); ?>
      </div>
      <button class="btn type2 popup-btn">Заказать звонок</button>
    </div>
  </div>
</footer>
</div>
<div class="ts-mw-button" id="ts-mw-id">
    <div class="ts-mw-pulse"></div>
    <div class="ts-mw-tips">
        <div class="ts-mw-tips-text">Свяжитесь с нами</div>
        <span class="ts-mw-tips-close" onclick="hidetips();">×</span>
        <script>function setCookie(e,t,o){var i=new Date;i.setTime(i.getTime()+24*o*60*60*1e3);var n="expires="+i.toUTCString();document.cookie=e+"="+t+";"+n+";path=/"}function getCookies(e){for(var t=e+"=",o=document.cookie.split(";"),i=0;i<o.length;i++){for(var n=o[i];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return""}function hidetips(){$(".ts-mw-tips").remove(),setCookie("ts_tips_cookie","1","1")}$(document).ready(function(){""!=getCookies("ts_tips_cookie")&&$(".ts-mw-tips").remove()});</script>
    </div>
    <div class="ts-mw-icon mw-animation mw-animation-2">
        <div class="slides"><img src="/dest/images/social_icons/ts-phone.svg" alt="+7 960 048 38 16"></div>
        <!--<div class="slides"><img src="/dest/images/social_icons/ts-telegram.svg" alt="Telegram"></div>-->
<!--        <div class="slides"><img src="/dest/images/social_icons/ts-whatsapp.svg" alt="Whatsapp"></div>-->
        <div class="slides"><img src="/dest/images/social_icons/ts-vk.png" alt="Vkontakte"></div>
        <div class="slides"><img src="/dest/images/social_icons/ts-mail.svg" alt="Mail"></div>
        <i class="fa fa-times" aria-hidden="true"></i>
    </div>
    <div class="ts-mw-block mw-no-bg  mw-tips tips-right">
        <ul class="ts-mw-list">
            <li class="ts-mw-li ts-phone"><a href="tel:79600483816"><span class="callback-icon"><img src="/dest/images/social_icons/ts-phone.svg" alt="+7 960 048 38 16"></span><span class="ts-link-text">+7 960 048 38 16</span></a></li>
            <!--<li class="ts-mw-li ts-telegram"><a href="http://t.me/Airat909" rel="nofollow" target="_blank"><span class="tg-icon"><img src="/dest/images/social_icons/ts-telegram.svg" alt="Telegram"></span><span class="ts-link-text">Telegram</span></a></li>-->
<!--            <li class="ts-mw-li ts-whatsapp"><a href="https://api.whatsapp.com/send?phone=79600483816" rel="nofollow" target="_blank"><span class="whatsapp-icon"><img src="/dest/images/social_icons/ts-whatsapp.svg" alt="Whatsapp"></span><span class="ts-link-text">Whatsapp</span></a></li>-->
            <li class="ts-mw-li ts-vk"><a href="https://vk.com/kazan.yacht" rel="nofollow" target="_blank"><span class="vk-icon"><img src="/dest/images/social_icons/ts-vk.png" alt="Vkontakte"></span><span class="ts-link-text">Vkontakte</span></a></li>
            <li class="ts-mw-li ts-mail"><a href="mailto:kazan.yacht@mail.ru" rel="nofollow" target="_blank"><span class="mail-icon"><img src="/dest/images/social_icons/ts-mail.svg" alt="Mail"></span><span class="ts-link-text">Mail</span></a></li>
        </ul>
    </div>
</div>
<div class="ts-mw-substrate"></div>
<script>
    $('.ts-mw-icon,.ts-mw-li a,.ts-mw-substrate').on('click',function(){$('#ts-mw-id').toggleClass('open');$('.ts-mw-substrate').toggleClass('active');});
    $('.ts-mw-tips').delay(5000).queue(function(show){$(this).css({'opacity':'1','visibility':'visible'});show();});
    $(document).ready(function(){var a=-1;setInterval(function(){var e=$(".ts-mw-icon div"),s=e.length-1;a<s?a++:a=0,e.removeClass("active").eq(a).addClass("active")},2000),$(".slides").first().addClass("active")});
</script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js" async></script>
<script type="module" src='https://unpkg.com/imask'></script>
<script type="module">
  const telInputs = document.querySelectorAll('input[name=tel]')
  const options = {
    mask: '+{7}(000)000-00-00'
  }
  telInputs.forEach(input => {
    IMask(input, options)
  })
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaGuxbttrMPqk7jfUqoSB3bGOlT6oSO_8&callback=initMaps" defer=""></script>
<script src="/dest/js/main.min.js"></script>
</body>

</html>