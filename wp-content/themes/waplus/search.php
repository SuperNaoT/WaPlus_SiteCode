<!--  -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!--                                                     -->
<!-- ■ カテゴリー別アーカイブリストクリック時、呼出されるコード -->
<!-- 　1. 【sidebar.php】年代・年月クリック時 -->
<!--                                                     -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!--  -->
<?php
/*
Template Name: 投稿リスト表示ページ用基本テンプレート
*/

  // echo "<br><br><br><br> >>>>> Start search.php >>>>><br>";

  // 
  // *******************************************************
  // *******************************************************
  // ★ 【global：グローバル変数】の取込み
  // *******************************************************
  // *******************************************************
  $GB_menuPos    = 99;
  $GB_page_flag  = 0;
  $error_flag    = 0;

  global $args_largeLogoCLASS;
  global $args_largeLogoID;
  global $args_animateTITLE_PC;
  global $args_animateTITLE_MB;
  global $args_cthCopy;
  global $args_cthCopyMB;


  // 
  // カテゴリ情報があれば・・・
  if (isset($_GET['s']) && empty($_GET['s']))  {
    $GB_blogListTitle = "　■ 検索条件が入力されていません！";
    $error_flag = 1;
  }

  $GB_tileListPageTitle = "　■ 検索結果　";
  $GB_menuPos           = 405;

  $args_largeLogoCLASS  = "searchResultLargeLogo";
  $args_largeLogoID     = "searchResultLogoImage";
  $args_animateTITLE_PC =
   "<span>S</span>
    <span>e</span>
    <span>a</span>
    <span>r</span>
    <span>c</span>
    <span>h</span>　
    <span>r</span>
    <span>e</span>
    <span>s</span>
    <span>u</span>
    <span>l</span>
    <span>t</span>";
  $args_animateTITLE_MB =
   "<span>S</span>
    <span>e</span>
    <span>a</span>
    <span>r</span>
    <span>c</span>
    <span>h</span><br>
    <span>r</span>
    <span>e</span>
    <span>s</span>
    <span>u</span>
    <span>l</span>
    <span>t</span>";
  $args_cthCopy   = "検索条件【" . $_GET['s'] . "】" ;
  $args_cthCopyMB = "検索条件【" . $_GET['s'] . "】" ;

  // ヘッダー部の取込み
  // get_header( null, $params );
  get_header( null );
?>

  <div class="main" id="mainArea">

    <!--  -->
    <!-- ************************************************************ -->
    <!-- ************************************************************ -->
    <?php
   
      // 
      // OFFICIAL version!
      get_template_part( '/WaPlusCfg/common-php/categoryUtility/IndicateSearchResultPAGE' );
    ?>

    <!-- ************************************************************ -->
    <!-- ************************************************************ -->
  </div>    <!-- mainContents -->

<!-- フッター部の取込み -->
<?php get_footer( null ); ?>