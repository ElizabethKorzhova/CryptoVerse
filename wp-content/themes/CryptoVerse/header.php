<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CryptoServe – an educational platform that demystifies cryptocurrency and blockchain technology.">
    <meta name="keywords" content="cryptocurrency, blockchain, investing, trading, smart contracts">
    <meta property="og:title" content="CryptoServe – Learn About Cryptocurrency & Blockchain">
    <meta property="og:description" content="Join CryptoServe and unlock the potential of crypto and blockchain! Learn about cryptocurrency basics, trading strategies, and blockchain applications.">
    <title><?= the_title()?></title>
</head>
<body>
    <header class="header">
        <a href="/" class="logo header__link">
             <img class="logo__image" src="<?= get_template_directory_uri()?>/media/icons/logo.svg" alt="CryptoVerse's Logo"> 
        </a>
        <nav class="nav">
            <div class="burger">
                <div class="burger__line"></div>
                <div class="burger__line"></div>
                <div class="burger__line"></div>
            </div>
            <ul class="nav__menu">
            <?php 
                $menu_items = wp_get_nav_menu_items('navigation'); // Замените на ваш menu location
            
                if ($menu_items) {
                    foreach ($menu_items as $item) {

            ?>
                <li class="nav__item">
                    <a class="nav__link scroll-item" href="<?= $item->url ?>"><?= $item->title ?></a>
                </li>
            <?php
                    }
                }
            ?>
            </ul>
        </nav>
    </header>
