<?php $phone = false; ?>
<?php $add1 = false; ?>
<?php $add2 = false; ?>
<?php $locality = false; ?>
<?php $region = false; ?>
<?php $postcode = false; ?>
<?php $email = false; ?>

<?php $phone = of_get_option('contact_telephone'); ?>
<?php $add1 = of_get_option('contact_address_street_address_1'); ?>
<?php $add2 = of_get_option('contact_address_street_address_2'); ?>
<?php $locality = of_get_option('contact_address_locality'); ?>
<?php $region = of_get_option('contact_address_region'); ?>
<?php $postcode = of_get_option('contact_address_post_code'); ?>
<?php $email = of_get_option('contact_email'); ?>

<div class="footer__contact">
    <span class="footer__title">Unia Opticians</span>
    <span class="footer__address">
        <?php if($add1 && "" != $add1): ?>
            <span>
                <?php echo $add1; ?>
            </span>
        <?php endif; ?>

        <?php if($add2 && "" != $add2): ?>
            <span>
                <?php echo $add2; ?>
            </span>
        <?php endif; ?>

        <?php if($locality && "" != $locality): ?>
            <span>
                <?php echo $locality; ?>
            </span>
        <?php endif; ?>

        <?php if($region && "" != $region): ?>
            <span>
                <?php echo $region; ?>
            </span>
        <?php endif; ?>

        <?php if($postcode && "" != $postcode): ?>
            <span>
                <?php echo $postcode; ?>
            </span>
        <?php endif; ?>
    </span>

    <span class="footer__phone">
        <?php if($phone && "" != $phone): ?>
            <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
        <?php endif; ?>
    </span>

    <span class="footer_email">
        <?php if($email && "" != $email): ?>
            <a href="mailto:<?php echo $email; ?>">Email Us</a>
        <?php endif; ?>
    </span>
</div>
