<?php

  // 
  // クライアントデバイス種別判定フラグ
  // 投稿一覧表示に於ける、ページネーション文字列表示制御に利用
  global $GB_MOBILE_FLAG;
  global $GB_DEVICE_KIND;

  // 
  // pallaxアニメーション動作フラグ
  global $GB_RELLAX_FLAG;

  // 
  // ヘッダー部・横並びメインメニュー表示位置「１～ 
  // $GB_menuPos :  0 / Home
  // $GB_menuPos :  1 / Philosophy
  // $GB_menuPos :  2 / Management
  // $GB_menuPos :  3 / IT WEB Sol
  // $GB_menuPos :  4 / Original Products Sales
  // $GB_menuPos :  5 / i-nekka
  // $GB_menuPos :  6 / ACestus
  // $GB_menuPos :  7 / <category>News
  // $GB_menuPos :  8 / <category>Blog
  // $GB_menuPos :  9 / Company Profile
  // $GB_menuPos : 10 / Provacy Policy
  // $GB_menuPos : 11 / Contact Us
  // $GB_menuPos : 30 / IT WEB Past Dev Result
  // $GB_menuPos : 31 / <category>tech
  global $GB_menuPos;

  // echo "\n\n\n >>>>> globalVariablesDef.php [\$GB_menuPos] ☛【". $GB_menuPos . "】\n";

  //
  // ■ pageComElmDspCtr 表示ID切り替え用スイッチ設定
  //  ★ スクロール時表示・非表示する【固定位置表示ナビゲーションメニュー】の制御関連
  //     1．入力フォーム・データ確認画面ではこれを表示していない。　　　　　　　
  //     2．Javascript/スクロールに応じた表示コントロールにてエラーが発生する。
  // 
  // 入力フォーム関連ページ指定フラグ
  // $GB_page_flag = 0：入力フォームページ
  // $GB_page_flag = 1：入力内容確認ページ
  // $GB_page_flag = 2：送信完了報告ページ
  global $GB_page_flag;

  // 
  // 「archive.php」投稿一覧タイル表示画面にて表示する、
  // 「ページタイトル文字列」格納用変数
  global $GB_tileListPageTitle;

  // 
  // 「front-page.php：新着ニュースセクション」「archive.php」投稿一覧表示画面にて表示対象となる、
  // 「カテゴリー名称」格納用変数
  global $GB_categoryType;
  // 「カテゴリーＩＤ」格納用変数
  global $GB_categoryID;

  //
  // 投稿一覧表示に於ける、表示件数指定 
  // Wordpress に於ける表示数とは別に、強制的に指定変更する
  global $GB_countOfPosts;

  // 
  // 「カテゴリ：ＩＤ」
  global $DEF_catID_news;
  global $DEF_catID_blog;
  global $DEF_catID_tech;
  global $DEF_catID_howTo;

  global $DEF_catName_news;
  global $DEF_catName_blog;
  global $DEF_catName_tech;
  global $DEF_catName_howTo;

  // 
  // 表示中投稿年月
  global $GB_postYear;
  global $GB_postMonth;

  // echo " >>>>> called globalVariableDef !!!!!";
?>