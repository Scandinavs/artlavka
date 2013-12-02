<!DOCTYPE html>

<html lang="ru">
<head>
    <title>Подарки из бумаги и конфет</title>

    <link href="style/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="style/style.css" rel="stylesheet" type="text/css" media="screen"/>
    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
</head>

<body>
<div id="main">
    <div class="container">

        <?php include 'header.html'; ?>
        <div style="clear:both"></div>
        <!--end header -->

        <div id="discount">
            <div>
                <div class="discountItem">
                    <div class="percentDiscount30">
                        <img src="style/images/items/discount_item_2.png" width="490" height="320"/>
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

            </div>
            <div class="verticalDashedLine"></div>
            <div class="infoBlock">
                <h2 style="margin-left: 20px">При заказе трёх<br/>подарков - скидка 10%!</h2>
            </div>
        </div>
        <!--end info -->
        <div class="horizontalLine" style="margin-top: 10px;"></div>

        <div id="content">
            <h2>Lorem ipsum, Dolor sit</h2>

            <h3>Nullam vulputate felis id odio interdum nec malesuada mi pretium. </h3>

            <p>Praesent luctus egestas nisl, vitae vehicula eros rhoncus vel.
                Phasellus consequat arcu eu neque convallis eu vulputate diam vehicula. In eget venenatis nisl.
                Vestibulum id nulla eu sapien pellentesque malesuada pharetra ac lacus.
                Curabitur et ultricies quam. Aenean pretium aliquet velit, gravida vulputate urna tempus vel. </p>

            <p>Proin tempor erat sit amet nisl porta nec vulputate arcu imperdiet. Praesent luctus egestas nisl, vitae
                vehicula eros rhoncus vel.
                Phasellus consequat arcu eu neque convallis eu vulputate diam vehicula. In eget venenatis nisl.
                Vestibulum id nulla eu sapien pellentesque malesuada pharetra ac lacus. Curabitur et ultricies quam.
                Aenean pretium aliquet velit,
                gravida vulputate urna tempus vel. Proin tempor erat sit amet nisl porta nec vulputate arcu
                imperdiet. </p>

            <div id="news">
                <h3>Latest Updates</h3>
                <h4>Vestibulum id nulla eu sapien pellentesque</h4>
                <small>June 1, 2009</small>
                <p>Ut vel turpis a orci pulvinar tincidunt. Mauris id purus turpis. Aliquam metus arcu,
                    facilisis quis pellentesque vitae, dapibus non nulla. Nulla suscipit sagittis sodales.
                    Etiam laoreet ante in purus laoreet id malesuada dui pretium.<a href="#"> Read More</a></p>
                <h4>Vestibulum id nulla eu sapien pellentesque</h4>
                <small>June 1, 2009</small>
                <p>Ut vel turpis a orci pulvinar tincidunt. Mauris id purus turpis. Aliquam metus arcu,
                    facilisis quis pellentesque vitae, dapibus non nulla. Nulla suscipit sagittis sodales.
                    Etiam laoreet ante in purus laoreet id malesuada dui pretium.<a href="#"> Read More</a></p>
            </div>
            <!--end news-->
        </div>
        <!--end content-->
    </div>
</div>
<div id="footer">
    <div class="container">
        <p>Copyright © 2013 ArtLavka <br/>
            All Rights Reserved</p>
    </div>
</div>
<!--end footer-->
</body>
</html>
