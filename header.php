<?php
global $fauzanredux;
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="./assets//font-awesome/all.min.css">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
          integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <!--    <marquee>ALAMAT TOKO : TAMAN BUKIT CIBOGO, CIMAHI</marquee>-->
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="<?php echo $fauzanredux['favicon']; ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <!--                <a href="--><?php //echo esc_url(home_url('/')); ?><!--"><img src="-->
    <?php //echo $fauzanredux['logo']['url']; ?><!--" width="72" height="72"></a>-->
    <!--                <a href="--><?php //echo esc_url(home_url('/')); ?><!--"><img src="-->
    <?php //echo $fauzanredux['header-logo']['url']; ?><!--" width="400" height="72"></a>-->
    <!--                <a href="--><?php //echo esc_url(home_url('/')); ?><!--"><img src="-->
    <?php //echo $fauzanredux['iklan-logo']['url']; ?><!--" width="850" height="72"></a>-->
    <!--                <div class="clear">--><?php //get_search_form(); ?><!--</div>-->
    <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo $fauzanredux['logo']['url']; ?>" width="72"
                                                         height="72"></a>
    <!--    <a href="--><?php //echo esc_url(home_url('/')); ?><!--"><img src="-->
    <?php //echo $fauzanredux['header-logo']['url']; ?><!--"-->
    <!--                                                         width="400" height="72"></a>-->
    <ul class="navigation">
        <?php
        $args = array('theme_location' => 'main_menu');
        wp_nav_menu($args);
        ?>
        <div class="font-kapital">
            <?php wp_register(); ?>
            <li><?php wp_loginout(); ?></li>
            <?php wp_meta(); ?>
        </div>

    </ul>
    <form role="search" method="get" id="search-form" action="<?php echo esc_url(home_url('/')); ?>">
        <div class="search">
            <input type="text" placeholder="Search" name="s" id="search-input"
                   value="<?php echo esc_attr(get_search_query()); ?>">
            <i class="fa fa-search" aria-hidden="true"></i>
        </div>
    </form>
</header>
</body>
</html>

