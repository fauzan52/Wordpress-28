<?php get_header();  ?>
<main>
    <?php
    if( have_posts() ): ?>
    <p class="sub_judul">
        <?php
            if(is_category()){
                echo 'Kategori : '; single_cat_title();
            }

            elseif (is_author()){
                echo 'Author : ' . get_the_author();
            }

            else {
                echo 'Halaman arsip' ;
            }
        ?>
    </p>
    <?php
        while (have_posts() ): the_post();
        get_template_part('content');
        endwhile;
    else:
        echo 'Tidak ada postingan';
    endif;

    ?>
</main>
<?php get_footer(); ?>
