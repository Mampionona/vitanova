<?php if ($avis) : ?>
    <div class="avis-client owl-carousel avis-slider">
        <?php foreach ($avis as $__avis) : ?>
            <div class="avis-item">
                <div class="avis-content"><?php echo $__avis->post_content; ?></div>
                <?php if ($__avis->post_title) : ?>
                    <div class="avis-author text-right">
                        <em><?php printf(__('Témoignage de %s', 'vitanova'), '<strong>' . $__avis->post_title . '</strong>'); ?></em>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
