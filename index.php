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
$baseItemsDirSmall = "items/small/";
?>
<script type="text/javascript">
    $(document).ready(function () {
        $('.fancybox').fancybox({
            helpers: {
                title: {
                    type: 'inside'
                }
            }
        });
//        $('.bxslider').bxSlider();
//        $('.bxslider').bxSlider({
//            mode: 'horizontal',
//            responsive: false,
//            controls: false
//        });

        $("#orderForm").submit(function () {
            return false;
        });

        $("#sendButton").keydown(function (event) {
            if (event.which == 13) {
                sendRequest();
                window.open("http://artlavka.pp.ua/5", "_self");
            }
        });
        $("#sendButton").on("click", function () {
            sendRequest();
        });

        $("#reverseCall").on("click", function () {
            var productName = $(this).attr('name');
            $('#productName').attr('value', productName);

            $('#inlineOrderForm').css('height', '150px');

            $('#emailLabel').hide();
            $('#orderFormEmail').hide();
            $('#msgLabel').hide();
            $('#orderFormMsg').hide();
            $('#orderFormTitle').text("Заказ обратного звонка");
        });

        $(".buyButton").on("click", function () {
            var productName = $(this).attr('name');
            $('#productName').attr('value', productName);

            $('#emailLabel').show();
            $('#orderFormEmail').show();
            $('#msgLabel').show();
            $('#orderFormMsg').show();
            $('#orderFormTitle').text("Оформление заказа");
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
            $itemTitle = 'Ёлочка';
            $fancyBoxItemTitle = "Ёлочка";
            $largeItemImage = $baseItemsDir . 'IMG_9617.jpg';
            $itemImage = $baseItemsDirSmall . '8.jpg';
            //            $itemImages = array(
            //                'Торт "Розовый каприз"' => $baseItemsDir . 'Tort_Rozoviy_Kapriz_190x253.png',
            //                'Торт "Розовый каприз" 2' => $baseItemsDir . 'Tort_Rozoviy_Kapriz_190x253.png',
            //            );
            $itemDescription = '
            Высота:<b> 50 см</b><br/>
            Диаметр: <b>30 см</b><br/>
            Вес конфет:<b> 500 г</b><br/>
            Тип конфет: <b>Шоколадные в ассортименте</b>';
            $itemPrice = 'Цена: <strong>250 грн</strong>';
            include 'item.html';
            ?>

            <?php
            $itemTitle = 'Принцесса';
            $fancyBoxItemTitle = "Принцесса";
            $largeItemImage = $baseItemsDir . 'IMG_9619.jpg';
            $itemImage = $baseItemsDirSmall . '9.jpg';
            $itemDescription = '
            Высота:<b> 25 см</b><br/>
            Диаметр: <b>-</b><br/>
            Вес конфет:<b> 150 г</b><br/>
            Тип конфет: <b>"Amour" Ф-ка "Конти"</b>';
            $itemPrice = 'Цена: <strong>130 грн</strong>';
            include 'item.html';
            ?>

            <?php
            $itemTitle = 'Мальвина';
            $fancyBoxItemTitle = "Мальвина";
            $largeItemImage = $baseItemsDir . 'IMG_9621.jpg';
            $itemImage = $baseItemsDirSmall . '10.jpg';
            $itemDescription = '
            Высота:<b> 25 см</b><br/>
            Диаметр: <b>-</b><br/>
            Вес конфет:<b> 100 г</b><br/>
            Тип конфет: <b>"Amour" Ф-ка "Конти"</b>';
            $itemPrice = 'Цена: <strong>120 грн</strong>';
            include 'item.html';
            ?>

            <?php
            $itemTitle = 'Новогодний<br/>Колокольчик';
            $fancyBoxItemTitle = "Новогодний Колокольчик";
            $largeItemImage = $baseItemsDir . 'IMG_9624.jpg';
            $itemImage = $baseItemsDirSmall . '11.jpg';
            $itemDescription = '
            Высота:<b> 30 см</b><br/>
            Диаметр: <b>15 см</b><br/>
            Вес конфет:<b> 100 г</b><br/>
            Тип конфет: <b>"Фундук в шоколаде" Ф-ка "Конти"</b>';
            $itemPrice = 'Цена: <strong>120 грн</strong>';
            include 'item.html';
            ?>

            <?php
            $itemTitle = 'Новогоднее<br/>шампанское';
            $fancyBoxItemTitle = "Новогоднее шампанское";
            $largeItemImage = $baseItemsDir . 'IMG_9602.jpg';
            $itemImage = $baseItemsDirSmall . '20.jpg';
            $itemDescription = '
            Высота:<b> 30 см</b><br/>
            Диаметр: <b>10 см</b><br/>
            Вес конфет:<b>-</b><br/>
            Тип конфет: <b>-</b>';
            $itemPrice = 'Цена: <strong>80 грн</strong>';
            include 'item.html';
            ?>

            <?php
            $itemTitle = 'Новогодние часы';
            $fancyBoxItemTitle = "Новогодние часы";
            $largeItemImage = $baseItemsDir . 'IMG_9584.jpg';
            $itemImage = $baseItemsDirSmall . '2.png';
            $itemDescription = '
            Высота:<b>-</b><br/>
            Диаметр: <b>24 см</b><br/>
            Вес конфет:<b> 250 г</b><br/>
            Тип конфет: <b>"Батончик"</b>';
            $itemPrice = 'Цена: <strong>80 грн</strong>';
            include 'item.html';
            ?>

            <?php
            $itemTitle = 'Торт<br/>"Розовый каприз"';
            $fancyBoxItemTitle = "Торт Розовый каприз";
            $largeItemImage = $baseItemsDir . 'IMG_9597.jpg';
            $itemImage = $baseItemsDirSmall . '19.png';
            $itemDescription = '
            Высота:<b> 15 см</b><br/>
            Диаметр: <b>35 см</b><br/>
            Вес конфет:<b> 500 г</b><br/>
            Тип конфет: <b>"Konafetto" ф-ка "Roshen"</b>';
            $itemPrice = 'Цена: <strong>120 грн</strong>';
            include 'item.html';
            ?>

            <?php
            $itemTitle = 'Торт<br/>"Радость олигарха"';
            $fancyBoxItemTitle = "Торт Радость олигарха";
            $largeItemImage = $baseItemsDir . 'IMG_9634_2.jpg';
            $itemImage = $baseItemsDirSmall . '16.jpg';
            $itemDescription = '
            Высота:<b> 32 см</b><br/>
            Диаметр: <b>30 см</b><br/>
            Вес конфет:<b> 400 г</b><br/>
            Тип конфет: <b>Шоколадные медальки<br/>и конфеты "Basarili" ф-ка "Roshen"</b>';
            $itemPrice = 'Цена: <strong>140 грн</strong>';
            include 'item.html';
            ?>

            <?php
            $itemTitle = 'Корзинка<br/>с розовыми розами';
            $fancyBoxItemTitle = "Корзинка с розовыми розами";
            $largeItemImage = $baseItemsDir . 'IMG_9638.jpg';
            $itemImage = $baseItemsDirSmall . '3.png';
            $itemDescription = '
            Высота:<b> 35 см</b><br/>
            Диаметр: <b>25 см</b><br/>
            Вес конфет:<b> 300 г</b><br/>
            Тип конфет: <b>"Leonardo"</b>';
            $itemPrice = 'Цена: <strong>120 грн</strong>';
            include 'item.html';
            ?>

            <?php
            $itemTitle = 'Корзинка с нарциссами';
            $fancyBoxItemTitle = "Корзинка с нарциссами";
            $largeItemImage = $baseItemsDir . 'IMG_9591.jpg';
            $itemImage = $baseItemsDirSmall . '4.png';
            $itemDescription = '
            Высота:<b> 35 см</b><br/>
            Диаметр: <b>25 см</b><br/>
            Вес конфет:<b> 300 г</b><br/>
            Тип конфет: <b>Шоколадные в ассортименте ф-ки "Roshen"</b>';
            $itemPrice = 'Цена: <strong>140 грн</strong>';
            include 'item.html';
            ?>

            <?php
            $itemTitle = 'Корзинка с маками';
            $fancyBoxItemTitle = "Корзинка с маками";
            $largeItemImage = $baseItemsDir . 'IMG_9593.jpg';
            $itemImage = $baseItemsDirSmall . '1.png';
            $itemDescription = '
            Высота:<b> 30 см</b><br/>
            Диаметр: <b>25 см</b><br/>
            Вес конфет:<b> 300 г</b><br/>
            Тип конфет: <b>"Парижель" ф-ка "АВК"</b>';
            $itemPrice = 'Цена: <strong>120 грн</strong>';
            include 'item.html';
            ?>

            <?php
            $itemTitle = 'Корзинка с белыми и<br/>красными розами';
            $fancyBoxItemTitle = "Корзинка с белыми и красными розами";
            $largeItemImage = $baseItemsDir . 'IMG_9603.jpg';
            $itemImage = $baseItemsDirSmall . '21.png';
            $itemDescription = '
            Высота:<b> 30 см</b><br/>
            Диаметр: <b>25 см</b><br/>
            Вес конфет:<b> 300 г</b><br/>
            Тип конфет: <b>"Трюфель" ф-ка "АВК"</b>';
            $itemPrice = 'Цена: <strong>120 грн</strong>';
            include 'item.html';
            ?>

            <?php
            $itemTitle = 'Букет из роз';
            $fancyBoxItemTitle = "Букет из роз";
            $largeItemImage = $baseItemsDir . 'IMG_9586.jpg';
            $itemImage = $baseItemsDirSmall . '7.png';
            $itemDescription = '
            Высота:<b> 20 см</b><br/>
            Диаметр: <b>25 см</b><br/>
            Вес конфет:<b> 300 г</b><br/>
            Тип конфет: <b>"Трюфель" ф-ка "АВК"</b>';
            $itemPrice = 'Цена: <strong>120 грн</strong>';
            include 'item.html';
            ?>

            <?php
            $itemTitle = 'Букет из белых и<br/>красных роз';
            $fancyBoxItemTitle = "Букет из белых и красных роз";
            $largeItemImage = $baseItemsDir . 'IMG_9627_2.jpg';
            $itemImage = $baseItemsDirSmall . '13.jpg';
            $itemDescription = '
            Высота:<b> 30 см</b><br/>
            Диаметр: <b>25 см</b><br/>
            Вес конфет:<b> 300 г</b><br/>
            Тип конфет: <b>"Трюфель" ф-ка "АВК"</b>';
            $itemPrice = 'Цена: <strong>120 грн</strong>';
            include 'item.html';
            ?>

            <?php
            $itemTitle = 'Букет "Ассорти"';
            $fancyBoxItemTitle = "Букет Ассорти";
            $largeItemImage = $baseItemsDir . 'IMG_9630.jpg';
            $itemImage = $baseItemsDirSmall . '25.jpg';
            $itemDescription = '
            Высота:<b> 20 см</b><br/>
            Диаметр: <b>15 см</b><br/>
            Вес конфет:<b> 150 г</b><br/>
            Тип конфет: <b>"Amour" ф-ка "Конти"</b>';
            $itemPrice = 'Цена: <strong>120 грн</strong>';
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
<script type="text/javascript">
    function validateEmail(email) {
        var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return reg.test(email);
    }

    function sendRequest() {
        var emailval = $("#orderFormEmail").val();
        var msgval = $("#orderFormMsg").val();
        var telVal = $("#orderFormPhone").val();
        var nameVal = $("#orderFormName").val();
        var mailvalid = validateEmail(emailval);

        if (mailvalid == false) {
            $("#orderFormEmail").addClass("error");
        }
        else if (mailvalid == true) {
            $("#orderFormEmail").removeClass("error");
        }

        if (telVal.length == 0) {
            $("#orderFormPhone").addClass("error");
        } else {
            $("#orderFormPhone").removeClass("error");
        }

        if (nameVal.length == 0) {
            $("#orderFormName").addClass("error");
        } else {
            $("#orderFormName").removeClass("error");
        }

        if (mailvalid == true && telVal.length > 0 && telVal.length > 0) {

            $("#sendButton").replaceWith("<em>Обработка запроса...</em>");

            $.ajax({
                type: 'POST',
                url: 'sendmessage.php',
                data: $("#contact").serialize(),
                success: function (data) {
                    if (data == "true") {
                        window.open("http://artlavka.pp.ua/success.html", "_self");
                    }
                },
                error: function () {
                    alert('Невозможно отправить запрос! Попробуйте позже или позвоните нам!');
                }
            });
        }
    }
</script>
<!-- hidden inline form -->
<div id="inlineOrderForm">
    <span id="orderFormTitle">Оформление заказа</span>

    <div style="clear:both"></div>
    <form id="orderForm" name="orderForm" action="#" method="post">
        <label id="nameLabel" class="orderFormLabel" for="orderFormName">Имя</label>
        <input id="orderFormName" type="text" name="orderFormName" class="txt">
        <br>
        <label id="emailLabel" class="orderFormLabel" for="orderFormEmail">E-mail</label>
        <input id="orderFormEmail" type="email" name="orderFormEmail" class="txt">
        <br>
        <label id="phoneLabel" class="orderFormLabel" for="orderFormPhone">Телефон</label>
        <input id="orderFormPhone" type="tel" name="orderFormPhone" class="txt">
        <br>
        <label id="msgLabel" for="orderFormMsg">Комментарии к заказу</label>
        <textarea id="orderFormMsg" name="orderFormMsg" class="txtarea"></textarea>
        <input id="productName" type="hidden" name="productName"/>

        <button id="sendButton">Заказать</button>
    </form>
</div>
</body>
</html>
