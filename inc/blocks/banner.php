<?php
$backgroundImage = $data["banner_bg"];
$heading = $data["banner_heading"];
?>

<section class="banner" style="background-image: url(<?php echo ($backgroundImage != null ? $backgroundImage['url'] : ''); ?>);">
    <div class="container">
        <?php if ($heading == null) { ?>
            <h2 class="banner__heading"><?php echo the_title(); ?></h2>
        <?php } else { ?>
            <h2 class="banner__heading"><?php echo $heading; ?></h2>
        <?php } ?>
    </div>
</section>