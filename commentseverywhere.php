<?php

    /*
    Plugin Name: Comments Everywhere
    Description: Insert comments on any page / template etc. you want using a shortcode.
    Version: 1.0
    Author: SR
    */
	
	define('CE_PLUGIN_URL', plugin_dir_url( __FILE__ ));
	define('CE_PLUGIN_FOLDER', dirname( __FILE__ ));
	define('BASE_URL', get_bloginfo('url'));
	
	add_shortcode( 'comments_everywhere', 'do_comments_everywhere' );
	
	function do_comments_everywhere($atts)
	{
		require_once( CE_PLUGIN_FOLDER . '/files/comment-template.php');
		
		// Firts, let's enable comments
		add_filter("comments_open", "custom_comments_open");
		
		// Get unique identifier from shortcode attributes
		extract( shortcode_atts( array (
			'uid' => false,
		), $atts) );
		
		if($uid === false){ return false; }
		
		// add a prefix to avoid conflicts with post / pages
		$uid = abs(crc32('comments_everywhere_' . $uid));
		
		// set globals
		global $post, $wp_query;
		
		$args = array(
			'post_id'       => $uid,
			'status' 		=> 'approve',
			'order'   		=> 'ASC'
		);
			
		// get comments
		$wp_query->comments = get_comments( $args );
		$comment = $wp_query->comments;
		
		// output comments 		
		echo '<div id="comments">';
			echo '<ol class="comment-list">';
				wp_list_comments();
			echo '</ol>';
		echo '</div>';
		
		// output comment form
		echo '<div id="respond">';
			custom_comment_form(false, $uid, CE_PLUGIN_URL . '/files/wp-comments-post.php', BASE_URL . $_SERVER['REQUEST_URI']);
		echo '</div>';
	}
	
	function custom_comments_open()
	{
		return true;
	}
	