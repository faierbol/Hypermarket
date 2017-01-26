<?php
/**
 * Hypermarket WooCommerce Hooks.
 *
 * @author  	Mahdi Yazdani
 * @package 	Hypermarket
 * @since 	    1.0
 */
/**
 * Items present in cart
 *
 * @see  hypermarket_cart_link()		 -> woocommerce-template-functions.php
 * @since 1.0
 */
add_action('hypermarket_items_present_in_cart', 'hypermarket_cart_link');
if (defined('WC_VERSION') && version_compare(WC_VERSION, '2.3', '>=')):
	add_filter('woocommerce_add_to_cart_fragments', 'hypermarket_cart_link_fragment');
else:
	add_filter('add_to_cart_fragments', 'hypermarket_cart_link_fragment');
endif;
/**
 * Product loop
 *
 * @see  hypermarket_shop_thumbnail_wrapper_start()				 -> woocommerce-template-functions.php
 * @see  woocommerce_show_product_loop_sale_flash()				 -> woocommerce-template-functions.php
 * @see  hypermarket_shop_item_tools_wrapper_start()			 -> woocommerce-template-functions.php
 * @see  hypermarket_shop_thumbnail_item_tools_wrapper_end()	 -> woocommerce-template-functions.php
 * @see  hypermarket_shop_item_details_wrapper_start()			 -> woocommerce-template-functions.php
 * @see  woocommerce_template_loop_product_title()				 -> woocommerce-template-functions.php
 * @see  woocommerce_template_loop_price()						 -> woocommerce-template-functions.php
 * @see  hypermarket_shop_item_details_wrapper_end()			 -> woocommerce-template-functions.php
 * @see  hypermarket_woocommerce_before_shop_loop()				 -> woocommerce-template-functions.php
 * @see  hypermarket_shop_bar_wrapper_start()					 -> woocommerce-template-functions.php
 * @see  hypermarket_shop_bar_wrapper_end()						 -> woocommerce-template-functions.php
 * @see  hypermarket_shop_loop_wrapper_start()					 -> woocommerce-template-functions.php
 * @see  hypermarket_shop_loop_wrapper_end()					 -> woocommerce-template-functions.php
 * @see  hypermarket_paging_navigation()						 -> woocommerce-template-functions.php
 * @see  hypermarket_woocommerce_after_shop_loop()				 -> woocommerce-template-functions.php
 * @see  hypermarket_shop_catalog_wrapper_end()					 -> woocommerce-template-functions.php
 * @since 1.0
 */
remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
remove_action('woocommerce_after_shop_loop', 'woocommerce_pagination', 10);
add_action('wp', 'hypermarket_remove_sidebar_shop');
add_action('woocommerce_before_shop_loop_item', 'hypermarket_shop_thumbnail_wrapper_start', 10);
add_action('woocommerce_before_shop_loop_item', 'woocommerce_show_product_loop_sale_flash', 15);
add_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_rating', 20);
add_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 25);
add_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_close', 30);
add_action('woocommerce_before_shop_loop_item_title', 'hypermarket_shop_item_tools_wrapper_start', 15);
add_action('woocommerce_after_shop_loop_item', 'hypermarket_shop_thumbnail_item_tools_wrapper_end', 15);
add_action('woocommerce_after_shop_loop_item', 'hypermarket_shop_item_details_wrapper_start', 20);
add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_title', 25);
add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_price', 30);
add_action('woocommerce_after_shop_loop_item', 'hypermarket_shop_item_details_wrapper_end', 35);
add_action('woocommerce_before_shop_loop', 'hypermarket_woocommerce_before_shop_loop', 10);
add_action('woocommerce_before_shop_loop', 'hypermarket_shop_bar_wrapper_start', 12);
add_action('woocommerce_before_shop_loop', 'hypermarket_shop_bar_wrapper_end', 35);
add_action('woocommerce_before_shop_loop', 'hypermarket_shop_loop_wrapper_start', 40);
add_action('woocommerce_after_shop_loop', 'hypermarket_shop_loop_wrapper_end', 5);
add_action('woocommerce_after_shop_loop', 'hypermarket_paging_navigation', 15);
add_action('woocommerce_after_shop_loop', 'hypermarket_woocommerce_after_shop_loop', 20);
add_action('woocommerce_sidebar', 'hypermarket_shop_catalog_wrapper_end', 15);
/**
 * Single product
 *
 * @see  woocommerce_show_product_images()						 -> woocommerce-template-functions.php
 * @see  hypermarket_product_paging_navigation()				 -> woocommerce-template-functions.php
 * @see  hypermarket_single_product_summary_wrapper_start()		 -> woocommerce-template-functions.php
 * @see  hypermarket_single_add_to_cart_wrapper_start()			 -> woocommerce-template-functions.php
 * @see  hypermarket_single_add_to_cart_wrapper_end()			 -> woocommerce-template-functions.php
 * @see  hypermarket_single_product_summary_wrapper_end()		 -> woocommerce-template-functions.php
 * @see  hypermarket_output_product_data_tabs_wrapper_start()	 -> woocommerce-template-functions.php
 * @see  hypermarket_output_product_data_tabs_wrapper_end()		 -> woocommerce-template-functions.php
 * @since 1.0
 */
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
add_action('woocommerce_before_single_product', 'hypermarket_product_paging_navigation', 10);
add_action('woocommerce_before_single_product_summary', 'hypermarket_single_product_summary_wrapper_start', 30);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 22);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 25);
add_action('woocommerce_single_product_summary', 'hypermarket_single_add_to_cart_wrapper_start', 27);
add_action('woocommerce_single_product_summary', 'hypermarket_single_add_to_cart_wrapper_end', 33);
add_action('woocommerce_after_single_product_summary', 'hypermarket_single_product_summary_wrapper_end', 2);
add_action('woocommerce_after_single_product_summary', 'hypermarket_output_product_data_tabs_wrapper_start', 3);
add_action('woocommerce_after_single_product_summary', 'hypermarket_output_product_data_tabs_wrapper_end', 12);
/**
 * Cart
 *
 * @since 1.0
 */
remove_action('woocommerce_cart_collaterals', 'woocommerce_cross_sell_display', 10);
add_action('woocommerce_after_cart', 'woocommerce_cross_sell_display', 10);
/**
 * Checkout
 *
 * @see  hypermarket_back_to_cart_btn_before_submit()		 -> woocommerce-template-functions.php
 * @since 1.0
 */
add_action('woocommerce_review_order_before_submit', 'hypermarket_back_to_cart_btn_before_submit', 10);