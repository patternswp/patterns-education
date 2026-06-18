<?php
/**
 * Title: Hero Banner Content
 * Slug: patterns-education/hero-banner-content
 * Categories: featured
 * Description: A layout that displays a title, content, and button group, suited for showcasing a hero banner.
 *
 * @package    Patterns_Education
 * @subpackage Patterns_Education/patterns
 * @since      1.0.0
 */

?>
<!-- wp:columns {"verticalAlignment":"center","metadata":{"name":"Hero content"},"align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-column is-vertically-aligned-center">

    <!-- wp:paragraph {"className":"has-base-color","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"base","fontSize":"x-small"} -->
    <p class="has-base-color has-text-color has-x-small-font-size" style="letter-spacing:1px;text-transform:uppercase">
        <?php esc_html_e( '🏆 The Leader in Online Learning', 'patterns-education' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textColor":"base","fontSize":"xx-large"} -->
    <h2 class="wp-block-heading has-base-color has-text-color has-xx-large-font-size">
    <?php
    echo sprintf(
        __('Build your %s to achieve your Goals', 'patterns-education'),
        '<strong><mark style="background-color:rgba(0, 0, 0, 0);" class="has-inline-color has-accent-color">Skills</mark></strong>'
    );
    ?>
    </h2>
    <!-- /wp:heading -->

    <!-- wp:spacer {"height":"var:preset|spacing|10"} -->
    <div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:paragraph {"textColor":"quaternary","fontSize":"small"} -->
    <p class="has-quaternary-color has-text-color has-small-font-size"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis, repellendus ipsa aperiam, laudantium voluptatum nulla?.', 'patterns-education' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:spacer {"height":"var:preset|spacing|40"} -->
    <div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:buttons -->
    <div class="wp-block-buttons">
        <!-- wp:button {"className":"is-style-fill","style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase"}}} -->
        <div class="wp-block-button is-style-fill" style="letter-spacing:1px;text-transform:uppercase"><a
                class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Explore All Courses', 'patterns-education' ); ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","height":"600px","aspectRatio":"9/16","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-1.png" style="aspect-ratio:9/16;object-fit:contain;height:600px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
