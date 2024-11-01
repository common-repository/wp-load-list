<?php

class Load_List_Public {
	private $plugin_name;
	private $version;

	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	public function enqueue_styles() {
		global $wp_scripts;
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/load-list-public.css', array(), $this->version, 'all' );
                if ( is_user_logged_in() ) {
		$ui = $wp_scripts->query('jquery-ui-core');
		} 
		//$protocol = is_ssl() ? 'https' : 'http';
		//$url = "$protocol://ajax.googleapis.com/ajax/libs/jqueryui/{$ui->ver}/themes/smoothness/jquery-ui.min.css";

		
     	//wp_enqueue_style('jquery-ui-smoothness', $url, false, null);
     	wp_enqueue_style( $this->plugin_name . 'jqueryuimin', plugin_dir_url( __FILE__ ) . 'css/smoothness/jquery-ui.min.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name . 'jqueryuitheme', plugin_dir_url( __FILE__ ) . 'css/smoothness/theme.css', array(), $this->version, 'all' );

	}

	public function enqueue_scripts() {

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/load-list-public.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( 'jquery-ui-core' );
	    wp_enqueue_script( 'jquery-ui-widget' );
    	wp_enqueue_script( 'jquery-ui-mouse' );
    	wp_enqueue_script( 'jquery-ui-accordion' );
    	wp_enqueue_script( 'jquery-ui-autocomplete' );
    	wp_enqueue_script( 'jquery-ui-slider' );
    	wp_enqueue_script( 'jquery-ui-tabs' );
    	wp_enqueue_script( 'jquery-ui-sortable' );
    	wp_enqueue_script( 'jquery-ui-draggable' );
    	wp_enqueue_script( 'jquery-ui-droppable' );
    	wp_enqueue_script( 'jquery-ui-datepicker' );
    	wp_enqueue_script( 'jquery-ui-resize' );
    	wp_enqueue_script( 'jquery-ui-dialog' );
    	wp_enqueue_script( 'jquery-ui-button' );
	}

	public function display_partial(){


	}


}


