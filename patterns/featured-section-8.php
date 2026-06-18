<?php
/**
 * Title: Featured Section 8
 * Slug: patterns-education/featured-section-8
 * Categories: call-to-action
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Education
 * @subpackage Patterns_Education/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:cover {"dimRatio":60,"overlayColor":"primary","minHeight":300,"isDark":false,"align":"wide","style":{"border":{"radius":"5px"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignwide is-light" style="border-radius:5px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">


<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"default","fontSize":"x-small"} -->
<p class="has-text-align-left has-default-color has-text-color has-x-small-font-size" style="letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Start to new journey', 'patterns-education' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","level":3,"className":"has-base-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-left has-base-color has-default-color has-text-color has-link-color has-large-font-size"><?php esc_html_e( 'Experience a learning platform that take you next level', 'patterns-education' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","className":"is-style-fill","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px"}}} -->
<div class="wp-block-button is-style-fill" style="letter-spacing:1px;text-transform:uppercase"><a class="wp-block-button__link has-text-align-center wp-element-button"><?php esc_html_e( 'Know More', 'patterns-education' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"1000px"},"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-1.png","id":7,"source":"file","title":"student-small"}},"dimensions":{"minHeight":"280px"},"layout":{"selfStretch":"fixed","flexSize":"400px"}},"backgroundColor":"accent","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-accent-background-color has-background" style="border-radius:1000px;min-height:280px"></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->



