<!--  -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!--                                                     -->
<!-- ■ カテゴリー別アーカイブリストクリック時、呼出されるコード -->
<!-- 　1. 【front-page.php/ブログ日記】クリック時、 -->
<!-- 　2. 【sidebar-archiveList.php/新着ニュース】クリック時、 -->
<!-- 　3. 【sidebar-archiveList.php/ブログ日記　】クリック時、呼出される -->
<!--                                                     -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!--  -->

<?php
/*
Template Name: 投稿リスト表示ページ用基本テンプレート
*/

  // echo "<br><br><br><br> >>>>> Start category.php >>>>><br>";

  // 
  // *******************************************************
  // *******************************************************
  // ★ 【global：グローバル変数】の取込み
  // *******************************************************
  // *******************************************************
  $GB_menuPos    = 99;
  $GB_page_flag  = 0;

  global $args_largeLogoCLASS;
  global $args_largeLogoID;
  global $args_animateTITLE_PC;
  global $args_animateTITLE_MB;
  global $args_cthCopy;
  global $args_cthCopyMB;

  // 
  // カテゴリ情報があれば・・・
  if( isset( $_GET['cat'] ) )  { $cat = $_GET['cat']; }

  // カテゴリ名取得
  $categoryInfo    = get_category( $cat );
  $GB_categoryType = $categoryInfo->cat_name;
  $GB_categoryID   = $categoryInfo->cat_ID;

  // echo " 　　? \$categoryInfo->cat_name[ ". $categoryInfo->cat_name . " ]<br>";

  switch( $GB_categoryType )  {
    case $DEF_catName_news:
      $GB_tileListPageTitle = "　■ 新着ニュース　";
      $GB_menuPos           = 7;
      $GB_categoryType      = $DEF_catName_news;
      $args_largeLogoCLASS  = "newsLargeLogo";
      $args_largeLogoID     = "newsLgLogoImage";
      $args_animateTITLE_PC =
      "<span>N</span><span>e</span><span>w</span>　
       <span>A</span><span>r</span><span>r</span><span>i</span><span>v</span><span>a</span><span>l</span><span>s</span>";
      $args_animateTITLE_MB =
      "<span>N</span><span>e</span><span>w</span><br>
       <span>A</span><span>r</span><span>r</span><span>i</span><span>v</span><span>a</span><span>l</span><span>s</span>";
      $args_cthCopy   = "新着ニュース・ご案内";
      $args_cthCopyMB = "新着ニュース・ご案内" ;  
      break;

    case $DEF_catName_blog:
      $GB_tileListPageTitle = "　■ ブログ　";
      $GB_menuPos           = 8;
      $GB_categoryType      = $DEF_catName_blog;
      $args_largeLogoCLASS  = "blogLargeLogo";
      $args_largeLogoID     = "blogLgLogoImage";
      $args_animateTITLE_PC =
      "<span>B</span><span>l</span><span>o</span><span>g</span>　
       <span>A</span><span>r</span><span>c</span><span>h</span><span>i</span><span>v</span><span>e</span>";
      $args_animateTITLE_MB =
      "<span>B</span><span>l</span><span>o</span><span>g</span><br>
       <span>A</span><span>r</span><span>c</span><span>h</span><span>i</span><span>v</span><span>e</span>";
      $args_cthCopy   = "ブログ投稿一覧";
      $args_cthCopyMB = "ブログ投稿一覧" ;
      break;

    case $DEF_catName_tech:
      $GB_tileListPageTitle = "　■ 技術の種　";
      $GB_menuPos           = 31;
      $GB_categoryType      = $DEF_catName_tech;
      $args_largeLogoCLASS  = "techLargeLogo";
      $args_largeLogoID     = "techLgLogoImage";
      $args_animateTITLE_PC =
      "<span>T</span><span>e</span><span>c</span><span>h</span><span>n</span><span>i</span><span>c</span><span>a</span><span>l</span>　
       <span>T</span><span>i</span><span>p</span><span>s</span>";
      $args_animateTITLE_MB =
      "<span>T</span><span>e</span><span>c</span><span>h</span><span>n</span><span>i</span><span>c</span><span>a</span><span>l</span><br>
       <span>T</span><span>i</span><span>p</span><span>s</span>";
      $args_cthCopy   = "技術の種";
      $args_cthCopyMB = "技術の種";
      $args_cthCopy   = "技術の種";
      $args_cthCopyMB = "技術の種";
      break;

    case $DEF_catName_howTo:
      $GB_tileListPageTitle = "　■ 使い方　";
      $GB_menuPos       = 32;
      $GB_categoryType = $DEF_catName_howTo;
  
      $args_largeLogoCLASS  = "howToLargeLogo";
      $args_largeLogoID     = "howToLgLogoImage";
      $args_animateTITLE_PC =
      "<span>H</span><span>o</span><span>w</span><span>T</span><span>o</span>　
       <span>U</span><span>s</span><span>e</span>";
      $args_animateTITLE_MB =
      "<span>H</span><span>o</span><span>w</span><span>T</span><span>o</span><br>
       <span>U</span><span>s</span><span>e</span>";
      $args_cthCopy   = "WordPress の使い方";
      $args_cthCopyMB = "WordPress の使い方";  
  }

  // ヘッダー部の取込み
  // get_header( null, $params );
  get_header();
?>

  <div class="main" id="mainArea">

    <!--  -->
    <!-- ************************************************************ -->
    <!-- ************************************************************ -->
    <?php

      // //
      // // TEST MODE version 
      // if ( $GB_menuPos == 7 )  {
      //   get_template_part( 'WaPlusCfg/contents/01_subPages/subPage', "07" );
      // } else if ( $GB_menuPos == 8 )  {
      //   get_template_part( 'WaPlusCfg/contents/01_subPages/subPage', "08" );
      // }

      // 
      // OFFICIAL version!
      get_template_part( '/WaPlusCfg/common-php/categoryUtility/IndicateCategoryArchivePAGE' );
    ?>

    <!-- ************************************************************ -->
    <!-- ************************************************************ -->
  </div>    <!-- mainContents -->

<!-- フッター部の取込み -->
<?php get_footer(); ?>