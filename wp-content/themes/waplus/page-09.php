<?php
/*
Template Name: 和Plus：会社概要
*/

  // 
  // *******************************************************
  // *******************************************************
  // ★ 【global：グローバル変数】の取込み
  // *******************************************************
  // *******************************************************

  // 当該固定ページ種別設定
  global $GB_menuPos;
  global $GB_page_flag;

  $GB_menuPos     = 9;    // 会社概要
  $GB_page_flag   = 0;

  // ヘッダー部の取込み
  get_header( null );
?>

    <!--  -->
    <!-- サイト：活動理念ページ・メインコンテンツ -->
    <div class="main" id="mainArea">

      <?php
        get_template_part( 'WaPlusCfg/contents/01_subPages/subPage', "09" );
      ?>

    </div>    <!-- main -->

<?php 
  // フッター部の取込み
  get_footer( null );
?>