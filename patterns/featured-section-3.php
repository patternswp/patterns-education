<?php
/**
 * Title: Featured Section 3
 * Slug: patterns-education/featured-section-3
 * Categories: team, featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Education
 * @subpackage Patterns_Education/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"15px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"15px","left":"15px"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:cover {"dimRatio":60,"overlayColor":"tertiary","minHeight":300,"isDark":false,"style":{"border":{"radius":"5px"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="border-radius:5px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-tertiary-background-color has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container">

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-text-align-left has-primary-color has-text-color has-x-small-font-size" style="letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Start to new journey', 'patterns-education' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","level":3,"className":"has-base-color","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-left has-base-color has-large-font-size"><?php esc_html_e( 'Experience a learning platform that take you next level', 'patterns-education' ); ?></h3>
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

</div>

</div>
<!-- /wp:cover -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:25%">

<!-- wp:pattern {"slug":"patterns-education/card-2"} /-->
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:25%">
    
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-12.jpg","dimRatio":10,"focalPoint":{"x":0.5,"y":0},"minHeight":300,"contentPosition":"bottom center","isDark":false,"style":{"border":{"radius":"5px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","wideSize":"%"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="border-radius:5px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-12.jpg" style="object-position:50% 0%" data-object-fit="cover" data-object-position="50% 0%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"blockGap":"5px","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-default-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium"} -->
<h5 class="wp-block-heading has-text-align-center has-medium-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e( 'Parsley Montana', 'patterns-education' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"quaternary","fontSize":"x-small"} -->
<p class="has-text-align-center has-quaternary-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Lead Teacher', 'patterns-education' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

</div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"15px","left":"15px"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"bottom","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:25%">
    
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-9.jpg","dimRatio":10,"focalPoint":{"x":0.5,"y":0},"minHeight":300,"contentPosition":"bottom center","isDark":false,"style":{"border":{"radius":"5px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","wideSize":"%"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="border-radius:5px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-9.jpg" style="object-position:50% 0%" data-object-fit="cover" data-object-position="50% 0%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"blockGap":"5px","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-default-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium"} -->
<h5 class="wp-block-heading has-text-align-center has-medium-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e( 'Parsley Montana', 'patterns-education' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"quaternary","fontSize":"x-small"} -->
<p class="has-text-align-center has-quaternary-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Lead Teacher', 'patterns-education' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:25%">
    

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-11.jpg","dimRatio":10,"focalPoint":{"x":0.5,"y":0},"minHeight":300,"contentPosition":"bottom center","isDark":false,"style":{"border":{"radius":"5px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","wideSize":"%"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="border-radius:5px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-11.jpg" style="object-position:50% 0%" data-object-fit="cover" data-object-position="50% 0%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"blockGap":"5px","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-default-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium"} -->
<h5 class="wp-block-heading has-text-align-center has-medium-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e( 'Parsley Montana', 'patterns-education' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"quaternary","fontSize":"x-small"} -->
<p class="has-text-align-center has-quaternary-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Lead Teacher', 'patterns-education' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:25%">
    
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-10.jpg","dimRatio":10,"focalPoint":{"x":0.5,"y":0},"minHeight":300,"contentPosition":"bottom center","isDark":false,"style":{"border":{"radius":"5px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","wideSize":"%"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="border-radius:5px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-10.jpg" style="object-position:50% 0%" data-object-fit="cover" data-object-position="50% 0%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"blockGap":"5px","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-default-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium"} -->
<h5 class="wp-block-heading has-text-align-center has-medium-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e( 'Parsley Montana', 'patterns-education' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"quaternary","fontSize":"x-small"} -->
<p class="has-text-align-center has-quaternary-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Lead Teacher', 'patterns-education' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:25%">
    

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-13.jpg","dimRatio":10,"focalPoint":{"x":0.5,"y":0},"minHeight":300,"contentPosition":"bottom center","isDark":false,"style":{"border":{"radius":"5px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","wideSize":"%"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="border-radius:5px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-13.jpg" style="object-position:50% 0%" data-object-fit="cover" data-object-position="50% 0%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"blockGap":"5px","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-default-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium"} -->
<h5 class="wp-block-heading has-text-align-center has-medium-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e( 'Parsley Montana', 'patterns-education' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"quaternary","fontSize":"x-small"} -->
<p class="has-text-align-center has-quaternary-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Lead Teacher', 'patterns-education' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

</div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->