<?php
    $slides = array(
        array('image' => '10-ans-experience.png', 'name' => '10 ans d\'expérience'),
        array('image' => 'installation.png', 'name' => 'Installation en 24-48h'),
        array('image' => 'garantie.png', 'name' => 'Garantie décennale'),
        array('image' => 'devis.png', 'name' => 'Devis gratuit'),
        array('image' => 'credit.png', 'name' => 'Sous certaines conditions')
    );
?>

<div class="atouts-wrap">
    <ul class="row list-unstyled mb-0 atouts">
        <?php foreach ($slides as $slide) : ?>
            <li class="col-md text-center">
                <div><img src="<?php echo get_template_directory_uri() . '/images/' . $slide['image']; ?>" alt="<?php _e($slide['name'], 'vitanova'); ?>"></div>
                <div class="text-blue text"><strong><?php _e($slide['name'], 'vitanova'); ?></strong></div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
