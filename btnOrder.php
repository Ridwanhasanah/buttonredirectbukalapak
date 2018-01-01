<?php 
/**
 * Plugin Name: Button Order
 * Plugin URI: https://www.facebook.com/ridwan.hasanah3
 * Description: Order redirecct
 * Author: Ridwan
 * Version: 1.0
 * Author URI: https://www.facebook.com/ridwan.hasanah3
 */

// [bartag foo="foo-value"]

function rOder( $atts ) {
    $a = shortcode_atts( array(
        'bukalapak' => 'something',
        'tokopedia' => 'something else',
    ), $atts );

    ob_start()?>
    <button 
    style="height: 50px;
				width: 250px;
				background-color: #FF4081;
				text-decoration-style: none;
				border-radius: 5px;
				color: #fff;
				" 
     class="btn-order">
     <i class="dashicons dashicons-cart"> &nbsp;</i>
		<a target="_blank" style="color: #fff;" class="link" href="<?php echo "{$a['bukalapak']}" ;?>">Order Via BukaLapak</a>
	</button>
	<button 
    style="height: 50px;
				width: 250px;
				background-color: #00C853;
				text-decoration-style: none;
				border-radius: 5px;
				color: #fff;" 
     class="btn-order">
     <i class="dashicons dashicons-cart"> &nbsp;</i>
		<a target="_blank" style="color: #fff;" class="link" href="<?php echo "{$a['tokopedia']}" ;?>">Order Via Tokopedia</a>
	</button>
	<?php

    return ob_get_clean();
}
add_shortcode( 'ordervia', 'rOder' );

/*Ini adalah plugin button redirect link order
	
	Cara menggunakannya cukup mudah
	tambahkan shocode ini ke woocommerce kalian dan isikan url bukalapak atau tokopedia
	[ordervia bukalapak="link item bukalapak kalian" tokopedia="link item tokopedia kalian"]

	semoga bermanfaat

*/