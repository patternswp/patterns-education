<?php
/**
 * Title: Featured Section 2
 * Slug: patterns-education/featured-section-2
 * Categories: services, featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Education
 * @subpackage Patterns_Education/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"layout":{"selfStretch":"fit","flexSize":""},"spacing":{"padding":{"bottom":"var:preset|spacing|80","top":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"backgroundColor":"tertiary","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

<!-- wp:pattern {"slug":"patterns-education/section-title-2"} /-->

<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:pattern {"slug":"patterns-education/card-1"} /-->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">

<!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:5px"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px"}}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-4.jpg"  style="border-top-left-radius:5px;border-top-right-radius:5px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|10"}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-default-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":5,"align":"wide","className":"has-base-color","textColor":"base"} -->
<h5 class="wp-block-heading alignwide has-base-color has-text-color"><?php esc_html_e( 'Business &amp; Management', 'patterns-education' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.7"}},"textColor":"quaternary","fontSize":"x-small"} -->
<p class="has-text-align-left has-quaternary-color has-text-color has-x-small-font-size" style="line-height:1.7"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque', 'patterns-education' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|quinary","style":"solid","width":"1px"}}},"backgroundColor":"default","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide has-default-background-color has-background" style="border-top-color:var(--wp--preset--color--quinary);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group">

<!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|base"},"spacing":{"margin":{"top":"-2px"}}}} -->
	<figure class="wp-block-image size-full is-resized" style="margin-top:-2px"><img
		src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-4.png" style="width:16px" />
	</figure>
	<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '110', 'patterns-education' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group">

<!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|base"},"spacing":{"margin":{"top":"-2px"}}}} -->
	<figure class="wp-block-image size-full is-resized" style="margin-top:-2px"><img
		src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-5.png" style="width:16px" />
	</figure>
	<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '10', 'patterns-education' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<p style="font-style:normal;font-weight:700"><?php esc_html_e( '$30.00', 'patterns-education' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
	
<!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:5px"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px"}}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-5.jpg"  style="border-top-left-radius:5px;border-top-right-radius:5px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|10"}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-default-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":5,"align":"wide","className":"has-base-color","textColor":"base"} -->
<h5 class="wp-block-heading alignwide has-base-color has-text-color"><?php esc_html_e( 'Business &amp; Management', 'patterns-education' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.7"}},"textColor":"quaternary","fontSize":"x-small"} -->
<p class="has-text-align-left has-quaternary-color has-text-color has-x-small-font-size" style="line-height:1.7"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque', 'patterns-education' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|quinary","style":"solid","width":"1px"}}},"backgroundColor":"default","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide has-default-background-color has-background" style="border-top-color:var(--wp--preset--color--quinary);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group">

<!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|base"},"spacing":{"margin":{"top":"-2px"}}}} -->
	<figure class="wp-block-image size-full is-resized" style="margin-top:-2px"><img
		src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-4.png" style="width:16px" />
	</figure>
	<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '110', 'patterns-education' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group">

<!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|base"},"spacing":{"margin":{"top":"-2px"}}}} -->
	<figure class="wp-block-image size-full is-resized" style="margin-top:-2px"><img
		src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-5.png" style="width:16px" />
	</figure>
	<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '10', 'patterns-education' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<p style="font-style:normal;font-weight:700"><?php esc_html_e( '$30.00', 'patterns-education' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">

<!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:5px"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px"}}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-6.jpg"  style="border-top-left-radius:5px;border-top-right-radius:5px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|10"}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-default-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":5,"align":"wide","className":"has-base-color","textColor":"base"} -->
<h5 class="wp-block-heading alignwide has-base-color has-text-color"><?php esc_html_e( 'Business &amp; Management', 'patterns-education' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.7"}},"textColor":"quaternary","fontSize":"x-small"} -->
<p class="has-text-align-left has-quaternary-color has-text-color has-x-small-font-size" style="line-height:1.7"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque', 'patterns-education' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|quinary","style":"solid","width":"1px"}}},"backgroundColor":"default","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide has-default-background-color has-background" style="border-top-color:var(--wp--preset--color--quinary);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group">

<!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|base"},"spacing":{"margin":{"top":"-2px"}}}} -->
	<figure class="wp-block-image size-full is-resized" style="margin-top:-2px"><img
		src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-4.png" style="width:16px" />
	</figure>
	<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '110', 'patterns-education' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group">

<!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|base"},"spacing":{"margin":{"top":"-2px"}}}} -->
	<figure class="wp-block-image size-full is-resized" style="margin-top:-2px"><img
		src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-5.png" style="width:16px" />
	</figure>
	<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '10', 'patterns-education' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<p style="font-style:normal;font-weight:700"><?php esc_html_e( '$30.00', 'patterns-education' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

</div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium"} -->
		<p class="has-medium-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e( '49,545+', 'patterns-education' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php esc_html_e( 'more skillful courses you can explore', 'patterns-education' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:buttons {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons" style="letter-spacing:1px;text-transform:uppercase">
		<!-- wp:button {"textAlign":"center","className":"is-style-fill"} -->
		<div class="wp-block-button is-style-fill"><a
				class="wp-block-button__link has-text-align-center wp-element-button"><?php esc_html_e( 'Explore All Courses', 'patterns-education' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->


</div>
<!-- /wp:group -->
