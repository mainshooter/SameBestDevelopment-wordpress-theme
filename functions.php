<?php
function register_my_menu() {
  register_nav_menu('top-menu',__( 'Top Menu' ));
}
add_action( 'init', 'register_my_menu' );
?>

<?php
function myshortcode_title( ){
   return get_the_title();
}
add_shortcode( 'page_title', 'myshortcode_title' );
?>

<?php
function cn_include_content($pid) {
	$thepageinquestion = get_post($pid);
	$content = $thepageinquestion->post_content;
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]>', $content);
	echo $content;
}
add_shortcode('includepage', 'cn_include_page');
?>
