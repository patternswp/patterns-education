<?php
/**
 * Title: Featured Section 1
 * Slug: patterns-education/featured-section-1
 * Categories: about, featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Education
 * @subpackage Patterns_Education/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-default-background-color has-background"
	style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center">

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-2.png"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}},"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">

<!-- wp:pattern {"slug":"patterns-education/section-title-1"} /-->

<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"12rem"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"top"}} -->
<div class="wp-block-group">
	<!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}}} -->
		<figure class="wp-block-image size-full is-resized">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-1.png" style="width:16px" />
		</figure>
	<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e( 'Access Lifetime any devices', 'patterns-education' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"top"}} -->
<div class="wp-block-group">

	<!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}}} -->
		<figure class="wp-block-image size-full is-resized">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-1.png" style="width:16px" />
		</figure>
	<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e( 'Free for Student', 'patterns-education' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"top"}} -->
<div class="wp-block-group">

	<!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}}} -->
		<figure class="wp-block-image size-full is-resized">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-1.png" style="width:16px" />
		</figure>
	<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e( 'No Credit Card Required', 'patterns-education' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"top"}} -->
<div class="wp-block-group">

	<!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}}} -->
		<figure class="wp-block-image size-full is-resized">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-1.png" style="width:16px" />
		</figure>
	<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e( '30 Days Trial', 'patterns-education' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons" style="letter-spacing:1px;text-transform:uppercase"><!-- wp:button {"textAlign":"center","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-text-align-center wp-element-button"><?php esc_html_e( 'Know More', 'patterns-education' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->
