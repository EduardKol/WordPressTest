<?php get_header(); ?>
    <!--Что ты такое?-->
    <div class="about" id="about" style="background: url(<?= CFS()->get('background_white'); ?>) center 101% repeat-x, 
    url(<?= CFS()->get('background_black'); ?>) center 101% repeat-x, #1d1d1d;">
        <div class="container">
            <div class="about__inner">
                <?php 
                $loop = CFS()->get('card');
                foreach ($loop as $row) {
                    ?>
                <div class="about__item">
                    <div class="about__year"><?= $row ['card_year'] ?></div>
                    <div class="about__text"><?= $row ['card_text'] ?></div>
                </div>
                    <?php
                }
                ?>
                
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
    <?php get_footer(); ?>