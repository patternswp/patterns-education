<?php
/**
 * Title: Featured Section 9
 * Slug: patterns-education/featured-section-9
 * Categories: call-to-action, featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Education
 * @subpackage Patterns_Education/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80", "bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80); padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"0"}},"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%">
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group">
	<!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"quaternary","fontSize":"x-small"} -->
	<p class="has-text-align-left has-quaternary-color has-text-color has-x-small-font-size"
		style="letter-spacing:1px;text-transform:uppercase">
		<?php esc_html_e( 'And we will get back to you', 'patterns-education' ); ?>
	</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"left","level":3,"className":"has-base-color","fontSize":"large"} -->
	<h3 class="wp-block-heading has-text-align-left has-base-color has-large-font-size">
		<?php esc_html_e( 'Leave us your info', 'patterns-education' ); ?>
	</h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.7"}},"textColor":"base","fontSize":"small"} -->
	<p class="has-text-align-left has-base-color has-text-color has-small-font-size" style="line-height:1.7">
		<?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis, repellendus ipsa aperiam, laudantium voluptatum nulla?.', 'patterns-education' ); ?>
	</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->


<!-- wp:shortcode -->
<?php esc_html_e( 'Add Contact form shortcode', 'patterns-education' ); ?>
<!-- /wp:shortcode --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="flex-basis:30%">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase"}},"textColor":"quaternary","fontSize":"x-small"} -->
		<p class="has-text-align-left has-quaternary-color has-text-color has-x-small-font-size"
			style="text-transform:uppercase"><?php esc_html_e( 'And we will get back to you', 'patterns-education' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"left","level":3} -->
		<h3 class="wp-block-heading has-text-align-left"><?php esc_html_e( 'Contact Info', 'patterns-education' ); ?></h3>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
	<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:paragraph {"align":"left","fontSize":"small"} -->
	<p class="has-text-align-left has-small-font-size"><?php esc_html_e( '4 apt. Flawing Street. The Grand Avenue. Liverpool, UK 33342', 'patterns-education' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","margin":{"top":"25px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group" style="margin-top:25px">
			<!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|base"}}} -->
			<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-2.png" style="width:16px" />
			</figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"base","fontSize":"small"} -->
			<p class="pwp-txt-dec-non has-base-color has-text-color has-link-color has-small-font-size"><a href="<?php echo esc_url( 'mailto:info@example.com' ); ?>"><?php esc_html_e( 'info@example.com', 'patterns-education' ); ?>
			</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|base"}}} -->
			<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-3.png" style="width:16px" />
			</figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"base","fontSize":"small"} -->
			<p class="pwp-txt-dec-non has-base-color has-text-color has-link-color has-small-font-size"><a href="<?php echo esc_url( 'callto:(629) 555-0129' ); ?>"><?php esc_html_e( '(629) 555-0129', 'patterns-education' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
	<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase"}},"textColor":"quaternary","fontSize":"x-small"} -->
		<p class="has-text-align-left has-quaternary-color has-text-color has-x-small-font-size"
			style="text-transform:uppercase"><?php esc_html_e( 'An we will get back to you', 'patterns-education' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"left","level":3} -->
		<h3 class="wp-block-heading has-text-align-left"><?php esc_html_e( 'Social Networks', 'patterns-education' ); ?></h3>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
	<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:social-links {"iconColor":"base","iconColorValue":"#1E1E1E","size":"has-normal-icon-size","align":"left","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
	<ul class="wp-block-social-links alignleft has-normal-icon-size has-icon-color is-style-logos-only">
		<!-- wp:social-link {"url":"#","service":"twitter"} /-->

		<!-- wp:social-link {"url":"#","service":"instagram"} /-->

		<!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
	</ul>
	<!-- /wp:social-links -->
</div>
<!-- /wp:column -->


</div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
