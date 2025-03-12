
<footer class="footer">
        <div class="footer__wrapper">
            <a href="/" class="logo">
                <img class="logo__image" src="<?= get_template_directory_uri()?>/media/icons/logo.svg" alt="CryptoVerse's Logo">
            </a>
            <ul class="footer__nav">

            <?php 
                $menu_items = wp_get_nav_menu_items('navigation'); // Замените на ваш menu location
                if ($menu_items) {
                    foreach ($menu_items as $item) {
            ?>

                <li class="footer__item">
                    <a class="footer__link scroll-item" href="<?= $item->url ?>"><?= $item->title ?></a>
                </li>

            <?php
                    }
                }
            ?>
               
            </ul>
            <ul class="contacts">
                <li class="contacts__item">
                    <a href="/" class="contacts__link">
                        <img class="contacts__logo linkedin" src="<?= get_template_directory_uri()?>/media/icons/linkedin.svg" alt="LinkedIn's logo">
                    </a>
                </li>
                <li class="contacts__item">
                    <a href="/" class="contacts__link">
                        <img class="contacts__logo twitter" src="<?= get_template_directory_uri()?>/media/icons/twitter.svg" alt="X's logo">
                    </a>
                </li>
                <li class="contacts__item">
                    <a href="/" class="contacts__link">
                        <img class="contacts__logo telegram" src="<?= get_template_directory_uri()?>/media/icons/telegram.svg" alt="Telegram's logo">
                    </a>
                </li>
            </ul>
        </div>
        <div class="terms">
            <p class="terms__text">© 2025 CryptoVerse Academy. All rights reserved</p>
            <div class="terms__wrapper">
                <a class="terms__link" href="/">Terms of Service</a>
                <a class="terms__link" href="/">Privacy Polisy</a>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>

