<?php
function memberlitesc_msg_shortcode($atts, $content = null) {
	// $atts    ::= array of attributes
	// $content ::= text within enclosing form of shortcode element
	// examples: [memberlite_msg style="success" text="You did it!"]
    extract(shortcode_atts(array(
		'style' => 'default',
		'text' => 'Message Text'
    ), $atts));
	$r = '<p class="pmpro_message pmpro_' . $style . '">';
    $r .= $text;
    $r .= '</p>';
    return $r;
}
remove_shortcode('memberlite_msg');	//replace shortcode bundled with Memberlite 2.0 and prior or anywhere else
add_shortcode('memberlite_msg', 'memberlitesc_msg_shortcode');
