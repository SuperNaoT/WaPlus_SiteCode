<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage WaPlus
 * @since WaPlus waplus 0.1
 */
?>

<?php

  // 
  // メニュー位置・ページ種別判定及び設定
  // require_once( get_template_directory() . '/WaPlusCfg/common-php/setPageKinds.php' );
  get_template_part( 'WaPlusCfg/commpn-php/setPageKinds' );


  // 
  // *******************************************************
  // *******************************************************
  // ★ 【footerタグ】の取込み
  // *******************************************************
  // *******************************************************

  get_template_part( 'WaPlusCfg/common-php/comFooter', null, $args );
?>