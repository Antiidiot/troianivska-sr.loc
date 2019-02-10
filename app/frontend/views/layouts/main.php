<?php

use frontend\assets\AppAsset;
use yii\helpers\Url;


AppAsset::register($this);

$this->beginPage();
?>
    <!doctype html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport"
              content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?= $this->title ?></title></head>
    <?php $this->head() ?>
    <body>
    <?php $this->beginBody() ?>
    <!--HEADER-->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <a href="<?= Url::to('/') ?>">
                        <div class="header__title"><h1 class="title__text"> троянівська<br>сільська рада</h1></div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4"><p class="header__title region_text">Волинська область</p>
                    <p class="header__title district_text">Маневицький район</p>
                    <p class="header__title village_text">с. Троянівка</p>
                    <p class="header__title">Поштовий індекс: 44622</p></div>
                <div class="col-lg-4 col-md-4">
                    <div class="header__social"><p class="header__social_text">Ми в соцмережах:</p><a
                                href="https://www.facebook.com/profile.php?id=100012914868157" target="_blank"><i
                                    class="fa fa-facebook-official" aria-hidden="true"></i> </a><a
                                href="https://web.telegram.org"
                                target="_blank"><i
                                    class="fa fa-telegram" aria-hidden="true"></i> </a><a
                                href="https://www.youtube.com/channel/UCZwJMDF8Hr5TcUqljxite1A" target="_blank"><i
                                    class="fa fa-youtube" aria-hidden="true"></i></a></div>
                </div>
            </div>
        </div>
    </header>

    <main class="main">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <nav class="nav__right">
                    <div class="nav__title">
                        <ul>
                            <li class="menu__item">
                                <a href="<?= Url::to('/news') ?>" class="item__link">Новини</a>
                            </li>
                            <li class="menu__item">
                                <a href="<?= Url::to('/advertisement') ?>" class="item__link">Оголошення</a>
                            </li>
                            <li class="menu__item">
                                <a href="<?= Url::to('/gallery') ?>" class="item__link">Фото-галерея</a>
                            </li>
                            <li class="menu__item">
                                <a href="<?= Url::to('/contact') ?>" class="item__link">Контакти</a>
                            </li>
                            <li class="menu__item">
                                <a href="<?= Url::to('/about') ?>" class="item__link">Про нас</a>
                            </li>
                        </ul>
                    </div>

                    <div class="nav__title">
                        <ul>
                            <li class="menu__item">
                                <a href="<?= Url::to('/composition/') ?>" class="item__link">Склад
                                    сільської ради</a>
                            </li>
                            <li class="menu__item">
                                <a href="<?= Url::to('/document/') ?>" class="item__link">Документи сільської ради</a>
                            </li>
                            <li class="menu__item">
                                <a href="<?= Url::to('/work/') ?>" class="item__link">Робота з громадянами</a>
                            </li>
                            <li class="menu__item">
                                <a href="<?= Url::to('/general/') ?>" class="item__link">Загальні відомості</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9 col-md-9">
                <?= $content ?>
                <!--            <div class="slider">-->
                <!--                <div class="slider_block">-->
                <!--                    <div class="article">-->
                <!--                        <div class="article__news">-->
                <!--                            <div class="row">-->
                <!--                                <div class="col-md-3">-->
                <!--                                    <div class="article__img"><img src="img/ogoloshennya.jpg" alt="Оголошення"></div>-->
                <!--                                </div>-->
                <!--                                <div class="col-md-9"><h2 class="article__title">Святкування Дня села в Троянівці</h2>-->
                <!--                                    <p class="article__text">Вже давно відомо, що читабельний зміст буде заважати-->
                <!--                                        зосередитись людині, яка оцінює композицію сторінки. Сенс використання Lorem-->
                <!--                                        Ipsum полягає в тому, що цей текст має більш-менш нормальне розподілення літер-->
                <!--                                        на відміну від, наприклад, "Тут іде текст. Тут іде текст." Це робить текст-->
                <!--                                        схожим на оповідний. Багато програм верстування та веб-дизайну використовують-->
                <!--                                        Lorem Ipsum як зразок і пошук за терміном "lorem ipsum" відкриє багато-->
                <!--                                        веб-сайтів, які знаходяться ще в зародковому стані. Різні версії Lorem Ipsum-->
                <!--                                        з'явились за минулі роки, деякі випадково, деякі було створено зумисно (зокрема,-->
                <!--                                        жартівливі).</p></div>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                        <div class="article__news">-->
                <!--                            <div class="row">-->
                <!--                                <div class="col-md-3">-->
                <!--                                    <div class="article__img"><img src="img/ogoloshennya.jpg" alt="Оголошення"></div>-->
                <!--                                </div>-->
                <!--                                <div class="col-md-9"><h2 class="article__title">Святкування Дня села в Троянівці</h2>-->
                <!--                                    <p class="article__text">Вже давно відомо, що читабельний зміст буде заважати-->
                <!--                                        зосередитись людині, яка оцінює композицію сторінки. Сенс використання Lorem-->
                <!--                                        Ipsum полягає в тому, що цей текст має більш-менш нормальне розподілення літер-->
                <!--                                        на відміну від, наприклад, "Тут іде текст. Тут іде текст." Це робить текст-->
                <!--                                        схожим на оповідний. Багато програм верстування та веб-дизайну використовують-->
                <!--                                        Lorem Ipsum як зразок і пошук за терміном "lorem ipsum" відкриє багато-->
                <!--                                        веб-сайтів, які знаходяться ще в зародковому стані. Різні версії Lorem Ipsum-->
                <!--                                        з'явились за минулі роки, деякі випадково, деякі було створено зумисно (зокрема,-->
                <!--                                        жартівливі).</p></div>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                        <div class="article__news">-->
                <!--                            <div class="row">-->
                <!--                                <div class="col-md-3">-->
                <!--                                    <div class="article__img"><img src="img/ogoloshennya.jpg" alt="Оголошення"></div>-->
                <!--                                </div>-->
                <!--                                <div class="col-md-9"><h2 class="article__title">Святкування Дня села в Троянівці</h2>-->
                <!--                                    <p class="article__text">Вже давно відомо, що читабельний зміст буде заважати-->
                <!--                                        зосередитись людині, яка оцінює композицію сторінки. Сенс використання Lorem-->
                <!--                                        Ipsum полягає в тому, що цей текст має більш-менш нормальне розподілення літер-->
                <!--                                        на відміну від, наприклад, "Тут іде текст. Тут іде текст." Це робить текст-->
                <!--                                        схожим на оповідний. Багато програм верстування та веб-дизайну використовують-->
                <!--                                        Lorem Ipsum як зразок і пошук за терміном "lorem ipsum" відкриє багато-->
                <!--                                        веб-сайтів, які знаходяться ще в зародковому стані. Різні версії Lorem Ipsum-->
                <!--                                        з'явились за минулі роки, деякі випадково, деякі було створено зумисно (зокрема,-->
                <!--                                        жартівливі).</p></div>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="article">-->
                <!--                        <div class="article__news">-->
                <!--                            <div class="row">-->
                <!--                                <div class="col-md-3">-->
                <!--                                    <div class="article__img"><img src="img/den_nezal.jpg" alt="Оголошення"></div>-->
                <!--                                </div>-->
                <!--                                <div class="col-md-9"><h2 class="article__title">Святкування Дня села в Троянівці</h2>-->
                <!--                                    <p class="article__text">Вже давно відомо, що читабельний зміст буде заважати-->
                <!--                                        зосередитись людині, яка оцінює композицію сторінки. Сенс використання Lorem-->
                <!--                                        Ipsum полягає в тому, що цей текст має більш-менш нормальне розподілення літер-->
                <!--                                        на відміну від, наприклад, "Тут іде текст. Тут іде текст." Це робить текст-->
                <!--                                        схожим на оповідний. Багато програм верстування та веб-дизайну використовують-->
                <!--                                        Lorem Ipsum як зразок і пошук за терміном "lorem ipsum" відкриє багато-->
                <!--                                        веб-сайтів, які знаходяться ще в зародковому стані. Різні версії Lorem Ipsum-->
                <!--                                        з'явились за минулі роки, деякі випадково, деякі було створено зумисно (зокрема,-->
                <!--                                        жартівливі).</p></div>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                        <div class="article__news">-->
                <!--                            <div class="row">-->
                <!--                                <div class="col-md-3">-->
                <!--                                    <div class="article__img"><img src="img/den_nezal.jpg" alt="Оголошення"></div>-->
                <!--                                </div>-->
                <!--                                <div class="col-md-9"><h2 class="article__title">Святкування Дня села в Троянівці</h2>-->
                <!--                                    <p class="article__text">Вже давно відомо, що читабельний зміст буде заважати-->
                <!--                                        зосередитись людині, яка оцінює композицію сторінки. Сенс використання Lorem-->
                <!--                                        Ipsum полягає в тому, що цей текст має більш-менш нормальне розподілення літер-->
                <!--                                        на відміну від, наприклад, "Тут іде текст. Тут іде текст." Це робить текст-->
                <!--                                        схожим на оповідний. Багато програм верстування та веб-дизайну використовують-->
                <!--                                        Lorem Ipsum як зразок і пошук за терміном "lorem ipsum" відкриє багато-->
                <!--                                        веб-сайтів, які знаходяться ще в зародковому стані. Різні версії Lorem Ipsum-->
                <!--                                        з'явились за минулі роки, деякі випадково, деякі було створено зумисно (зокрема,-->
                <!--                                        жартівливі).</p></div>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                        <div class="article__news">-->
                <!--                            <div class="row">-->
                <!--                                <div class="col-md-3">-->
                <!--                                    <div class="article__img"><img src="img/den_nezal.jpg" alt="Оголошення"></div>-->
                <!--                                </div>-->
                <!--                                <div class="col-md-9"><h2 class="article__title">Святкування Дня села в Троянівці</h2>-->
                <!--                                    <p class="article__text">Вже давно відомо, що читабельний зміст буде заважати-->
                <!--                                        зосередитись людині, яка оцінює композицію сторінки. Сенс використання Lorem-->
                <!--                                        Ipsum полягає в тому, що цей текст має більш-менш нормальне розподілення літер-->
                <!--                                        на відміну від, наприклад, "Тут іде текст. Тут іде текст." Це робить текст-->
                <!--                                        схожим на оповідний. Багато програм верстування та веб-дизайну використовують-->
                <!--                                        Lorem Ipsum як зразок і пошук за терміном "lorem ipsum" відкриє багато-->
                <!--                                        веб-сайтів, які знаходяться ще в зародковому стані. Різні версії Lorem Ipsum-->
                <!--                                        з'явились за минулі роки, деякі випадково, деякі було створено зумисно (зокрема,-->
                <!--                                        жартівливі).</p></div>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="tourism">-->
                <!--                        <div class="tourism__img"><img src="img/tourism.png" alt=""></div>-->
                <!--                        <div class="tourism__text"><p>Дізнатися більше про "Мандрівку Поліссям" перейдіть на: <a-->
                <!--                                        class="tourism__link" href="http://green.volyn.ua" target="_blank">green.volyn.ua</a>-->
                <!--                            </p></div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
            </div>
        </div>
    </main>

    <footer>
        <div class="footer">
            <div class="row">
                <div class="col-lg-4"><p>Троянівська сільська рада</p>
                    <p>Офіційний сайт</p></div>
                <div class="col-lg-4"><p>&copy 2018 Всі права захищені</p></div>
                <div class="col-lg-4"><p>Cайт зроблено:</p>
                    <p>DVM Web-Dev</p></div>
            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>