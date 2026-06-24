<?php
/**
 * Title: Copyright
 * Slug: patterns-education/copyright
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Dynamic copyright text
 *
 * @package    Patterns_Education
 * @subpackage Patterns_Education/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"5px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group has-base-color has-text-color has-link-color">

<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"patterns-education/copyright","args":{"key":"copyright"}}}},"placeholder":"<?php esc_attr_e( 'Dynamic copyright text', 'patterns-education' ); ?>","style":{"typography":{"fontSize":"x-small"}}} -->
<p class="has-x-small-font-size"></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e( '. All Rights Reserved', 'patterns-education' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
