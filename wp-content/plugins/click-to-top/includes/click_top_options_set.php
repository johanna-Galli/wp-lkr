<?php 
/*
 * @link              https://wpthemespace.com/
 * @since             1.0.0
 * @package           Click to top
 *
 * @wordpress-plugin
 */
  if ( ! function_exists( 'click_to_top_all_css_options' ) ) :
function click_to_top_all_css_options() {
if($options = get_option('click_top_basic')){
$options = get_option('click_top_basic');
}
if($sstyle = get_option('click_top_style')){
$sstyle = get_option('click_top_style');
}
$scroll_position = ( isset( $options['scroll_position'] ) ) ? $options['scroll_position'] : 'right';
$selected_position = ( isset( $options['selected_position'] ) ) ? $options['selected_position'] : 5;
$bottom_position = ( isset( $options['bottom_position'] ) ) ? $options['bottom_position'] : 5;
$btn_type = ( isset( $sstyle['btn_type'] ) ) ? $sstyle['btn_type'] : 'icon';

$scroll_padding = ( isset( $sstyle['scroll_padding'] ) ) ? $sstyle['scroll_padding'] : 5;
$btn_style = ( isset( $sstyle['btn_style'] ) ) ? $sstyle['btn_style'] : 'square';
$icon_color = ( isset( $sstyle['icon_color'] ) ) ? $sstyle['icon_color'] : '#000000';
$bg_color = ( isset( $sstyle['bg_color'] ) ) ? $sstyle['bg_color'] : '#cccccc';
$bg_hover_color = ( isset( $sstyle['bg_hover_color'] ) ) ? $sstyle['bg_hover_color'] : '#555555';
$hover_color = ( isset( $sstyle['hover_color'] ) ) ? $sstyle['hover_color'] : '#ffffff';
$scroll_opacity = ( isset( $sstyle['scroll_opacity'] ) ) ? $sstyle['scroll_opacity'] : 99;
$font_size = ( isset( $sstyle['font_size'] ) ) ? $sstyle['font_size'] : 16;
 ?>
<style type="text/css"> 

a#clickTop {
  background: <?php echo esc_attr( $bg_color); ?> none repeat scroll 0 0;
  border-radius: <?php if($btn_style=='round'): ?>30px<?php else: ?>0<?php endif; ?>;
  bottom: <?php echo esc_attr( $bottom_position); ?>%;
  color: <?php echo esc_attr( $icon_color); ?>;
  padding: <?php echo esc_attr( $scroll_padding); ?>px;
  <?php echo esc_attr( $scroll_position); ?>: <?php echo esc_attr( $selected_position); ?>%;
  <?php if($btn_type=='icon'): ?>
    min-height: 34px;
    min-width: 35px;
  <?php endif; ?>
  font-size:<?php echo esc_attr( $font_size ); ?>px;
  opacity:0.<?php echo esc_attr( $scroll_opacity); ?>

}

a#clickTop i {
  color: <?php echo esc_attr( $icon_color); ?>;
}
a#clickTop:hover, a#clickTop:hover i, a#clickTop:active, a#clickTop:focus{
	color: <?php echo esc_attr( $hover_color); ?>
}

.hvr-fade:hover, .hvr-fade:focus, .hvr-fade:active,
.hvr-back-pulse:hover, .hvr-back-pulse:focus, .hvr-back-pulse:active,
a#clickTop.hvr-shrink:hover,
a#clickTop.hvr-grow:hover,
a#clickTop.hvr-pulse:hover,
a#clickTop.hvr-pulse-grow:hover,
a#clickTop.hvr-pulse-shrink:hover,
a#clickTop.hvr-push:hover,
a#clickTop.hvr-pop:hover,
a#clickTop.hvr-bounce-in:hover,
a#clickTop.hvr-bounce-out:hover,
a#clickTop.hvr-float:hover,
a#clickTop.hvr-fade:hover,
a#clickTop.hvr-back-pulse:hover,
a#clickTop.hvr-bob:hover,
a#clickTop.hvr-buzz:hover,
a#clickTop.hvr-shadow:hover,
a#clickTop.hvr-grow-shadow:hover,
a#clickTop.hvr-float-shadow:hover,
a#clickTop.hvr-glow:hover,
a#clickTop.hvr-shadow-radial:hover,
a#clickTop.hvr-box-shadow-outset:hover,
a#clickTop.hvr-box-shadow-inset:hover,
a#clickTop.hvr-bubble-top:hover,
a#clickTop.hvr-bubble-float-top:hover,
.hvr-radial-out:before,
.hvr-radial-in:before,
.hvr-bounce-to-right:before,
.hvr-bounce-to-left:before,
.hvr-bounce-to-bottom:before,
.hvr-bounce-to-top:before,
.hvr-rectangle-in:before,
.hvr-rectangle-out:before,
.hvr-shutter-in-horizontal:before,
.hvr-shutter-out-horizontal:before,
.hvr-shutter-in-vertical:before,
.hvr-sweep-to-right:before,
.hvr-sweep-to-left:before,
.hvr-sweep-to-bottom:before,
.hvr-sweep-to-top:before,
.hvr-shutter-out-vertical:before,
.hvr-underline-from-left:before,
.hvr-underline-from-center:before,
.hvr-underline-from-right:before,
.hvr-overline-from-left:before,
.hvr-overline-from-center:before,
.hvr-overline-from-right:before,
.hvr-underline-reveal:before,
.hvr-overline-reveal:before{
 background-color:<?php echo esc_attr( $bg_hover_color); ?>;
 color:<?php echo esc_attr( $hover_color); ?>;
  border-radius: <?php if($btn_style=='round'): ?>30px<?php else: ?>0<?php endif; ?>;
}
/* Back Pulse */
@-webkit-keyframes hvr-back-pulse {
  50% {
    background-color: <?php echo esc_attr( $bg_color); ?> none repeat scroll 0 0;
  }
}

