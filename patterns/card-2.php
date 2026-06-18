<?php
/**
 * Title: Card 2
 * Slug: patterns-education/card-2
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 * @package    Patterns_Education
 * @subpackage Patterns_Education/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-8.jpg","dimRatio":10,"focalPoint":{"x":0.5,"y":0},"minHeight":300,"contentPosition":"bottom center","isDark":false,"style":{"border":{"radius":"5px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","wideSize":"%"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="border-radius:5px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-8.jpg" style="object-position:50% 0%" data-object-fit="cover" data-object-position="50% 0%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"blockGap":"5px","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-default-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium"} -->
<h5 class="wp-block-heading has-text-align-center has-medium-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e( 'Parsley Montana', 'patterns-education' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"quaternary","fontSize":"x-small"} -->
<p class="has-text-align-center has-quaternary-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Lead Teacher', 'patterns-education' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->