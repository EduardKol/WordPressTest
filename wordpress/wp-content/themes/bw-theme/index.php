<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="menu__desktop">
                <ul class="menu">
            <li class="menu__item active"><a href="#">Родное дерево</a></li>
            <li class="menu__item"><a href="#about">Что ты такое?</a></li>
            <li class="menu__item"><a href="#team">Банда</a></li>
            <li class="menu__item"><a href="#"><img src="img/logo.png" alt="" class="logo"></a></li>
            <li class="menu__item"><a href="#provide">Орехи и шишки</a></li>
            <li class="menu__item"><a href="#">Сказки-рассказки</a></li>
            <li class="menu__item"><a href="#contact">Постучать в дупло</a></li>
        </ul>
    </nav>
    <nav class="menu__mobile">
        <div class="menu__inner">
        <a href="#"><img src="img/logo.png" alt="" class="logo"></a>
        <div class="menu__burger"><span>toggle menu</span></div>
    </div>
        <ul class="menu">
            <li class="menu__item active"><a href="#">Родное дерево</a></li>
            <li class="menu__item"><a href="#about">Что ты такое?</a></li>
            <li class="menu__item"><a href="#team">Банда</a></li>
            <li class="menu__item"><a href="#provide">Орехи и шишки</a></li>
            <li class="menu__item"><a href="#">Сказки-рассказки</a></li>
            <li class="menu__item"><a href="#contact">Постучать в дупло</a></li>
        </ul>
    </nav>
    <div class="header__content">
        <h1 class="header__title">Белкино дупло</h1>
        <p class="header__text">Хватит притворяться травоядным!</p>
        <a href="" class="header__button">Узнать про белок больше</a>
    </div>
        </div>
    </header>
    <!--Что ты такое?-->
    <div class="about" id="about">
        <div class="container">
            <div class="about__inner">
                <div class="about__item">
                    <div class="about__year">2020</div>
                    <div class="about__text">Стали люди жить в дуплах своих и жили так два года...</div>
                </div>
                <div class="about__item">
                    <div class="about__year">2035</div>
                    <div class="about__text">Сервис услуг по лущению шишек и колке орехов преобразовывается в международную корпорацию "Расколотим и полущим Inc"</div>
                </div>
                <div class="about__item">
                    <div class="about__year">2050</div>
                    <div class="about__text">Разделение стран на два блока "Ударники" и "Подавители", вековой спор надо орехи разбивать или раздавливать перешел в горячую фазу.</div>
                </div>
                <div class="about__item">
                    <div class="about__year">2150</div>
                    <div class="about__text">Корпорация "Расколотим и полущим Inc" создает международную организацию "Лига Лущения", всеобщий мир на планете.</div>
                </div>
            </div>
        </div>
    </div>
    <!--Банда-->
    <div class="team" id="team">
        <div class="container">
            <div class="block__head">
                <h2 class="block__title">Наша банда</h2>
                <p class="block__text">We are small but effective and ...</p>
            </div>
            <div class="team__inner">
                    <div class="team__item">
                                <img class="team__item-img" src="img/team1.jpg" alt="">
                                <h3 class="team__item-title">Белко Один</h3>
                                <p class="team__item-text">Главный ударник всей рощи</p>
                            <div class="team__icon-box">
                                <a href="#"><i class="icon-vkontakte"></i></a>
                                <a href="#"><i class="icon-whatsapp"></i></a>
                            </div>
                    </div>
                    <div class="team__item">
                        <img class="team__item-img" src="img/team2.jpg" alt="">
                            <h3 class="team__item-title">Лущенко из Дубравии</h3>
                            <p class="team__item-text">Лучший лущитель шишек к западу от березняка</p>
                        <div class="team__icon-box">
                            <a href="#"><i class="icon-vkontakte"></i></a>
                            <a href="#"><i class="icon-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="team__item">
                            <img class="team__item-img" src="img/team3.jpg" alt="">
                            <h3 class="team__item-title">Летун</h3>
                            <p class="team__item-text">Координатор по сбору и поиску ресурсов</p>
                        <div class="team__icon-box">
                            <a href="#"><i class="icon-vkontakte"></i></a>
                            <a href="#"><i class="icon-whatsapp"></i></a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
<!-- Орехи и шишки -->
<div class="provide" id="provide">
    <div class="container">
        <div class="block__head inverse">
            <h2 class="block__title">Мы предоставляем вам всё</h2>
            <p class="block__text">Может быть, не всё, но кое-что мы вам предоставим.</p>
        </div>
        <div class="provide__inner">
                <div class="provide__item">
                            <i class="icon-chart-line"></i>
                            <h3 class="provide__item-title">Лесная аналитика</h3>
                            <p class="provide__item-text">Всё что вы хотите знать о рынке орехов</p>
                </div>
                <div class="provide__item">
                    <i class="icon-heart"></i>
                    <h3 class="provide__item-title">Мы любим орехи</h3>
                    <p class="provide__item-text">Вы тоже их полюбите</p>
                </div>
            <div class="provide__item">
                <i class="icon-upload-cloud-outline"></i>
                <h3 class="provide__item-title">Облачные решения</h3>
                <p class="provide__item-text">Орехи туда не лезут, но польза всё равно есть...</p>
            </div>
        </div>
    </div>
</div>   
<!-- Постучать в дупло -->
<div class="contact" id="contact">
    <div class="container">
        <div class="block__head inverse">
            <h2 class="block__title">Наши контакты</h2>
            <p class="block__text">Стучите громче</p>
        </div>
        <div class="contact__inner">
            <div class="contact__icon-box">
                <div class="contact__item">
                    <i class="icon-phone"></i>
                    <div class="contact__text"><a href="tel:88005553535">8-800-555-35-35</a></div>
                </div>
                <div class="contact__item">
                    <i class="icon-location"></i>
                    <div class="contact__text"><a href="https://goo.gl/maps/aRKT3CWJFs6AnMm76" target="_blank">адрес какого-то дупла</a></div>
                </div>
                <div class="contact__item">
                    <i class="icon-mail"></i>
                    <div class="contact__text"><a href="mailto:vduplemesta@mail.net"> виртуальное дупло</a></div>
                </div>
            </div>
                <form action="" class="contact__form">
                <input class="contact__name" type="text" placeholder="Имя, звание, сколько лет">
                <input class="contact__email" type="email" placeholder="В каком полку служили">
                <input class="contact__number" type="number" placeholder="Цифры">
                <textarea class="contact__textarea" placeholder="Стучать тут..."></textarea>
                <input type="submit" class="contact__button" value="Отправить">
                </form>
        </div>
    </div>
</div>
    <!--подвал-->
    <footer>
        <div class="container">
            <div class="footer__text">
                Copyright &copy; Ken and Ham. All права reserved.
            </div>
        </div>
    </footer>

    
    <?php wp_footer(); ?>
</body>
</html>