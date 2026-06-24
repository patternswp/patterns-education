<?php
/**
 * Title: Landing
 * Slug: patterns-education/landing
 * Template Types: front-page
 * Post Types: page
 * Description: A layout template for displaying the main landing front page.
 *
 * @package    Patterns_Education
 * @subpackage Patterns_Education/patterns
 * @since      1.0.0
 */

?>
<!-- wp:template-part {"slug":"header-default","tagName":"header"} /-->
<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull">
	<!-- wp:pattern {"slug":"patterns-education/hero-banner"} /-->
	<!-- wp:pattern {"slug":"patterns-education/featured-section-1"} /-->
	<!-- wp:pattern {"slug":"patterns-education/featured-section-2"} /-->
	<!-- wp:pattern {"slug":"patterns-education/featured-section-3"} /-->

    <!-- wp:group {"align":"full","style":{"layout":{"selfStretch":"fit","flexSize":""},"spacing":{"padding":{"bottom":"var:preset|spacing|80","top":"var:preset|spacing|80"},"blockGap":"0px"}},"backgroundColor":"tertiary","layout":{"type":"constrained","contentSize":""}} -->
        <div class="wp-block-group alignfull has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

            <!-- wp:pattern {"slug":"patterns-education/featured-section-4"} /-->
            <!-- wp:pattern {"slug":"patterns-education/featured-section-5"} /-->

        </div>
        <!-- /wp:group -->
	<!-- wp:pattern {"slug":"patterns-education/featured-section-6"} /-->
	<!-- wp:pattern {"slug":"patterns-education/featured-section-7"} /-->
	<!-- wp:pattern {"slug":"patterns-education/featured-section-8"} /-->

    <!-- wp:spacer {"height":"var:preset|spacing|60"} -->
    <div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
