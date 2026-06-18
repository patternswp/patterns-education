<?php
/**
 * Title: Pagination
 * Slug: patterns-education/pagination
 * Block Types: core/query-pagination
 * Description: Display pagination controls, commonly used within a query block.
 *
 * @package    Patterns_Education
 * @subpackage Patterns_Education/patterns
 * @since      1.0.0
 */

?>
<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":"<?php echo esc_attr_x( 'Previous', 'label', 'patterns-education' ); ?>","style":{"typography":{"fontSize":"13px"}}} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"<?php echo esc_attr_x( 'Next', 'label', 'patterns-education' ); ?>","style":{"typography":{"fontSize":"13px"}}} /-->
<!-- /wp:query-pagination -->
