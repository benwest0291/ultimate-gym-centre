<?php
$role = get_field("role");
$facebook = get_field("facebook_url");
$twitter = get_field("twitter_url");
$insta = get_field("instagram_url");
$mail = get_field("mail_url");
?>


<div class="fitness__coach__card mb-5" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/trainer-background.png" );>
    <div class="fitness__coach__card__image">
        <img src="<?php the_post_thumbnail_url("post"); ?>" />
    </div>
    <div class="fitness__coach__card__info pt-4">
        <h3><?php the_title(); ?></h3>

        <?php if ($role != null) { ?>
            <p><?php echo $role; ?></p>
        <?php } ?>
        <div class="fitness__coach__card__socails">
            <?php if ($facebook != null) { ?>
                <a href="<?php echo $facebook; ?>"><i class="fitness__coach__card__facebook fa-brands fa-facebook-f"></i></a>
            <?php } ?>

            <?php if ($twitter != null) { ?>
                <a href="<?php echo $twitter; ?>"><i class="fitness__coach__card__twitter fa-brands fa-twitter"></i></a>
            <?php } ?>

            <?php if ($insta != null) { ?>
                <a href="<?php echo $insta; ?>"><i class="fitness__coach__card__insta fa-brands fa-instagram"></i></a>
            <?php } ?>

            <?php if ($mail != null) { ?>
                <a href="<?php echo $mail; ?>"><i class="fitness__coach__card__mail fa-sharp fa-solid fa-envelope"></i></a>
            <?php } ?>
        </div>
    </div>
</div>