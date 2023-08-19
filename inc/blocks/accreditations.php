<section class="accreditations">
    <div class="container">
        <div class="accreditations__row">
            <?php
            if (have_rows("accreditations")) :
                while (have_rows("accreditations")) : the_row();
                    $accreditationsImage = get_sub_field("accreditations_image");
            ?>
                    <img class="accreditations__image m-2" src="<?php echo $accreditationsImage['url']; ?>" alt="<?php echo $accreditationsImage['alt']; ?>">
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>