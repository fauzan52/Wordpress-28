<?php global $fauzanredux; ?>
<?php get_header(); ?>
<?php
$ourCurrentPage = get_query_var('paged');
?>

<body>
<main>
<?php
    get_template_part( 'template-parts/content', 'top' );
?>
<br><br>
<!--    --><?php
//    $primarypost = new WP_Query('posts_per_page=1'); ?>
<!--    --><?php
//    while ($primarypost->have_posts()) :
//    $primarypost->the_post();
//    ?>
<!--    <div class="primary-column">-->
<!--        <div class="app-card">-->
<!--            <div class="app-card__container">-->
<!--                <div class="app-card__images">-->
<!--                    <a href="--><?php //the_permalink(); ?><!--">-->
<!--                        <img src="--><?//= get_the_post_thumbnail_url() ?><!--" alt="image-post">-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="app-card__box">-->
<!--                    <h3>-->
<!--                        <a href="--><?php //the_permalink(); ?><!--">--><?php //echo wp_trim_words($post->post_title, 10, ' ...'); ?><!--</a>-->
<!--                    </h3>-->
<!--                    <p class="card-text">--><?php //echo wp_trim_words(get_the_content(), 60, ' ...'); ?><!--</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        --><?php
//        endwhile;
//        wp_reset_postdata();
//        ?>
<!--        <br><br>-->
<!--    </div>-->

    <div class="flex">
        <?php
        $SecondaryPost = new WP_Query(array(
            'post_type'      => 'post',
            'posts_per_page' => 3,
//            'offset'         => 1,
            'paged'          => $ourCurrentPage
        ));
        ?>
        <?php
        while ($SecondaryPost->have_posts()) : $SecondaryPost->the_post();
            ?>
            <div class="app-card">
                <div class="app-card__container">
                    <div class="app-card__images">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="image-post">
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
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </div>
    </div>
    <br>

    <div class="latestpost">
        <div class="latestpost-title">
            <h1>LATEST POST</h1>
        </div>
        <div class="latestpost-text">
            <div class="card">
            <ul>
                <?php
                $latestpost = new WP_Query('posts_per_page=5'); ?>
                <?php
                while ($latestpost->have_posts()) : $latestpost->the_post();
                    ?>
                    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </ul>
            </div>
        </div>
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