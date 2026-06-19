<?php
/**
 * Title: 404
 * Slug: patterns-education/hidden-404
 * Inserter: no
 *
 * @package    Patterns_Education
 * @subpackage Patterns_Education/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull">

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0"}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background"><!-- wp:spacer {"height":"200px"} -->
<div style="height:200px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group alignwide">

 
<!-- wp:heading {"textAlign":"left","level":1,"align":"wide","style":{"typography":{"fontSize":"8rem"}}} -->
<h1 class="wp-block-heading alignwide has-text-align-left" style="font-size:8rem"><?php echo esc_html_e( 'Ooops!', 'patterns-education' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"bottom":"15px"}}},"fontSize":"large"} -->
<p class="has-text-align-left has-large-font-size" style="margin-bottom:15px"><?php echo esc_html_e( 'This page could not be found.', 'patterns-education' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html_e( 'We can\'t find the page you\'re looking for. Check out our Help Center or head back to home', 'patterns-education' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:button {"style":{"typography":{"textTransform":"uppercase"}},"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill" style="text-transform:uppercase"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( ( '/contact' ) ) ); ?>"><?php echo esc_html_e( 'Help Center', 'patterns-education' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline","style":{"typography":{"textTransform":"uppercase"}}} -->
<div class="wp-block-button is-style-outline" style="text-transform:uppercase"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url() ); ?>"><?php echo esc_html_e( 'Home', 'patterns-education' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"200px"} -->
<div style="height:200px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

</main>
<!-- /wp:group -->
