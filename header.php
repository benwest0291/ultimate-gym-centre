<?php
// Customizer Varibles 
$logo = get_theme_mod('company_logo');
?>

<!DOCTYPE html>
<html lang="<?php echo language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title><?php bloginfo(the_title()); ?>"</title>
    <meta name="theme-color" content="#000000">
</head>

<body <?php body_class(); ?>>
    <div id="wrapper">
        <header class="header">
            <div class="container">
                <nav class="row">
                    <div class="col-12 col-md-3">
                        <a href="<?php echo site_url("/") ?>"><img class="navigation__logo" src="<?php echo $logo; ?>" alt="<?php echo get_bloginfo("name"); ?>"></img></a>
                    </div>
                    <div class="col-12 col-md-6">
                        <ul class="navigation">
                            <?php
                            wp_nav_menu(array(
                                "theme_location" => "headerMenu",
                                "menu__class" => "header__navigation__links"
                            ));
                            ?>
                        </ul>
                    </div>
                    <div class="col-12 col-md-3">
                        <a class="text-decoration-none" href="/class"><button class="navigation__contact__btn"><img class="navigation__contact__btn__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/plus.png">JOIN A CLASS</button></a>
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