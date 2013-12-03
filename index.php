<!DOCTYPE html>

<html lang="ru">
<head>
    <title>Подарки из бумаги и конфет</title>

    <link href="style/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="style/style.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- bxSlider CSS file -->
    <link href="js/bxslider/jquery.bxslider.css" rel="stylesheet"/>
    <!-- bxSlider Javascript file -->
    <script src="js/bxslider/jquery.bxslider.min.js"></script>
    <script src="/js/rainbow.min.js"></script>
    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
    <link rel="stylesheet" href="js/fancybox/source/jquery.fancybox.css" type="text/css" media="screen"/>
    <script type="text/javascript" src="js/fancybox/source/jquery.fancybox.pack.js"></script>
    <!--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>-->
</head>

<body>
<?php
$baseItemsDir = "items/";
?>
<script type="text/javascript">
    $(document).ready(function () {
//        $('.bxslider').bxSlider();
        $('.fancybox').fancybox({
            helpers: {
                title: {
                    type: 'inside'
                }
            }
        });
        $('.bxslider').bxSlider({
            mode: 'horizontal',
            responsive: false,
            controls: false
        });
    });

</script>

<div id="main">
    <div class="container">

        <?php include 'header.html'; ?>
        <div style="clear:both"></div>
        <!--end header -->

        <div id="discount">
            <div>
                <div class="discountItem">
                    <div class="percentDiscount30">
                        <img src="items/discount_item_2.png" width="490" height="320"/>
                    </div>
                </div>
                <div id="discountTitle"><h2>Скидка до 10 декабря!</h2></div>
            </div>
            <div id="orderDiscountItemForm" style="float: left">
                <div id="orderDiscountItemTitle">
                    <h2>Изысканность цветов и вкус<br/>шоколада в одном подарке!</h2>
                </div>
                <div id="discountForm">
                    <div class="formRow">
                        <div class="formLabel"><span>Ваше имя</span></div>
                        <div class="formField"><input value="" name="name" type="text"></div>
                    </div>
                    <div class="formRow">
                        <div class="formLabel"><span>Ваш телефон</span></div>
                        <div class="formField"><input value="" name="phone" type="text"></div>
                    </div>
                    <div class="formRow">
                        <div class="formLabel"><span>Эл. почта</span></div>
                        <div class="formField"><input value="" name="email" type="text"></div>
                    </div>
                    <div style="width: 100%;">
                        <a class="button" name="discountOrder" style="width: 155px; float: right; margin-right: 7px"
                           href="#inline">Купить сейчас!</a>
                    </div>
                </div>
            </div>
        </div>
        <div style="clear:both"></div>
        <!--end discount -->
        <div class="horizontalLine" style="margin-top: -10px;"></div>

        <div id="info">
            <div class="infoBlock" style="width: 280px">
                <h2>Доставка по<br/>всей Украине</h2>

                <div class="infoDescription">
                    <ul>
                        <li><strong>Оформить</strong> заказ можно на сайте или по телефону</li>
                        <li>Доставка <strong>по всей </strong>территории <strong>Украины </strong>осуществляется Новой
                            Почтой
                        </li>
                    </ul>
                </div>
            </div>
            <div class="verticalDashedLine"></div>
            <div class="infoBlock" style="width: 325px">
                <h2>Индивидуальный<br/>подход к каждому</h2>

                <div class="infoDescription">
                    <ul>
                        <li>Вы можете <strong>выбрать </strong>цветовое решение, марку конфет и форму подарка в
                            соответствии с поводом
                        </li>
                        <li>Заказ выполняется в <strong>кратчайшие </strong>сроки и из самых
                            <strong>качественных </strong>материалов
                        </li>
                    </ul>
                </div>
            </div>
            <div class="verticalDashedLine"></div>
            <div class="infoBlock" style="width: 335px">
                <h2 style="margin-left: 20px;">При заказе трёх<br/>подарков - скидка 10%!</h2>

                <div class="infoDescription">
                    <ul>
                        <li>При <strong>любом </strong>повторном заказе - <strong>скидка 5%</strong> на все изделия</li>
                        <li>При повторном заказе в течение&nbsp; недели <strong>скидка 20%</strong> на всю продукцию
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--end info -->
        <div class="horizontalLine" style="margin-top: 10px;"></div>

        <div class="goodsBackground">
            <?php
            $itemTitle = 'Торт<br/>"Розовый каприз"';
            $fancyBoxItemTitle = "Торт 'Розовый каприз'";
            $largeItemImage = $baseItemsDir . 'Tort_Rozoviy_Kapriz_190x253.png';
            $itemImage = $baseItemsDir . 'Tort_Rozoviy_Kapriz_190x253.png';
            //            $itemImages = array(
            //                'Торт "Розовый каприз"' => $baseItemsDir . 'Tort_Rozoviy_Kapriz_190x253.png',
            //                'Торт "Розовый каприз" 2' => $baseItemsDir . 'Tort_Rozoviy_Kapriz_190x253.png',
            //            );
            $itemDescription = 'Конфеты: "Канафета" 500г';
            $itemPrice = 'Цена: <strong>125 грн</strong>';
            include 'item.html';
            ?>
            <?php
            $itemTitle = 'Торт<br/>"Радость олигарха"';
            $fancyBoxItemTitle = "Торт 'Розовый каприз'";
            $largeItemImage = $baseItemsDir . 'Tort_Rozoviy_Kapriz_190x253.png';
            $itemImage = $baseItemsDir . 'Tort_Radost_Oligarha_190x253.png';
            $itemDescription = 'Description';
            $itemPrice = '125 uah';
            include 'item.html';
            ?>
            <?php
            $itemTitle = 'Торт<br/>"Радость олигарха"';
            $fancyBoxItemTitle = "Торт 'Розовый каприз'";
            $itemImage = $baseItemsDir . 'Tort_Radost_Oligarha_190x253.png';
            $itemDescription = 'Description';
            $itemPrice = '125 uah';
            include 'item.html';
            ?>
        </div>
    </div>
</div>
<div id="footer">
    <div class="container">
        <p>Copyright © 2013 ArtLavka <br/>
            All Rights Reserved</p>
    </div>
</div>
<!--end footer-->
<?php
include 'tracking.html';
?>
</body>
</html>
