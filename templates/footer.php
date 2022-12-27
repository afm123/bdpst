<footer class="main-footer">
    <nav class="nav">
        <ul class="nav__list container">
            <?php foreach ($categories as $category) { ?>
                <li class="nav__item">
                    <a href="all-lots.php?category=<?= htmlspecialchars($category) ?>"><?= htmlspecialchars($category) ?></a>
                </li>
            <?php }
            ?>
        </ul>
    </nav>

    <div class="main-footer__bottom container">
        <div class="main-footer__copyright">
            <p>© 2022, DealerAuction</p>
            <p>Интернет-аукцион редких и коллекционных товаров</p>
        </div>

        <div class="main-footer__social social">
            
        </div>

        <a class="main-footer__add-lot button" href="add.php">Добавить лот</a>

        <div class="main-footer__developed-by">
            
        </div>
    </div>
</footer>