<?php
/**
 * @link              https://wpthemespace.com/
 * @since             1.0.0
 * @package           Click to top
 *
 * @author expert-wp
 */
if ( !class_exists('click_top_options' ) ):
class click_top_options {

    private $settings_api;

    function __construct() {
        $this->settings_api = new WeDevs_Settings_API;

        add_action( 'admin_init', array($this, 'admin_init') );
        add_action( 'admin_menu', array($this, 'admin_menu') );
    }

    function admin_init() {

        //set the settings
        $this->settings_api->set_sections( $this->get_settings_sections() );
        $this->settings_api->set_fields( $this->get_settings_fields() );

        //initialize settings
        $this->settings_api->admin_init();
    }

    function admin_menu() {
		add_options_page( 
		 esc_html__( 'Click to top', 'click-top' ),
		esc_html__( 'Click to top', 'click-top' ), 
		'manage_options',
		'click-to-top.php',
		array($this, 'plugin_page')
	);
    }

    function get_settings_sections() {
        $sections = array(
            array(
                'id' => 'click_top_basic',
                'title' => esc_html__( 'Basic Settings', 'click-top' )
            ),
            array(
                'id' => 'click_top_style',
                'title' => esc_html__( 'Scroll style Settings', 'click-top' )
            )
          
        );
        return $sections;
    }

