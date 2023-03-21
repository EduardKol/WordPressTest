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
            <li class="menu__item"><?php the_custom_logo(); ?></li>
            <li class="menu__item"><a href="#provide">Орехи и шишки</a></li>
            <li class="menu__item"><a href="#">Сказки-рассказки</a></li>
            <li class="menu__item"><a href="#contact">Постучать в дупло</a></li>
        </ul>
    </nav>
    <nav class="menu__mobile">
        <div class="menu__inner">
        <?php the_custom_logo(); ?>
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