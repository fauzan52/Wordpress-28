<?php get_header(); ?>
<body>
<main>
    <div class="main-split">
        <div class="card">
            <div class="card-body text-center">
                <?php the_post_thumbnail(); ?>
                <div class="card-title text-left">
                    <h1><?php echo get_the_title(); ?></h1>
                    <p>Created on <?php echo get_the_date(); ?>
                        | <?php echo 'Category : ' . get_the_category($id)[0]->name . ' '; ?></>
                    <h5><?php echo the_content(); ?></h5>
                </div>
            </div>
        </div>
        <br>
        <a href="/wordpress" class="btn btn-success">Back to Home</a>
        <br>
        <br>
</main>
<div class="clear"></div>
<?php get_footer(); ?>
</body>
