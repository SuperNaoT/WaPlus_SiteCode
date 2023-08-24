<!--  -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!--                                                     -->
<!-- ■ 個別投稿ページ表示コード -->
<!--                                                     -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!--  -->

<?php

  // echo "<br><br><br><br><br> >>>>> Enter single.php ! <<<<< <br>";

  // // 
  // // *******************************************************
  // // *******************************************************
  // // ★ 【global：グローバル変数】の取込み
  // // *******************************************************
  // // *******************************************************
  // 表示対象ページ・メニュー種別
  $GB_menuPos     = 33;    // 最新ニュース・投稿個別ページ（single.php）：33
  // ホームページ内遷移動作制御フラグ
  $GB_page_flag   = 0;

  // 表示する投稿記事の種別「カテゴリー」
  $categoryInfo    = get_the_category();
  $GB_categoryType = $categoryInfo[0]->name;

  // 投稿個別表示ページに関する引数用変数
  global $args_largeLogoCLASS;
  global $args_largeLogoID;
  global $args_animateTITLE_PC;
  global $args_animateTITLE_MB;
  global $args_cthCopy;
  global $args_cthCopyMB;

  switch( $GB_categoryType )  {
    case $DEF_catName_news:
      $GB_tileListPageTitle = "　■ 新着ニュース　";
      // $GB_menuPos       = 7;
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
      // $GB_menuPos       = 8;
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
      // $GB_menuPos       = 31;
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
      break;

    case $DEF_catName_howTo:
      $GB_tileListPageTitle = "　■ 使い方　";
      // $GB_menuPos       = 32;
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
  get_header();

?>

  <!--  -->
  <!-- **************************************************** -->
  <!-- **************************************************** -->
  <!-- ■ pageComElmDspCtr 表示ID切り替え用スイッチ設定 -->
  <!-- ★ スクロール時表示・非表示する、固定位置表示ナビゲーションメニューの制御関連 -->
  <!--    1．入力フォーム・データ確認画面ではこれを表示していない。　　　　　　　 -->
  <!--    2．Javascript/スクロールに応じた表示コントロールにてエラーが発生する。 -->
  <!-- **************************************************** -->
  <!-- <div id="pageFlag" title="0"></div> -->
  <!-- **************************************************** -->
  <!-- <div class="mainContents"> -->
    <!-- <p>
      <br><br>
      　個別投稿記事表示ページ【single.php】<br>
      <br><br>
    </p> -->

    
    <!--  -->
    <!-- サイト：活動理念ページ・メインコンテンツ -->
    <div class="main" id="mainArea">

      <!--  -->
      <!-- ************************************************************ -->
      <!-- ************************************************************ -->
      <?php get_template_part( "/WaPlusCfg/common-php/categoryUtility/indicateOnePostPAGE" ); ?>
      <!-- ************************************************************ -->
      <!-- ************************************************************ -->

    </div>

  <!-- </div>    mainContents -->

<!-- フッター部の取込み -->
<?php //get_footer( null, $params ); ?>
<?php
  // echo " <<<<< Exit- single.php ! <<<<< <br>";

  get_footer();
?>