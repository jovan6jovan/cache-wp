<?php get_header(); ?>

<section class="hero">
        <h1 class="hero-h">Tri do četiri reči ovde</h1>
        <p class="hero-p">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, asperiores
            omnis animi repellendus a hic laboriosam molestias enim at saepe, rem
            dignissimos vitae repudiandae, odio cum ipsa explicabo fugiat rerum.
        </p>
        <div class="btns-container">
            <a href="<?php echo site_url('/kontakt') ?>" class="btn hero-btn hero-contact-btn">
                Kontakt info
            </a>
            <a href="<?php echo site_url('/menu') ?>" class="btn hero-btn hero-menu-btn">
                Pogledajte menu
            </a>
        </div>
        <a class="scroll-down" id="scroll-down" href="#about"></a>
        <p class="scroll-down-p">Scroll down</p>
    </section>

    <section class="about" id="about">
        <div class="about-container">
            <h2>Tekst o nama</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat inventore
                eius numquam ad magnam quam cumque saepe. Consequuntur nesciunt architecto
                corrupti quia enim, quod necessitatibus, tempora deserunt dicta nostrum
                beatae!
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, sed
                perferendis dolores, modi, natus dignissimos odit saepe iste accusamus
                porro obcaecati adipisci reprehenderit asperiores officiis id quo cumque
                cupiditate nostrum.
            </p>
            <a href="<?php echo site_url('/o-nama') ?>" class="btn about-btn">Pročitaj više</a>
        </div>
        <div class="about-img-container">
            <img src="http://u.cubeupload.com/jovan6jovan/cacheenterijer.jpg" alt="Restaurant Cache interior"
                class="interior-img" />
        </div>
    </section>

    <section class="services">
        <div class="service-container">
            <img src="https://sendeyo.com/up/d/7827ed0cd7" alt="catering" class="svg-img" />
            <h3>Ketering</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="service-container">
            <img src="https://sendeyo.com/up/d/b9d4db2cbd" alt="parking" class="svg-img" />
            <h3>Parking</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="service-container">
            <img src="https://sendeyo.com/up/d/b952dca6d6" alt="party" class="svg-img" />
            <h3>Proslave</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="service-container">
            <img src="https://sendeyo.com/up/d/20ebf23ce0" alt="hours" class="svg-img" />
            <h3>Non-Stop</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
    </section>

    <section class="menu-gallery">
        <div class="menu-gallery-container">
            <section class="menu">
                <h4 class="menu-h4">Menu</h4>
                <img src="http://u.cubeupload.com/jovan6jovan/menu.jpg" alt="Cache menu" class="menu-img" />
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab nihil rerum
                    quisquam atque dignissimos reiciendis aperiam? Ut sunt impedit placeat.
                </p>
                <a href="<?php echo site_url('/menu#menu-container') ?>" class="btn menu-btn">Saznajte više</a>
            </section>

            <section class="gallery">
                <h4 class="gallery-h4">Galerija</h4>
                <img src="http://u.cubeupload.com/jovan6jovan/steak.jpg" alt="Cache gallery" class="gallery-img" />
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab nihil rerum
                    quisquam atque dignissimos reiciendis aperiam? Ut sunt impedit placeat.
                </p>
                <a href="<?php echo site_url('/menu#gallery-container') ?>" class="btn gallery-btn">Pogledajte slike</a>
            </section>
        </div>
    </section>

    <section class="blog-posts">
        <section class="blog-cards-container">
            <?php 
                $homePagePosts = new WP_Query(array(
                    'posts_per_page' => 3
                ));


                
                while($homePagePosts->have_posts()) {
                    $homePagePosts->the_post(); ?>

            <div class="card">
                <div class="card-header" id="header">
                    <img src="http://u.cubeupload.com/jovan6jovan/insidetherestaurantw.jpg" alt="header" />
                </div>
                <div class="card-content">
                    <h3 class="card-title"><?php the_title(); ?></h3>
                    <p class="card-excerpt">
                        <?php echo wp_trim_words(get_the_content(), 25); ?>
                    </p>
                    <div class="author-and-button">
                        <div class="author-info front-author-info">
                            <strong class="name front-name"><?php the_author_posts_link(); ?></strong>
                            <small class="date front-date"><?php the_time('d.m.Y'); ?></small>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="btn blog-post-btn">Pročitaj više</a>
                    </div>
                </div>
            </div>

            <?php } wp_reset_postdata(); ?>
        </section>

        <a href="<?php echo site_url("/blog"); ?>" class="btn blog-more">Više sa bloga</a>
    </section>

<?php get_footer(); ?>