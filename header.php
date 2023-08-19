<?php
// Customizer Varibles 
$logo = get_theme_mod('company_logo');

// Menu
$menuLocations = get_nav_menu_locations();
if (isset($menuLocations['header'])) {
    $header_links = wp_get_nav_menu_items($menuLocations['header']);
} else {
    $header_links = null;
}
?>

<!DOCTYPE html>
<html lang="<?php echo language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title><?php echo bloginfo(); ?>"</title>
    <meta name="theme-color" content="#000000">
</head>

<body <?php body_class(); ?>>
    <div id="wrapper">
        <header class="header">
            <div class="container">
                <nav class="row">
                    <div class="col-12 col-lg-3">
                        <a title="hompage" href="<?php echo site_url("/") ?>"><img class="navigation__logo" src="<?php echo $logo; ?>" alt="<?php echo get_bloginfo("name"); ?>" /></a>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="navigation__links">
                            <?php foreach ($header_links as $item) { ?>
                                <li class="navigation__link list-unstyled m-1">
                                    <a title="<?php echo $item->title; ?>" href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-3">
                        <a class="text-decoration-none" href="<?php echo site_url('/class'); ?>"><button class="navigation__contact__btn"><img class="navigation__contact__btn__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/plus.png" alt="cross">JOIN A CLASS</button></a>
                        <div class="d-flex justify-content-end">
                            <div class="navigation__burger">
                                <div class="line__one"></div>
                                <div class="line__two"></div>
                                <div class="line__three"></div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>