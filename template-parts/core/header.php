<?php $telephone = get_option('site_contact'); ?>

<header id="masthead" class="site-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <?php if (has_custom_logo()) : ?>
                    <div class="site-logo text-center text-lg-left"><?php the_custom_logo(); ?></div>
                <?php endif; ?>
            </div>
            <?php if ($telephone) : ?>
                <div class="col-lg-4">
                    <div class="phone d-flex align-items-center justify-content-center">
                        <a href="tel:<?php echo $telephone; ?>">
                            <span><?php echo $telephone; ?></span>
                            <img
                                src="<?php echo get_stylesheet_directory_uri() . '/images/services.png'; ?>"
                                alt="<?php _e('Services & appels gratuits', 'starter'); ?>"
                                class="img-fluid"
                            />
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</header><!--/#header-->
