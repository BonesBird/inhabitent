<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// 
// Register Product Post Type
function inhabitnet_post_type()
{

	$labels = array(
		'name'                  => 'Products',
		'singular_name'         => 'Product',
		'menu_name'             => 'Products Types',
		'name_admin_bar'        => 'Products Type',
		'archives'              => 'Products Archives',
		'attributes'            => 'Products Attributes',
		'parent_item_colon'     => 'Parent Product:',
		'all_items'             => 'All Products',
		'add_new_item'          => 'Add New Products',
		'add_new'               => 'Add New',
		'new_item'              => 'New Product',
		'edit_item'             => 'Edit Product',
		'update_item'           => 'Update Products',
		'view_item'             => 'View Product',
		'view_items'            => 'View Products',
		'search_items'          => 'Search Products',
		'not_found'             => 'Products Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Products Image',
		'set_featured_image'    => 'Set Products image',
		'remove_featured_image' => 'Remove Products image',
		'use_featured_image'    => 'Use as Products image',
		'insert_into_item'      => 'Insert into Products',
		'uploaded_to_this_item' => 'Uploaded to this Products',
		'items_list'            => 'Products list',
		'items_list_navigation' => 'Product list navigation',
		'filter_items_list'     => 'Filter Products list',
	);
	$args = array(
		'label'                 => 'Product',
		'description'           => 'a product post type for hipster camping',
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail', 'revisions'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-chart-area',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
		'template_lock'			=> 'all',
		'template'				=> array(
			array('core/paragraph', array(
				"placeholder" => "add the product decriptions here."
			))
		)
	);
	register_post_type('product', $args);
}
add_action('init', 'inhabitnet_post_type', 0);
