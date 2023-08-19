<?php

// Customizer Varibles 
$logo = get_theme_mod('company_logo');
$footerText = get_theme_mod("text");

$facebook = get_theme_mod("facebook");
$twitter = get_theme_mod("twitter");
$pinterest = get_theme_mod("pinterest");
$youtube = get_theme_mod("youtube");

$monday = get_theme_mod('monday');
$tuesday = get_theme_mod('tuesday');
$wednesday = get_theme_mod('wednesday');
$thursday = get_theme_mod('thursday');
$friday = get_theme_mod('friday');
$saturday = get_theme_mod('saturday');
$sunday = get_theme_mod('sunday');
$footerText = get_theme_mod("text");

?>

<footer class="mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <a title="homepage" href="<?php echo site_url("/") ?>"><img class="footer__logo mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-black.png" alt="logo" /></a>

                <?php if ($footerText != null) { ?>
                    <p class="footer__text"><?php echo $footerText; ?></p>
                <?php } ?>

                <div class="footer__socials mt-3">
                    <?php if ($facebook != null) { ?>
                        <a title="facebook" href="<?php echo $facebook; ?>"><i class="fa-brands fa-facebook-f"></i></a>
                    <?php } ?>

                    <?php if ($twitter != null) { ?>
                        <a title="twiiter" href="<?php echo $twitter; ?>"><i class="fa-brands fa-twitter"></i></a>
                    <?php } ?>

                    <?php if ($pinterest != null) { ?>
                        <a title="pintrest" href="<?php echo $pinterest; ?>"><i class="fa-brands fa-pinterest-p"></i></a>
                    <?php } ?>

                    <?php if ($youtube != null) { ?>
                        <a title="youtube"  href="<?php echo $youtube; ?>"><i class="fa-brands fa-youtube"></i></a>
                    <?php } ?>
                </div>
                <p class="mt-3">Private Policy | © 2023 Gym</p>
            </div>

            <div class="col-12 col-md-4">
                <h5>Our Classes</h5>
                <div class="line"></div>
                <ul class="footer__list mt-4">
                    <?php
                    $classes = new WP_Query(array(
                        "posts_per_page" => 8,
                        "post_type" => "classes",
                        "orderby" => "meta_value_num",
                        "order" => "ASC"
                    ));

                    while ($classes->have_posts()) {
                        $classes->the_post();
                    ?>
                        <li class="mt-1 color-grey"> <a title="<?php echo the_title(); ?>" class="text-decoration-none" href="<?php the_permalink() ?>"><?php echo the_title(); ?></a></li>
                    <?php
                    }
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>

            <div class="col-12 col-md-4">
                <h5>Working Hours</h5>
                <div class="line"></div>
                <ul class="footer__list mt-4">
                    <?php if ($monday != null) { ?>
                        <li class="mb-1">Mon: <?php echo $monday; ?></li>
                    <?php } ?>

                    <?php if ($tuesday != null) { ?>
                        <li class="mb-1">Tues: <?php echo $tuesday; ?></li>
                    <?php } ?>

                    <?php if ($wednesday != null) { ?>
                        <li class="mb-1">Wed: <?php echo $wednesday; ?></li>
                    <?php } ?>

                    <?php if ($thursday != null) { ?>
                        <li class="mb-1">Thurs: <?php echo $thursday; ?></li>
                    <?php } ?>

                    <?php if ($friday != null) { ?>
                        <li class="mb-1">Fri: <?php echo $friday; ?></li>
                    <?php } ?>

                    <?php if ($saturday != null) { ?>
                        <li class="mb-1">Sat: <?php echo $saturday; ?></li>
                    <?php } ?>

                    <?php if ($sunday != null) { ?>
                        <li class="mb-1">Sun: <?php echo $sunday; ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</footer>
<section class="base__footer">
    <a class="text-decoration-none" href="benwest.dev" target="_blank">
        <p class="pt-3">Site By Ben West </p>
    </a>
    <div class="line"></div>
</section>
<?php wp_footer(); ?>
</div>
</body>

</html>