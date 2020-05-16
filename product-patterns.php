<?php
/**
 * Plugin Name: Product patterns
 * Plugin URI: https://github.com/senadir/products-patterns
 * Description: Some Gutenberg block patterns for products.
 * Version: 0.0.1
 * Author: Nadir Seghir
 *
 */

 /**
 * Register Custom Block Styles
 */
function register_product_patterns() {
	if ( function_exists( 'register_block_pattern' ) ) {
	/**
	* Register block patterns category
	*/
	register_block_pattern_category(
		'products',
		array( 'label' => __( 'Products' ) )
	);

	/**
	* Register block patterns
	*/
	register_block_pattern(
		'products/single-product',
		array(
			'title'    => __( 'Single Product' ),
			'category' => array( 'products' ),
			'keywords' => array( 'products', 'single product', 'sell', 'woocommerce' ),
			'content'  => '<!-- wp:columns {"align":"wide"} --><div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"top"} --><div class="wp-block-column is-vertically-aligned-top"><!-- wp:image {"align":"full","sizeSlug":"large"} --><figure class="wp-block-image alignfull size-large"><img src="https://woocommercecore.mystagingwebsite.com/wp-content/uploads/2017/12/vneck-tee-2.jpg" alt=""/></figure><!-- /wp:image --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"center"} --><div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading --><h2>' . __( "My Awesome Product" ) . '</h2><!-- /wp:heading --><!-- wp:heading {"level":4} --><h4><strong>$35.00</strong></h4><!-- /wp:heading --><!-- wp:paragraph --><p>' . __( "Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo" ) . '</p><!-- /wp:paragraph --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"borderRadius":3} --><div class="wp-block-button"><a class="wp-block-button__link" style="border-radius:3px" target="_blank" rel="noreferrer noopener">' . __( "Buy on Amazon" ) . '</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:column --></div><!-- /wp:columns -->'
	) );
	};
}
add_action( 'init', 'register_product_patterns' );
