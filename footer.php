<footer>
        <div class="footer">
            <section class="footer-info">
                <h2 id="footer-logo"><a href="#">Caché</a></h2>
                <p class="phone-p">Broj telefona: <strong>+381 12 3456789</strong></p>
                <p class="address-p">Adresa: <strong>Humska 8, 11000 Beograd</strong></p>
            </section>

            <section class="work-hours">
                <h3>RADNO VREME</h3>
                <p class="hours-p"><strong>00-24h</strong></p>
            </section>

            <section class="second-nav">
                <nav class="footer-nav">
                    <ul>
                        <li><a href="<?php echo site_url() ?>">Početna</a></li>
                        <li><a href="<?php echo site_url('/o-nama') ?>">O nama</a></li>
                        <li><a href="<?php echo site_url('/menu') ?>">Menu</a></li>
                        <li><a href="<?php echo site_url('/blog') ?>">Blog</a></li>
                        <li><a href="<?php echo site_url('/kontakt') ?>">Kontakt</a></li>
                    </ul>
                </nav>
            </section>

            <section class="social">
                <h3>PRATITE NAS</h3>
                <div class="social-icons">
                    <a href="https://www.facebook.com/cacherestoran/" target="_blank"><i class="fab fa-facebook fa-3x"></i></a>
                    <a href="https://www.instagram.com/cacherestoran/" target="_blank"><i class="fab fa-instagram fa-3x"></i></a>
                </div>
            </section>
        </div>
        <p class="copyright-p">
            &copy; Restaurant <b>Caché</b> 2020. Sva prava zadržana.
        </p>
    </footer>

    <?php wp_footer(); ?>
    
    </body>
</html>
