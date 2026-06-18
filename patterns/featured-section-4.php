<?php
/**
 * Title: Featured Section 4
 * Slug: patterns-education/featured-section-4
 * Categories: testimonials, featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Education
 * @subpackage Patterns_Education/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","wideSize":"","contentSize":""}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-x-small-font-size" style="letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Testimonials', 'patterns-education' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"has-base-color","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-center has-base-color has-large-font-size"><?php esc_html_e( 'What’s People Say', 'patterns-education' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
    <!-- wp:image {"width":"auto","height":"500px","aspectRatio":"3/2","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-14.png" style="aspect-ratio:3/2;object-fit:contain;width:auto;height:500px"/></figure>
    <!-- /wp:image -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
    
    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":1.6}},"textColor":"base","fontSize":"medium"} -->
    <p class="has-text-align-left has-base-color has-text-color has-medium-font-size" style="line-height:1.6"><?php esc_html_e( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an', 'patterns-education' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":5,"className":"has-base-color","textColor":"base","fontSize":"small"} -->
    <h5 class="wp-block-heading has-text-align-left has-base-color has-text-color has-small-font-size"><?php esc_html_e( 'Donald Mark', 'patterns-education' ); ?></h5>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"left","className":"has-base-color","textColor":"base","fontSize":"x-small"} -->
    <p class="has-text-align-left has-base-color has-text-color has-x-small-font-size"><?php esc_html_e( 'UX /UI Designer', 'patterns-education' ); ?></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->

</div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->