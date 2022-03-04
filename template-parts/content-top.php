<section class="content-top">
    <?php
    $FirstPost = new WP_Query(array(
        'post_type'      => 'post',
        'posts_per_page' => 1,
    ));
    ?>
    <?php if ($FirstPost->have_posts()) : ?>
        <div class="post-highlight">
            <?php while ($FirstPost->have_posts()) : $FirstPost->the_post(); ?>
                <div class="post-highlight__content__title">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="image-post">
                    </a>
                </div>
                <div class="jp-post-highlight__content-content">
                    <?php
                    $cat     = get_the_category();
                    $catName = $cat[0]->cat_name;
                    ?>
                    <span class="label-top"><?= $catName ?></span><br>
                    <span class="title-top"><?= the_title(); ?></span>
                </div>
                </a>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

        </div>
    <?php endif; ?>

    <div class="row row-card-mini" id="card-top-mini">
        <?php
        // code query
        $SecondPost = new WP_Query(array(
            'post_type'      => 'post',
            'posts_per_page' => 3,
            'offset'         => 1,
            'order'          => 'meta_value',
            'meta_query'     => array(
                'key'     => 'entry_views',
                'compare' => "=",
            )
        )); ?>

        <?php if ($SecondPost->have_posts()) : ?>
            <?php while ($SecondPost->have_posts()) : $SecondPost->the_post(); ?>

                <div class="col-4">
                    <div class="card card-mini">
                        <div class="card-body">
                            <div class="card__media">
                                <a href="<?php the_permalink() ?>">
                                    <?php get_the_post_thumbnail_url(); ?>
                                </a>
                            </div>
                            <div class="headline-content">
                                <?php
                                $cat     = get_the_category();
                                $catName = $cat[0]->cat_name;
                                ?>
                                <span class="label-top"><?= $catName ?></span><br>
                                <a class="title-top" href="<?php the_permalink(); ?>">
                                    <span><?= the_title(); ?> </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <?php
            for ($x = 0; $x <= 2; $x++) { ?>
                <div class="col-4">
                    <div class="card card-mini">
                        <div class="card-body">
                            <div class="card__media">
                                <a href="<?php the_permalink() ?>">
                                    <?php get_the_post_thumbnail_url(); ?>
                                </a>
                            </div>
                            <div class="headline-content">

                                <span class="label-top">Uncategories</span><br>
                                <a class="title-top" href="#">
                                    <span>No Post Found</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
            ?>
        <?php endif; ?>
    </div>
</section>