    /**
     * Returns all the settings fields
     *
     * @return array settings fields
     */
    function get_settings_fields() {
        $settings_fields = array(
            'click_top_basic' => array(
				 array(
                    'name'    => 'scroll_Distance',
                    'label'   => esc_html__( 'Scroll show distance', 'click-top' ),
                    'desc'    => esc_html__( 'Distance from top/bottom before showing element (px)', 'click-top' ),
                    'type'              => 'number',
                    'default'           => 300,
                    'sanitize_callback' => 'intval'
                    
                ),
				array(
                    'name'    => 'scroll_Speed',
                    'label'   => esc_html__( 'Set scroll speed','click-top' ),
                    'desc'    => esc_html__( 'Speed back to top (ms)','click-top' ),
                    'type'              => 'number',
                    'default'           => 300,
                    'sanitize_callback' => 'intval'
                ),
				array(
                    'name'    => 'easing_Type',
                    'label'   => esc_html__( 'Select your easing type', 'click-top' ),
                    'desc'    => esc_html__( 'Scroll to top easing style set as you choice', 'click-top' ),
                    'type'    => 'select',
					'default' => 'linear',
                    'options' => array(
                        'linear' =>esc_html__('linear','click-top' ), 
                        'easeInSine' => esc_html__('easeInSine','click-top' ), 
                        'easeOutSine' => esc_html__('easeOutSine','click-top' ), 
                        'easeInOutSine' => esc_html__('easeInOutSine','click-top' ), 
                        'easeInQuad' => esc_html__('easeInQuad','click-top' ), 
                        'easeOutQuad' => esc_html__('easeOutQuad','click-top' ), 
                        'easeInOutQuad' => esc_html__('easeInOutQuad','click-top' ), 
                        'easeInCubic' => esc_html__('easeInCubic','click-top' ), 
                        'easeOutCubic' => esc_html__('easeOutCubic','click-top' ), 
                        'easeInOutCubic' => esc_html__('easeInOutCubic','click-top' ), 
                        'easeInQuart' => esc_html__('easeInQuart','click-top' ), 
                        'easeOutQuart' => esc_html__('easeOutQuart','click-top' ), 
                        'easeInOutQuart' => esc_html__('easeInOutQuart','click-top' ), 
                        'easeInQuint' => esc_html__('easeInQuint','click-top' ), 
                        'easeOutQuint' => esc_html__('easeOutQuint','click-top' ), 
                        'easeInOutQuint' => esc_html__('easeInOutQuint','click-top' ), 
                        'easeInExpo' => esc_html__('easeInExpo','click-top' ), 
                        'easeOutExpo' => esc_html__('easeOutExpo', 'click-top' ),
                        'easeInOutExpo' => esc_html__('easeInOutExpo','click-top' ), 
                        'easeInCirc' => esc_html__('easeInCirc','click-top' ), 
                        'easeOutCirc' => esc_html__('easeOutCirc', 'click-top' ),
                        'easeInOutCirc' => esc_html__('easeInOutCirc', 'click-top' ),
                        'easeInBack' => esc_html__('easeInBack','click-top' ), 
                        'easeOutBack' => esc_html__('easeOutBack', 'click-top' ),
                        'easeInOutBack' => esc_html__('easeInOutBack','click-top' ), 
                        'easeInElastic' => esc_html__('easeInElastic','click-top' ), 
                        'easeOutElastic' => esc_html__('easeOutElastic','click-top' ), 
                        'easeInOutElastic' => esc_html__('easeInOutElastic','click-top' ), 
                        'easeInBounce' => esc_html__('easeInBounce', 'click-top' ),
                        'easeOutBounce' => esc_html__('easeOutBounce', 'click-top' ),
                        'easeInOutBounce' => esc_html__('easeInOutBounce', 'click-top' ),
                    )
                ),
				array(
                    'name'    => 'ani_mation',
                    'label'   => esc_html__( 'Select animation', 'click-top' ),
                    'desc'    => esc_html__( 'Select animation in this box.', 'click-top' ),
                    'type'    => 'radio',
					'default' => 'slide',
                    'options' => array(
                        'Fade' => esc_html__( 'Fade', 'click-top' ),
                        'slide' => esc_html__( 'slide', 'click-top' ),
                        'none' => esc_html__( 'none', 'click-top' ),
                    )
                ),
				array(
                    'name'    => 'animation_Speed',
                    'label'   => esc_html__( 'Set Animation speed','click-top' ),
                    'desc'    => esc_html__( 'Set Animation speed by (ms)','click-top' ),
                    'type'              => 'number',
                    'default'           => 200,
                    'sanitize_callback' => 'intval'
                ),
				array(
                    'name'    => 'scroll_position',
                    'label'   => esc_html__( 'scroll position', 'click-top' ),
                    'desc'    => esc_html__( 'Select scroll position left or right.', 'click-top' ),
                    'type'    => 'radio',
					'default' => 'right',
                    'options' => array(
                        'left' => esc_html__( 'Left side', 'click-top' ),
                        'right' => esc_html__( 'Right side', 'click-top' )
                    )
                ),
				array(
                    'name'    => 'selected_position',
                    'label'   => esc_html__( 'Set selected position margin', 'click-top' ),
                    'desc'    => esc_html__( 'If you select right side set right side margin and if you select left side set left side margin by %.Set 0 to 5 for better view.default is 5', 'click-top' ),
                    'type'              => 'number',
                    'default'           => 5,
                    'sanitize_callback' => 'intval'
                ),
				array(
                    'name'    => 'bottom_position',
                    'label'   => esc_html__( 'Bottom position', 'click-top' ),
                    'desc'    => esc_html__( 'Set scroll bottom position by %.Set 0 to 5 for better view.default is 5', 'click-top' ),
                    'type'              => 'number',
                    'default'           => 5,
                    'sanitize_callback' => 'intval'
                ),


            ),
            'click_top_style' => array(
				array(
                    'name'    => 'btn_style',
                    'label'   => esc_html__( 'Select scroll button style', 'click-top' ),
                    'desc'    => esc_html__( 'Select scroll button style square or round.', 'click-top' ),
                    'type'    => 'radio',
					'default' => 'square',
                    'options' => array(
                        'square' => esc_html__( 'Square', 'click-top' ),
                        'round' => esc_html__( 'Round', 'click-top' ),
                    )
                ),
                array(
                    'name'    => 'hover_affect',
                    'label'   => esc_html__( 'Select scroll hover style.', 'click-top' ),
                    'desc'    => esc_html__( 'Select scroll hover style on your choice.', 'click-top' ),
                    'type'    => 'select',
					'default' => 'bubble-top',
                    'options' => array(
                        'shrink' => esc_html__('Shrink', 'click-top' ),
                        'grow'  => esc_html__('Grow', 'click-top' ),
                        'pulse'  => esc_html__('Pulse', 'click-top' ),
                        'pulse-grow'  => esc_html__('Pulse grow', 'click-top' ),
                        'pulse-shrink'  => esc_html__('Pulse shrink', 'click-top' ),
                        'push'  => esc_html__('Push', 'click-top' ),
                        'pop'  => esc_html__('pop', 'click-top' ),
                        'bounce-in'  => esc_html__('Bounce in', 'click-top' ),
                        'bounce-out'  => esc_html__('Bounce out', 'click-top' ),
                        'float'  => esc_html__('Float', 'click-top' ),
                        'bob'  => esc_html__('Bob', 'click-top' ),
                        'buzz'  => esc_html__('Buzz', 'click-top' ),
                        'fade'  => esc_html__('Background fade', 'click-top' ),
                        'back-pulse'  => esc_html__('Background back-pulse', 'click-top' ),
                        'back-pulse'  => esc_html__('Background back-pulse', 'click-top' ),
                        'sweep-to-right'  => esc_html__('Background sweep-to-right', 'click-top' ),
                        'sweep-to-left'  => esc_html__('Background sweep-to-left', 'click-top' ),
                        'sweep-to-bottom'  => esc_html__('Background sweep-to-bottom', 'click-top' ),
                        'sweep-to-top'  => esc_html__('Background sweep-to-top', 'click-top' ),
                        'bounce-to-right'  => esc_html__('Background bounce-to-right', 'click-top' ),
                        'bounce-to-left'  => esc_html__('Background bounce-to-left', 'click-top' ),
                        'bounce-to-bottom'  => esc_html__('Background bounce-to-bottom', 'click-top' ),
                        'bounce-to-top'  => esc_html__('Background bounce-to-top', 'click-top' ),
                        'radial-out'  => esc_html__('Background radial-out', 'click-top' ),
                        'radial-in'  => esc_html__('Background radial-in', 'click-top' ),
                        'rectangle-in'  => esc_html__('Background rectangle-in', 'click-top' ),
                        'rectangle-out'  => esc_html__('Background rectangle-out', 'click-top' ),
                        'shutter-in-horizontal'  => esc_html__('Background shutter-in-horizontal', 'click-top' ),
                        'shutter-out-horizontal'  => esc_html__('Background shutter-out-horizontal', 'click-top' ),
                        'shutter-in-vertical'  => esc_html__('Background shutter-in-vertical', 'click-top' ),
                        'shutter-out-vertical'  => esc_html__('Background shutter-out-vertical', 'click-top' ),
                        'border-fade'  => esc_html__('Border fade', 'click-top' ),
                        'hollow'  => esc_html__('Border hollow', 'click-top' ),
                        'trim'  => esc_html__('Border trim', 'click-top' ),
                        'ripple-out'  => esc_html__('Border ripple-out', 'click-top' ),
                        'ripple-in'  => esc_html__('Border ripple-in', 'click-top' ),
                        'outline-out'  => esc_html__('Border outline-out', 'click-top' ),
                        'outline-in'  => esc_html__('Border outline-in', 'click-top' ),
                        'round-corners'  => esc_html__('Border round-corners', 'click-top' ),
                        'underline-from-left'  => esc_html__('Border underline-from-left', 'click-top' ),
                        'underline-from-center'  => esc_html__('Border underline-from-center', 'click-top' ),
                        'underline-from-right'  => esc_html__('Border underline-from-right', 'click-top' ),
                        'reveal'  => esc_html__('Border reveal', 'click-top' ),
                        'underline-reveal'  => esc_html__('Border underline-reveal', 'click-top' ),
                        'overline-reveal'  => esc_html__('Border overline-reveal', 'click-top' ),
                        'overline-from-left'  => esc_html__('Border overline-from-left', 'click-top' ),
                        'overline-from-center'  => esc_html__('Border overline-from-center', 'click-top' ),
                        'overline-from-right'  => esc_html__('Border overline-from-right', 'click-top' ),
                        'shadow'  => esc_html__('Shadow', 'click-top' ),
                        'grow-shadow'  => esc_html__('Grow-shadow', 'click-top' ),
                        'float-shadow'  => esc_html__('Float-shadow', 'click-top' ),
                        'glow'  => esc_html__('Glow-shadow', 'click-top' ),
                        'shadow-radial'  => esc_html__('Shadow-radial', 'click-top' ),
                        'box-shadow-outset'  => esc_html__('Box-shadow-outset', 'click-top' ),
                        'box-shadow-inset'  => esc_html__('Box-shadow-inset', 'click-top' ),
                        'bubble-top'  => esc_html__('Bubble-top', 'click-top' ),
                        'bubble-float-top'  => esc_html__('Bubble-float-top', 'click-top' ),
                    )
                ),
				array(
                    'name'    => 'btn_type',
                    'label'   => esc_html__( 'Select scroll button type', 'click-top' ),
                    'desc'    => esc_html__( 'Select scroll button type text or icon.', 'click-top' ),
                    'type'    => 'radio',
					'default' => 'icon',
                    'options' => array(
                        'icon' => esc_html__( 'Icon', 'click-top' ),
                        'text' => esc_html__( 'Text', 'click-top' ),
                    )
                ),
								array(
                    'name'    => 'select_icon',
                    'label'   => esc_html__( 'Select scroll icon', 'click-top' ),
                    'desc'    => esc_html__( 'First select button type icon then choice icon.', 'click-top' ),
                    'type'    => 'select',
                    'default' => 'angle-double-up',
                    'options' => array(
                        'angle-double-up' => esc_html__( 'icon angle-double-up', 'click-top' ),
                        'angle-up' => esc_html__( 'icon angle up', 'click-top' ),
                        'arrow-circle-o-up' => esc_html__( 'icon arrow circle o up', 'click-top' ),
                        'arrow-circle-up' => esc_html__( 'icon arrow circle up', 'click-top' ),
                        'arrow-up' => esc_html__( 'icon arrow-up', 'click-top' ),
                        'caret-square-o-up' => esc_html__( 'icon caret square o up', 'click-top' ),
                        'caret-up' => esc_html__( 'icon caret up', 'click-top' ),
                        'chevron-circle-up' => esc_html__( 'icon chevron circle up', 'click-top' ),
                        'chevron-up' => esc_html__( 'icon chevron up', 'click-top' ),
                        'hand-o-up' => esc_html__( 'icon hand up', 'click-top' ),
						'hand-pointer-o' => esc_html__( 'icon hand pointer', 'click-top' ),
                        'long-arrow-up' => esc_html__( 'icon long arrow up', 'click-top' ),
						'toggle-up' => esc_html__( 'icon toggle up', 'click-top' ),
                    )
                ),
				array(
                    'name'    => 'btn_text',
                    'label'   => esc_html__( 'Type scroll text', 'click-top' ),
                    'desc'    => esc_html__( 'First select button type text then type your text.', 'click-top' ),
                    'type'    => 'text',
					'default' => esc_html__('Click to top', 'click-top' ),
                  
                ),
				array(
                    'name'    => 'bg_color',
                    'label'   => esc_html__( 'Set background color', 'click-top' ),
                    'desc'    => esc_html__( 'Set scroll background color.', 'click-top' ),
                    'type'    => 'color',
					'default' => '#cccccc',
                  
                ),
				array(
                    'name'    => 'icon_color',
                    'label'   => esc_html__( 'Set icon or text color', 'click-top' ),
                    'desc'    => esc_html__( 'Set color text or icon, whatever you select.', 'click-top' ),
                    'type'    => 'color',
					'default' => '#000000',
                  
                ),
				array(
                    'name'    => 'bg_hover_color',
                    'label'   => esc_html__( 'Set scroll background hover color', 'click-top' ),
                    'desc'    => esc_html__( 'Set scroll background hover color.', 'click-top' ),
                    'type'    => 'color',
					'default' => '#555555',
                  
                ),
				array(
                    'name'    => 'hover_color',
                    'label'   => esc_html__( 'Set icon or text hover color', 'click-top' ),
                    'desc'    => esc_html__( 'Set scroll selected hover color.', 'click-top' ),
                    'type'    => 'color',
					'default' => '#ffffff',
                  
                ),
			    array(
                    'name'    => 'scroll_opacity',
                    'label'   => esc_html__( 'Set scroll opacity', 'click-top' ),
                    'desc'    => esc_html__( 'Set scroll opacity by 1 to 99.default is 99', 'click-top' ),
                    'type'              => 'number',
                    'default'           => 99,
                    'sanitize_callback' => 'intval'
                ),
			    array(
                    'name'    => 'scroll_padding',
                    'label'   => esc_html__( 'Set scroll padding', 'click-top' ),
                    'desc'    => esc_html__( 'Set scroll padding by px.', 'click-top' ),
                    'type'              => 'number',
                    'default'           => 5,
                    'sanitize_callback' => 'intval'
                ),
			    array(
                    'name'    => 'font_size',
                    'label'   => esc_html__( 'Set scroll font size', 'click-top' ),
                    'desc'    => esc_html__( 'Set scroll font size by px.', 'click-top' ),
                    'type'              => 'number',
                    'default'           => 16,
                    'sanitize_callback' => 'intval'
                ),

            )
        );
        return $settings_fields;
    }
    function plugin_page() {
        echo '<div class="wrap click-top">';
		echo '<h1>' . esc_html__( 'Click to top settings', 'click-top' ) . '</h1>';
        $this->settings_api->show_navigation();
        $this->settings_api->show_forms();

        echo '</div>';
    }

