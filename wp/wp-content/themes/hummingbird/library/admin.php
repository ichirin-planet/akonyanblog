<?php

if(is_mobile()){
add_filter( 'show_admin_bar', '__return_false' );
}

// Remove hentry class
function remove_hentry( $classes ) {
    if (!is_single()) $classes = array_diff($classes, array('hentry'));
    return $classes;
}
add_filter('post_class', 'remove_hentry');

// include Gutenberg editor css
add_action( 'enqueue_block_editor_assets', 'gutenberg_stylesheets_custom' );
function gutenberg_stylesheets_custom() {
  $editor_style_url = get_theme_file_uri('/library/css/editor-style.css');
  wp_enqueue_style( 'theme-editor-style', $editor_style_url );
}

// Add Custom Field
add_action('admin_menu', 'add_cf_single_fullview');
add_action('save_post', 'save_custom_postdata');
 
function add_cf_single_fullview() {
    add_meta_box( 'singlepostlayout','記事レイアウト', 'singlepostlayout_custom_field', 'post', 'side' );
}
 
function singlepostlayout_custom_field(){
       $id = get_the_ID();
        $singlepostlayout_radio = get_post_meta($id,'singlepostlayout_radio',true);
        $data = array(
             array("デフォルト（2カラム）","デフォルト（2カラム）","checked"),
	         array("フルサイズ（1カラム）","フルサイズ（1カラム）",""),
         );
 
        foreach($data as $d){
        if($d[1]==$singlepostlayout_radio) $d[2] ="checked";
        echo <<<EOS
        <label style="display: block;"><input type="radio" name="singlepostlayout_radio" value="{$d[1]}" {$d[2]}>{$d[0]}</label>
EOS;
    }
}
/* Data Save */
function save_custom_postdata($post_id){
    $singlepostlayout_radio=isset($_POST['singlepostlayout_radio']) ? $_POST['singlepostlayout_radio']: null;
    $singlepostlayout_radio_ex = get_post_meta($post_id, 'singlepostlayout_radio', true);
    if($singlepostlayout_radio){
      update_post_meta($post_id, 'singlepostlayout_radio',$singlepostlayout_radio);
    }else{
      delete_post_meta($post_id, 'singlepostlayout_radio',$singlepostlayout_radio_ex);
    }
}