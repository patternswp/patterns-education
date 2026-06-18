<?php
/**
 * Title: Section Title 1
 * Slug: patterns-education/section-title-1
 * Categories: text, featured
 * Description: A layout featuring a title, content, and button group in centered alignment, commonly used for section titles in feature areas.
 *
 * @package    Patterns_Education
 * @subpackage Patterns_Education/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-text-align-left has-primary-color has-text-color has-x-small-font-size" style="letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Start to new journey', 'patterns-education' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","level":3,"className":"has-base-color","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-left has-base-color has-large-font-size"><?php esc_html_e( 'Experience a learning platform that take you next level', 'patterns-education' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.7"}},"textColor":"quaternary","fontSize":"small"} -->
<p class="has-text-align-left has-quaternary-color has-text-color has-small-font-size" style="line-height:1.7"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis, repellendus ipsa aperiam, laudantium voluptatum nulla?.', 'patterns-education' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
