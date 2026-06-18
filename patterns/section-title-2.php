<?php
/**
 * Title: Section Title 2
 * Slug: patterns-education/section-title-2
 * Categories: text, featured
 * Description: A layout featuring a title, content, and button group in centered alignment, commonly used for section titles in feature areas.
 *
 * @package    Patterns_Education
 * @subpackage Patterns_Education/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","wideSize":"","contentSize":""}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-x-small-font-size" style="letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Top Popular Courses', 'patterns-education' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"has-base-color","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-center has-base-color has-large-font-size"><?php esc_html_e( 'Explore Featured Courses', 'patterns-education' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->