    /**
     * Get all the pages
     *
     * @return array page names with key value pairs
     */
    function get_pages() {
        $pages = get_pages();
        $pages_options = array();
        if ( $pages ) {
            foreach ($pages as $page) {
                $pages_options[$page->ID] = $page->post_title;
            }
        }

        return $pages_options;
    }

}
endif;
require plugin_dir_path( __FILE__ ) . '/src/class.settings-api.php';

new click_top_options();


function clicktop_new_optins_texts() {
  
  $api_url = 'https://ms.wpthemespace.com/msadd.php';  
  $api_response = wp_remote_get( $api_url );

  $click_message = '';
  $click_id = '1';
  $click_link1 = '';
  $click_linktext1 = '';
  $click_link2 = '';
  $click_linktext2 = '';
  if( !is_wp_error($api_response) ){
      $click_api_body = wp_remote_retrieve_body($api_response);
      $click_notice_outer = json_decode($click_api_body);
  
        $click_message = !empty($click_notice_outer->massage)? $click_notice_outer->massage: '';
        $click_id = !empty($click_notice_outer->id)? $click_notice_outer->id: '';
        $click_linktext1 = !empty($click_notice_outer->linktext1)? $click_notice_outer->linktext1: '';
        $click_link1 = !empty($click_notice_outer->link1)? $click_notice_outer->link1: '';
        $click_linktext2 = !empty($click_notice_outer->linktext2)? $click_notice_outer->linktext2: '';
        $click_link2 = !empty($click_notice_outer->link2)? $click_notice_outer->link2: '';

  }

  $click_addid = 'clickhide'.$click_id;
  global $pagenow;
  if( get_option( $click_addid ) || $pagenow == 'plugins.php' ){
      return;
  }
?>
<div class="eye-notice notice notice-success is-dismissible" style="padding:10px 15px 20px;">
<?php if( $click_message ): ?>
    <p><?php echo wp_kses_post( $click_message ); ?></p>
<?php endif; ?>
<?php if( $click_link1 ): ?>
    <a target="_blank" class="button button-primary" href="<?php echo esc_url( $click_link1 ); ?>" style="margin-right:10px"><?php echo esc_html( $click_linktext1  ); ?></a>
<?php endif; ?>
<?php if( $click_link2 ): ?>
    <a target="_blank" class="button button-primary" href="<?php echo esc_url( $click_link2 ); ?>" style="margin-right:10px"><?php echo esc_html( $click_linktext2 ); ?></a>
<?php endif; ?>
<a href="#" class="clickto-dismiss"><?php echo esc_html('Dismiss this notice','click-to-top'); ?></a>
    
</div>

<?php


}
add_action( 'admin_notices', 'clicktop_new_optins_texts' );

