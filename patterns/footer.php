<?php
/**
 * Title: Footer
 * Slug: patterns-education/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A pattern for displaying the site footer.
 *
 * @package    Patterns_Education
 * @subpackage Patterns_Education/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"layout":{"selfStretch":"fit","flexSize":""},"spacing":{"blockGap":"0"}},"backgroundColor":"senary","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull has-senary-background-color has-background">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":{"left":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-columns alignwide"
		style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","margin":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--20)">
					<!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full is-resized"><img
							src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/patternswp-logo-default.png"
							alt="" style="width:40px" /></figure>
					<!-- /wp:image -->

					<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"textTransform":"uppercase","letterSpacing":"1px","lineHeight":"1.2"},"layout":{"selfStretch":"fixed","flexSize":"100px"}},"fontSize":"small"} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph {"textColor":"quaternary","fontSize":"small"} -->
				<p class="has-quaternary-color has-text-color has-small-font-size"><?php esc_html_e( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy', 'patterns-education' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:heading {"level":6,"className":"has-base-color","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"base","fontSize":"small"} -->
			<h6 class="wp-block-heading has-base-color has-text-color has-small-font-size"
				style="font-style:normal;font-weight:600"><?php esc_html_e( 'Contact Info', 'patterns-education' ); ?></h6>
			<!-- /wp:heading -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|base"}}} -->
					<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-2.png" style="width:16px" /></figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|quaternary"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"secondary"} -->
					<p class="pwp-txt-dec-non has-secondary-color has-text-color has-link-color"
						style="margin-top:0px;margin-bottom:0px"><a href="<?php echo esc_url( 'mailto:info@example.com' ); ?>"><?php esc_html_e( 'info@example.com', 'patterns-education' ); ?></a>
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"pa-contact-info","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group pa-contact-info">
					<!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|base"}}} -->
					<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-3.png" style="width:16px" />
					</figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|quaternary"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"quaternary"} -->
					<p class="pwp-txt-dec-non has-quaternary-color has-text-color has-link-color"
						style="margin-top:0px;margin-bottom:0px"><a href="<?php echo esc_url( 'callto:(629) 555-0129' ); ?>"><?php esc_html_e( '(629) 555-0129', 'patterns-education' ); ?></a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
			<div class="wp-block-group">
				<!-- wp:social-links {"iconColor":"base","iconColorValue":"#1E1E1E","size":"has-normal-icon-size","align":"center","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
				<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color is-style-logos-only">
					<!-- wp:social-link {"url":"#","service":"twitter"} /-->

					<!-- wp:social-link {"url":"#","service":"instagram"} /-->

					<!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
				</ul>
				<!-- /wp:social-links -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:heading {"level":6,"className":"has-base-color","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"base","fontSize":"small"} -->
			<h6 class="wp-block-heading has-base-color has-text-color has-small-font-size"
				style="font-style:normal;font-weight:600"><?php esc_html_e( 'Offices Hour', 'patterns-education' ); ?></h6>
			<!-- /wp:heading -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|quaternary"}}}},"textColor":"quaternary"} -->
				<p class="has-quaternary-color has-text-color has-link-color"><?php esc_html_e( 'Mon – Thus: 8.00am 6.00pm', 'patterns-education' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|quaternary"}}}},"textColor":"quaternary"} -->
				<p class="has-quaternary-color has-text-color has-link-color"><?php esc_html_e( 'Fri – Sat: 8.00am 6.00pm', 'patterns-education' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|quaternary"}}}},"textColor":"quaternary"} -->
				<p class="has-quaternary-color has-text-color has-link-color"><?php esc_html_e( 'Sun: Closed', 'patterns-education' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:heading {"level":6,"className":"has-base-color","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"base","fontSize":"small"} -->
			<h6 class="wp-block-heading has-base-color has-text-color has-small-font-size"
				style="font-style:normal;font-weight:600"><?php esc_html_e( 'Useful Links', 'patterns-education' ); ?></h6>
			<!-- /wp:heading -->

		<!-- wp:navigation {"textColor":"quaternary","overlayMenu":"never","layout":{"type":"flex","orientation":"vertical","justifyContent":"left"},"style":{"typography":{"fontStyle":"normal","fontWeight":"400","letterSpacing":"0.5px","fontSize":"14px","textTransform":"capitalize"},"spacing":{"blockGap":"var:preset|spacing|10"}}}  -->
		<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'patterns-education' ); ?>","url":"#"} /-->

		<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'patterns-education' ); ?>","url":"#"} /-->

		<!-- wp:navigation-link {"label":"<?php esc_html_e( 'FAQs', 'patterns-education' ); ?>","url":"#"} /-->

		<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Authors', 'patterns-education' ); ?>","url":"#"} /-->
		<!-- /wp:navigation -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"top":{"color":"var:preset|color|quinary","style":"solid","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide"
		style="border-top-color:var(--wp--preset--color--quinary);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
		<!-- wp:pattern {"slug":"patterns-education/copyright"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:pattern {"slug":"patterns-education/scroll-to-top-button"} /-->
</div>
<!-- /wp:group -->
