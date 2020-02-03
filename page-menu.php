<?php get_header(); ?>

<section class="section-banner" style="background-image: url(<?php echo get_theme_file_uri('/images/content-img/2ababoutbanner.jpg') ?>); background-position: center;
  background-size: cover;">
  <div class="banner-content-container">
    <div class="banner-heading-container">
      <h1 class="banner-h1">Menu & Galerija slika</h1>
    </div>
    <div class="banner-paragraph-container">
      <p class="banner-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, possimus. Rem, eligendi iure!</p>
   </div>
  </div>
</section>

<section class="gallery-page" id="gallery-container">
            <div class="gallery-page-container">
                <a href="https://picsum.photos/800/600" data-lightbox="nesto" class="gallery-image-container-link">
                    <img src="https://picsum.photos/800/600" alt="">
                </a>
                <a href="https://picsum.photos/800/601" data-lightbox="nesto" class="gallery-image-container-link">
                    <img src="https://picsum.photos/800/601" alt="">
                </a>
                <a href="https://picsum.photos/800/599" data-lightbox="nesto" class="gallery-image-container-link">
                    <img src="https://picsum.photos/800/599" alt="">
                </a>
                <a href="https://picsum.photos/801/600" data-lightbox="nesto" class="gallery-image-container-link">
                    <img src="https://picsum.photos/801/600" alt="">
                </a>
                <a href="https://picsum.photos/801/601" data-lightbox="nesto" class="gallery-image-container-link">
                    <img src="https://picsum.photos/801/601" alt="">
                </a>
                <a href="https://picsum.photos/799/600" data-lightbox="nesto" class="gallery-image-container-link">
                    <img src="https://picsum.photos/799/600" alt="">
                </a>
            </div>
        </section>

<section class="split-from-middle" id="menu-container">
            <div class="drinks-container">
                <h1 class="menu-heading">KARTA PICA</h1>
                <div class="menu-card" id="menu-card-1">
                    <img src="<?php echo get_theme_file_uri('/images/menu-img/01.jpg'); ?>"/>
                </div>
                <div class="menu-card" id="menu-card-2">
                    <a href="<?php echo get_theme_file_uri('/images/menu-img/02.jpg'); ?>" data-lightbox="drinks-items">
                        <img src="<?php echo get_theme_file_uri('/images/menu-img/02.jpg'); ?>"/>
                    </a>
                </div>
                <div class="menu-card" id="menu-card-3">
                    <a href="<?php echo get_theme_file_uri('/images/menu-img/03.jpg'); ?>" data-lightbox="drinks-items">
                        <img src="<?php echo get_theme_file_uri('/images/menu-img/03.jpg'); ?>"/>
                    </a>
                </div>
            </div>

            <div class="food-container">
                <h1 class="menu-heading">JELOVNIK</h1>
                <div class="menu-card" id="menu-card-11">
                    <img src="<?php echo get_theme_file_uri('/images/menu-img/01.jpg'); ?>"/>
                </div>
                <div class="menu-card" id="menu-card-4">
                    <a href="<?php echo get_theme_file_uri('/images/menu-img/04.jpg'); ?>" data-lightbox="food-items">
                        <img src="<?php echo get_theme_file_uri('/images/menu-img/04.jpg'); ?>"/>
                    </a>
                </div>
                <div class="menu-card" id="menu-card-5">
                    <a href="<?php echo get_theme_file_uri('/images/menu-img/05.jpg'); ?>" data-lightbox="food-items">
                        <img src="<?php echo get_theme_file_uri('/images/menu-img/05.jpg'); ?>"/>
                    </a>
                </div>
                <div class="menu-card" id="menu-card-6">
                    <a href="<?php echo get_theme_file_uri('/images/menu-img/06.jpg'); ?>" data-lightbox="food-items">
                        <img src="<?php echo get_theme_file_uri('/images/menu-img/06.jpg'); ?>"/>
                    </a>
                </div>
            </div>
        </section>

<?php get_footer(); ?>