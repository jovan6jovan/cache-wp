<?php get_header(); ?>

<div class="error404-container">
    <h1>Greška 404</h1>
    <img class="error-img" src="<?php echo get_theme_file_uri('/images/content-img/lost.png') ?>" alt="">
    <div class="error-paragraphs">
        <p>Izvinite, stranica koju tražite ne postoji.</p>
        <p>Nazad na <a href="<?php echo site_url() ?>">početnu</a></p>
    </div>
</div>

<?php get_footer(); ?>