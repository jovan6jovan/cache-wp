<?php get_header(); ?>

<?php while(have_posts()) {
    the_post(); ?>
    <section class="section-banner" style="background-image: url(<?php echo get_theme_file_uri('/images/gallery-img/11.jpg') ?>); background-position: center;
  background-size: cover;">
        <div class="banner-content-container">
            <div class="banner-heading-container">
                <h1 class="banner-h1"><?php the_title(); ?></h1>
            </div>
        </div>
    </section>

    <section class="blog">
        <div class="blog-container">
            <article class="post single-post-article">
                <div class="post-container single-post-container">
                <div class="post-content single-post-content">
                    <div class="author-info-and-post-categories-container mt-16">
                        <div class="blog-author-info">
                                <span>Autor: <a href="#"><strong class="name"><?php the_author_posts_link(); ?></strong></a></span> 
                                <small class="date"><?php the_time('d.m.Y'); ?></small>
                        </div>
                        <div class="post-categories">
                            <?php echo get_the_category_list(', '); ?>
                        </div>
                    </div>
                    
                    <hr class="post-content-hr">
                    
                    <p class="post-content-p"><?php the_content(); ?></p>
                </div>
                
                <div class="single-post-tags">
                    <h3>Tagovi ovog članka</h3>
                    <div class="single-post-tags-container">
                        <?php echo get_the_tag_list(); ?>
                    </div>
                </div>
                </div>
            </article>

            <div class="sidebar">
            <?php get_search_form(); ?>
            <div class="categories">
                <h2>Kategorije</h2>
                <ul>
                <li><a href="#">Žurke</a></li>
                <hr class="categories-hr">
                <li><a href="#">Recepti</a></li>
                <hr class="categories-hr">
                <li><a href="#">Vesti</a></li>
                <hr class="categories-hr">
                </ul>
            </div>
            <div class="tags">
                <h2>Tagovi</h2>
                <div class="tags-container">
                    <?php echo get_the_tag_list(); ?>
                </div>
            </div>
            </div>
    </div>
</section>
<?php }

get_footer();

?>