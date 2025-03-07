<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>
<footer class="footer">
    <div class="footer__container">
        <div class="footer__bottom bottom-area">
            <div class="bottom-area__left">
                <div class="bottom-area__social">
                    <?php foreach (get_field('footer_social', 'option') as $item) { ?>
                        <a href="<?= $item['footer_social_url']; ?>" target="_blank" class="bottom-area__social-item">
                            <img src="<?= $item['footer_social_icon']; ?>" alt="icon">
                        </a>
                    <?php } ?>
                </div>
                <div class="bottom-area__address">
                    <a href="mailto:<?php the_field('footer_email', 'option'); ?>" class="bottom-area__email"><?php the_field('footer_email', 'option'); ?></a>
                    <div class="bottom-area__city"><?php the_field('footer_location', 'option'); ?></div>
                </div>
            </div>


            <div class="bottom-area__block">
                <div class="bottom-area__right">
                    <a href="<?php the_field('footer_privacy_policy_link', 'option'); ?>" class="bottom-area__link"><?php the_field('footer_privacy_policy_text', 'option'); ?></a>
                    <a href="<?php the_field('footer_terms_of_use_link', 'option'); ?>" class="bottom-area__link"><?php the_field('footer_terms_of_use_text', 'option'); ?></a>

                </div>
                <div class="bottom-area__copy"><?php echo str_replace('[current-year]', date('Y'), get_field('footer_copyright', 'option')); ?></div>
            </div>
        </div>
    </div>
    </>
    <script src="https://vjs.zencdn.net/8.10.0/video.min.js"></script>



    <?php wp_footer(); ?>
    </body>

    </html>