@keyframes hvr-back-pulse {
  50% {
    background-color:<?php echo esc_attr( $bg_color); ?> none repeat scroll 0 0;
  }
}


.hvr-radial-out,
.hvr-radial-in,
.hvr-rectangle-in,
.hvr-rectangle-out,
.hvr-shutter-in-horizontal,
.hvr-shutter-out-horizontal,
.hvr-shutter-in-vertical,
.hvr-shutter-out-vertical{
  background-color: <?php echo esc_attr( $bg_color); ?> none repeat scroll 0 0;
}
.hvr-bubble-top::before,
.hvr-bubble-float-top::before {
  border-color: transparent transparent <?php echo esc_attr( $bg_color); ?>;
}
</style>
		
<?php
}
add_action( 'wp_head', 'click_to_top_all_css_options' );
endif;
  if ( ! function_exists( 'click_to_top_all_js_options' ) ) :
function click_to_top_all_js_options() {
if($options = get_option('click_top_basic')){
$options = get_option('click_top_basic');
}
if($sstyle = get_option('click_top_style')){
$sstyle = get_option('click_top_style');
}
$scroll_Distance = ( isset( $options['scroll_Distance'] ) ) ? $options['scroll_Distance'] : 300;
$scroll_Speed = ( isset( $options['scroll_Speed'] ) ) ? $options['scroll_Speed'] : 300;
$easing_Type = ( isset( $options['easing_Type'] ) ) ? $options['easing_Type'] : 'linear';
$ani_mation = ( isset( $options['ani_mation'] ) ) ? $options['ani_mation'] : 'fade';
$animation_Speed = ( isset( $options['animation_Speed'] ) ) ? $options['animation_Speed'] : 200;
$hover_affect = ( isset( $sstyle['hover_affect'] ) ) ? $sstyle['hover_affect'] : 'bubble-top';
$btn_type = ( isset( $sstyle['btn_type'] ) ) ? $sstyle['btn_type'] : 'icon';
$select_icon = ( isset( $sstyle['select_icon'] ) ) ? $sstyle['select_icon'] : 'angle-double-up';
$btn_text = ( isset( $sstyle['btn_text'] ) ) ? $sstyle['btn_text'] : esc_html__('Click to top', 'click-top' );
 ?>

<script type="text/javascript">
(function ($) {
	"use strict";
    $(document).ready(function(){
		    $.scrollUp({
        scrollName: 'clickTop',      // Element ID
        scrollDistance: <?php echo esc_attr( $scroll_Distance); ?>, // Distance from top/bottom before showing element (px)
        scrollFrom: 'top',// 'top' or 'bottom'
        scrollSpeed: <?php echo esc_attr( $scroll_Speed); ?>, // Speed back to top (ms)
        easingType: '<?php echo esc_attr( $easing_Type ); ?>', // Scroll to top easing (see http://easings.net/)
        animation: '<?php echo esc_attr( $ani_mation); ?>', // Fade, slide, none
        animationSpeed: <?php echo esc_attr( $animation_Speed); ?>, // Animation speed (ms)
        scrollText: '<?php if($btn_type=='icon'): ?><i class=" fa fa-<?php echo esc_attr( $select_icon); ?>"></i><?php else: echo esc_html($btn_text); endif; ?>', // Text for element, can contain HTML
        activeOverlay: false,        // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        zIndex: 2147483647           // Z-Index for the overlay
    });
		$('a#clickTop').addClass('hvr-<?php echo esc_attr( $hover_affect); ?>');
        });
}(jQuery));	
</script>
		
<?php
}
add_action( 'wp_footer', 'click_to_top_all_js_options',99);
endif;