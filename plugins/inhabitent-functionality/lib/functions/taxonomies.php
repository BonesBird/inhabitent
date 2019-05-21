<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
// Register Custom Taxonomy
function inhabitent_tax_product_type() {

	$labels = array(
		'name'                       => 'Product types',
		'singular_name'              => 'Product type',
		'menu_name'                  => 'Product Types',
		'all_items'                  => 'Product Types',
		'parent_item'                => 'Parent Product Types',
		'parent_item_colon'          => 'Parent Product Types:',
		'new_item_name'              => 'New Product Types Name',
		'add_new_item'               => 'Add Product Types Item',
		'edit_item'                  => 'Edit Product Types',
		'update_item'                => 'Update Product Types',
		'view_item'                  => 'View Product Types',
		'separate_items_with_commas' => 'Separate Product Types with commas',
		'add_or_remove_items'        => 'Add or remove Product Types',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Product Types',
		'search_items'               => 'Search Product Types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Product Types',
		'items_list'                 => 'Product Type list',
		'items_list_navigation'      => 'Product Type list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'product-type', array( 'product' ), $args );

}
add_action( 'init', 'inhabitent_tax_product_type', 0 );