<?php get_header(); ?>

<section class="section-banner">
  <div class="banner-content-container">
    <div class="banner-heading-container">
      <h1 class="banner-h1"><?php the_archive_title(); ?></h1>
    </div>
    <div class="banner-paragraph-container">
      <p class="banner-p"><?php the_archive_description(); ?></p>
   </div>
  </div>
</section>

<section class="blog">
  <h1>Svi članci</h1>

  <div class="blog-container"> 
    <div class="posts-container">
        <?php 
            while (have_posts()) {
                the_post(); ?>
                <article class="post">
                    <div class="post-container">
                        <div class="post-img">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/content-img/blog1.jpg" alt="">
                            </a>
                        </div>
                        <div class="post-content">
                            <a href="<?php the_permalink(); ?>" class="post-title">
                                <h2><?php the_title(); ?></h2>
                            </a>
                            <div class="author-info-and-post-categories-container">
                                <div class="blog-author-info">
                                    <span>Autor: <a href="#"><strong class="name"><?php the_author_posts_link(); ?></strong></a></span> 
                                    <small class="date"><?php the_time('d.m.Y'); ?></small>
                                </div>
                                <div class="post-categories">
                                    <?php echo get_the_category_list(', '); ?>
                                </div>
                            </div>

                            <hr class="post-content-hr">

                            <p class="post-content-p">
                                <?php the_excerpt(); ?>
                            </p>
                        </div>
                    </div>
                </article>
            <?php } ?>
            <div class="pagination-links-container">
                <?php echo paginate_links(); ?>
            </div>
    </div> 

    <div class="sidebar">
      <?php get_search_form(); ?>
      <div class="categories">
        <h3>Kategorije</h3>
        <ul>
          <li>
            <?php echo get_the_category_list('<hr class="categories-hr">'); ?>
          </li>     
        </ul>
      </div>
      <div class="tags">
        <h3>Tagovi</h3>
        <div class="tags-container">
          <?php echo get_the_tag_list(); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>