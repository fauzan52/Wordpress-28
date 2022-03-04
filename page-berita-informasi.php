<?php get_header(); ?>

<?php
$ourCurrentPage = get_query_var('paged');
$PaginationPost = new WP_Query(array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'cat'            => 5,
    'paged'          => $ourCurrentPage
));
?>

<body>
<main>
    <div class="site-content clearfix">
        <div class="flex flex-item container mx-auto">
            <?php
            if ($PaginationPost->have_posts()) :
                while ($PaginationPost->have_posts()) :
                    $PaginationPost->the_post();
                    ?>
                    <div class="app-card">
                        <div class="app-card__container app-card-small">
                            <div class="app-card__images">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?= get_the_post_thumbnail_url() ?>" alt="image-post">
                                </a>
                            </div>
                            <div class="app-card__box">
                                <h3>
                                    <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words($post->post_title, 10, ' ...'); ?></a>
                                </h3>
                                <p class="card-text"><?php echo wp_trim_words(get_the_content(), 30, ' ...'); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    </div>
<br>
    <div class="secondary-column">
        <div class="card" >
            <div class="aside">
                <?php dynamic_sidebar('sidebar-pertama'); ?>
            </div>
        </div>
    </div>

    <div id="primary" class="sidebar">
        <?php do_action( 'before_sidebar' ); ?>
        <?php if ( ! dynamic_sidebar( 'sidebar-primary' ) ) : ?>
            <aside id="search" class="widget widget_search">
                <?php get_search_form(); ?>
            </aside>
            <aside id="archives" class"widget">
            <h3 class="widget-title"><?php _e( 'Archives', 'shape' ); ?></h3>
            <ul>
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
            </aside>
            <aside id="meta" class="widget">
                <h3 class="widget-title"><?php _e( 'Meta', 'shape' ); ?></h3>
                <ul>
                    <?php wp_register(); ?>
                    <li><?php wp_loginout(); ?></li>
                    <?php wp_meta(); ?>
                </ul>
            </aside>
        <?php endif; ?>
    </div>
    <div class="clear text-center">
        <br>
        <?php
        echo fauzan_pagination();
        ?>
        <br>
    </div>
    <div class="clear">
        <?php get_footer(); ?>
    </div>
</main>
</body>
