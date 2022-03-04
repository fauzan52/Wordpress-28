<?php get_header(); ?>

<?php

global $post;
$query = getPostCustom('portofolio', 1, -1, 'Bank Central Asia', [], [], false, false);

//var_dump($query);
//die;
?>
<body>
<main>
    <?php
    if ($query->have_posts()):
        while ($query->have_posts()):
            $query->the_post();

    var_dump(get_permalink(get_the_ID()));
        endwhile;
    endif;
    ?>
</main>

<!--Memanggil Widget-->
<aside>
    <?php dynamic_sidebar('sidebar1') ?>
</aside>
<div class="clear"></div>
<?php get_footer(); ?>
</body>