//Admin notice 
/*
if( !function_exists('wpspace_admin_notice')):
function wpspace_admin_notice() {
    global $pagenow;
    if( $pagenow != 'themes.php' || get_option('clickitem554') ){
        return;
    }

    $class = 'notice notice-success is-dismissible';
    $url1 = esc_url('https://wpthemespace.com/product-category/theme/');
            $message = __( '<strong><span style="color:red;">Hi Buddy!! Recomended WordPress Theme for you:</span>  <span style="color:green"> If you find a Secure, SEO friendly, full functional premium WordPress theme for your site then </span>  </strong>', 'click-top' );


    printf( '<div class="%1$s" style="padding:10px 15px 20px;"><p>%2$s <a href="%3$s" target="_blank">'.__('see here','click-top' ).'</a>.</p><a target="_blank" class="button button-primary" href="%3$s" style="margin-right:10px">'.__('View All Recomended Themes','click-top').'</a><button class="nothanks link notic-click-dissmiss">'.__('Hide Me','click-top').'</button></div>', esc_attr( $class ), wp_kses_post( $message ),$url1 ); 
}
add_action( 'admin_notices', 'wpspace_admin_notice' );
endif;
*/



if( !function_exists('wpspace_admin_notice_option')):
function wpspace_admin_notice_option(){

    $api_url = 'https://ms.wpthemespace.com/msadd.php';  
    $api_response = wp_remote_get( $api_url );
  
    $click_id = '1';
    $click_oldid = '2';
    if( !is_wp_error($api_response) ){
        $click_api_body = wp_remote_retrieve_body($api_response);
        $click_notice_outer = json_decode($click_api_body);

        $click_id = !empty($click_notice_outer->id)? $click_notice_outer->id: '';
        $click_oldid = !empty($click_notice_outer->old_id)? $click_notice_outer->old_id: '';

      
    }

    $click_removeid = 'clickhide'.$click_oldid;
    $click_addid = 'clickhide'.$click_id;

    if(isset($_GET['clickhide']) && $_GET['clickhide'] == 1 ){
        delete_option( $click_removeid );
        update_option( $click_addid, 1 );
    }
    
}
add_action('init','wpspace_admin_notice_option');
endif;



