<?php
/*
Template Name: 和Plus：コンタクトフォーム確認・編集・送信テンプレート
*/

  global $GB_MOBILE_FLAG;
  global $GB_RELLAX_FLAG;

  global $GB_page_flag;

  // // ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
  // // ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
  // //
  // // ダミーデータ設定
  // // デバッグ用
  // $_POST['yourLnamePC'] ="田所";
  // $_POST['yourFnamePC'] ="直一";
  // $_POST['yourKLnamePC'] ="タドコロ";
  // $_POST['yourKFnamePC'] ="ナオカズ";

  // // $_POST['itemOptionPC'] ="itWeb";

  // $_POST['emailPC'] ="tadokoro@nisiq.net";
  // $_POST['textareaItemPC'] ="あああああいいいいいうううううえええええおおおおお\n" .
  //                           "かかかかかきききききくくくくくけけけけけこここここ\n" .
  //                           "さささささしししししすすすすすせせせせせそそそそそ\n" .
  //                           "たたたたたちちちちちつつつつつてててててととととと\n" .
  //                           "なななななにににににぬぬぬぬぬねねねねねののののの";

  // $_POST['yourLnameMB'] ="田所";
  // $_POST['yourFnameMB'] ="直一";
  // $_POST['yourKLnameMB'] ="タドコロ";
  // $_POST['yourKFnameMB'] ="ナオカズ";

  // // $_POST['itemOptionMB'] ="itWeb";

  // $_POST['emailMB'] ="tadokoro@nisiq.net";
  // $_POST['textareaItemMB'] ="あああああいいいいいうううううえええええおおおおお\n" .
  //                           "かかかかかきききききくくくくくけけけけけこここここ\n" .
  //                           "さささささしししししすすすすすせせせせせそそそそそ\n" .
  //                           "たたたたたちちちちちつつつつつてててててととととと\n" .
  //                           "なななななにににににぬぬぬぬぬねねねねねののののの";
  // // ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
  // // ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

  // 
  // ★ フォーム作成の参考サイト
  // 【参考：https://gray-code.com/php/make-the-form-introduction/】
  //   
  // 
  // for DEBUG!
  function console_log($data){
    echo '<script>';
    echo 'console.log('.json_encode($data).')';
    echo '</script>';
  }

  $itemOptionList = array(
    ["noSelect",      "》----------", "》----------", "n.tadokoro@waplus-jpn.co.jp" ],
    ["itWeb",         "》IT WEB ソリューション", "IT WEB ソリューション", "n.tadokoro@waplus-jpn.co.jp" ],
    ["originalGoods", "》オリジナル商品販売　　", "オリジナル商品販売"   , "n.tadokoro@waplus-jpn.co.jp" ],
    ["management",    "》経営支援　　　　　　　", "経営支援"            , "n.tadokoro@waplus-jpn.co.jp" ],
    ["alliance",      "》ビジネスアライアンス　", "ビジネスアライアンス" , "n.tadokoro@waplus-jpn.co.jp" ],
    ["other",         "》その他　　　　　　　　", "その他", "n.tadokoro@waplus-jpn.co.jp" ]
  );

  // 
  // *************************************************************
  // *************************************************************
  // *************************************************************
  // ■ 送信先メールアドレス取得処理
  // *************************************************************
  // *************************************************************
  // 
  // お問い合わせ送信先設定ファイルの読み込み
  $filename = get_template_directory() . '/WaPlusCfg/contents/01_subPages/contactFormCtr/sendAddress.txt';

  // ファイルを開く（'r'は読み込みモードで開く）
  $fp = fopen( $filename, 'r' ) or die( "ファイル読み込みエラー" );


  // 会社ホームページアドレスの読込み
  // お客様送信のメール本文中に記載される。
  $homeAddr = fgets( $fp );

  // 会社ホームページ・お問い合わせ/ご相談の送信元アドレス
  // １．会社ご担当者受取メール、送信元として利用される。
  $fromHPAddr = fgets( $fp );

  // 送信先レコード数の読込み
  // 基本的には、問合せ種別数と等しくなければならない！
  $recNum   = intval( fgets( $fp ) );
  // ファイルを最後まで読み込む
  // echo('<br><br><br><br><br>' );
  // echo('<br><br><br><br><br>' );
  // echo ' > 読込み対象レコード数 ☛ '.$recNum.'<br><br>';
  for(   $i=0 ; $i<$recNum ; $i++ )  {
    if ( $i>5 )  { break; }
    $itemOptionList[$i][3] = substr( fgets($fp), 15 );
  }
  // ファイルを閉じる
  fclose($fp);
  // *************************************************************
  // *************************************************************
  // *************************************************************

  // 
  // *************************************************************
  // *************************************************************
  // *************************************************************
  // ■ 入力データ、不足・不適当、値チェック機能
  // *************************************************************
  // *************************************************************
  // フォーム入力データが有ったら・・・
  $errors = array();

  // echo ' ? $_POST[itemOptionPC] 【' .$_POST['itemOptionPC']. '】<br><br>';
  // echo ' ? $_POST[itemOptionMB] 【' .$_POST['itemOptionMB']. '】<br><br>';

  // 初期入力時と、エラー発生時・入力データ再度編集希望時判別フラグ
  global $GB_reEditFlag;
         $GB_reEditFlag = 0; 

  if ( !empty($_POST) ) {
    // 初期入力時と、エラー発生時・入力データ再度編集希望時判別フラグ
    $GB_reEditFlag = 1; 

    // echo "<br><br><br><br><br><br>";
    // echo " >>>>> subPage-11.php 【入力値有り！】<br>";
    // echo "　　　? モバイル系データ　\$_POST[itemOptionMB] ☛【". $_POST['itemOptionMB'] ."】<br>";
    // echo "　　　? パソコン系データ　\$_POST[itemOptionPC] ☛【". $_POST['itemOptionPC'] ."】<br>";

    // 
    // １項目でもモバイル画面入力項目にデータが有ったら・・・
    if ( !empty($_POST['yourLnameMB' ]) || !empty($_POST['yourFnameMB'   ]) ||
         !empty($_POST['yourKLnameMB']) || !empty($_POST['yourKFnameMB'  ]) ||
         !empty($_POST['emailMB'     ]) || !empty($_POST['textareaItemMB'])    )  {
              //  ($_POST['itemOptionMB']  != "noSelect")                         )  {

      // echo "　　　? モバイル系データの復帰！　\$_POST[itemOptionMB] ☛【". $_POST['itemOptionMB'] ."】<br>";

      //スマホの場合に読み込むソースを記述
      $lName    = $_POST['yourLnameMB' ];
      $fName    = $_POST['yourFnameMB' ];
      $klName   = $_POST['yourKLnameMB'];
      $kfName   = $_POST['yourKFnameMB'];

      $mail     = $_POST['emailMB'];
      $askText  = $_POST['textareaItemMB'];

                                             $pvChkBox = "";
      if ( isset($_POST['agreementMB']) )  { $pvChkBox = $_POST['agreementMB']; }
      
                                                $option = "";
      if ( isset( $_POST['itemOptionMB'] ) )  { $option = $_POST['itemOptionMB']; }

      // echo ' ? $_POST[itemOptionMB] 【' .$_POST['itemOptionMB']. '】<br><br>';

      $_POST['yourLnamePC'   ] = "";
      $_POST['yourFnamePC'   ] = "";
      $_POST['yourKLnamePC'  ] = "";
      $_POST['yourKFnamePC'  ] = "";
      $_POST['emailPC'       ] = "";
      $_POST['textareaItemPC'] = "";
      $_POST['agreementPC'   ] = "";
      $_POST['itemOptionPC'  ] = "noSelect";
  
    } else {

      // echo "　　　? パソコン系データの復帰！<br>";

      //PCの場合に読み込むソースを記述
      $lName    = $_POST['yourLnamePC' ];
      $fName    = $_POST['yourFnamePC' ];
      $klName   = $_POST['yourKLnamePC'];
      $kfName   = $_POST['yourKFnamePC'];

      $mail     = $_POST['emailPC'];
      $askText  = $_POST['textareaItemPC'];
      
                                             $pvChkBox = "";
      if ( isset($_POST['agreementPC']) )  { $pvChkBox = $_POST['agreementPC']; }
      

                                                $option = "";
      if ( isset( $_POST['itemOptionPC'] ) )  { $option = $_POST['itemOptionPC']; }

      $_POST['yourLnameMB'   ] = "";
      $_POST['yourFnameMB'   ] = "";
      $_POST['yourKLnameMB'  ] = "";
      $_POST['yourKFnameMB'  ] = "";
      $_POST['emailMB'       ] = "";
      $_POST['textareaItemMB'] = "";
      $_POST['agreementMB'   ] = "";
      $_POST['itemOptionMB'  ] = "noSelect";
  
    }

    // 
    // 入力値のサニタイズ（問題入力値判定）
    // 
    // <script type="text/javascript">
    //   location.href = "http://www.yahoo.co.jp";
    // </script>
    // こう言った文字列を「<☛&lt; とか >☛&gt;」変換する
    // サニタイズ
    $clean      = array();
    $chkItems   = array();
    $chkItems[0] = $lName;
    $chkItems[1] = $fName;
    $chkItems[2] = $klName;
    $chkItems[3] = $kfName;
    $chkItems[4] = $mail;
    $chkItems[5] = $askText;
    $chkItems[6] = $pvChkBox;
    $i          = 0;
    foreach( $chkItems as $chkItem ) {
      $clean[$i] = htmlspecialchars( $chkItem, ENT_QUOTES);
             $i++;
    }
    $lName    = $clean[0];
    $fName    = $clean[1];
    $klName   = $clean[2];
    $kfName   = $clean[3];
    $mail     = $clean[4];
    $askText  = $clean[5];
    $pvChkBox = $clean[6];

    $optionLabel = "noSelect";

    // echo ' > 「$option」 ☛ 【'.$option.'】<br><br>';

    // 
    // オプションセレクトに於ける表示ラベル取得
    foreach( $itemOptionList as $value )  {

      // echo ' > 「$value[0]」 ☛ 【'.$value[0].'】<br><br>';

      if ( $value[0] === $option )  {
        // ① POST データが存在する場合はこちらの分岐に入る
        $optionLabel = $value[2];
        $sendWaPlus  = $value[3];
        break;
      }
    }
    $errors = validationInDat( $clean, $optionLabel );
  } else  {

    // echo " >>>>> subPage-11.php 【入力値無し！】<br>";
    
    $_POST['yourLnamePC'   ] = "";
    $_POST['yourFnamePC'   ] = "";
    $_POST['yourKLnamePC'  ] = "";
    $_POST['yourKFnamePC'  ] = "";
    $_POST['emailPC'       ] = "";
    $_POST['textareaItemPC'] = "";
    $_POST['agreementPC'   ] = "";
    $_POST['itemOptionPC'  ] = "noSelect";

    $_POST['yourLnameMB'   ] = "";
    $_POST['yourFnameMB'   ] = "";
    $_POST['yourKLnameMB'  ] = "";
    $_POST['yourKFnameMB'  ] = "";
    $_POST['emailMB'       ] = "";
    $_POST['textareaItemMB'] = "";
    $_POST['agreementMB'   ] = "";
    $_POST['itemOptionMB'  ] = "noSelect";

  }

  // console_log( $errors );

  // *************************************************************
  // *************************************************************
  // *************************************************************

  // 入力フォーム関連ページ指定フラグ
  // ヘッダー部・フッター部での、他ページへの遷移を可能・不可能制御用フラグ
  // $GB_page_flag = 0：入力フォームページ：遷移可能
  // $GB_page_flag = 1：入力内容確認ページ：遷移不可能
  // $GB_page_flag = 2：送信完了報告ページ：遷移可能
  // 
  $GB_page_flag  = 0;
  // 電話・お問い合わせ・上移動アイコン表示制御フラグ
  $GB_iconDspCtr = 1;

  // echo ' > 【１】入力フォーム画面制御コード「page_flag」 ☛ 【'.$GB_page_flag.'】<br><br>';

  //
  // 入力内容確認ページに遷移 
  // 入力データが無ければ、empty であれば、【$GB_page_flag = 0;】初期入力・入力値編集
  // 入力データが無しで、!empty、且つ $errors であれば、　【$GB_page_flag = 1;】入力値確認
  // 入力データが無しで、!empty、且つ $errors でなければ、【$GB_page_flag = 2;】送信済み
  if(   !empty( $_POST['btn_confirm'] ) )  {
    if ( empty( $errors ) )  {
      $GB_page_flag = 1;
    } else  {
      $GB_page_flag = 0;
    }

  //
  // 送信完了ページに遷移 
  } elseif ( !empty($_POST['btn_submit' ]) )  {
    if ( empty( $errors ) )  {
      $GB_page_flag = 2;

      // 
      // ■ 多重送信回避機能
      // セッションの書き込み
      // session_start();
      $_SESSION['page'] = true;

    } else  {
      $GB_page_flag = 0;
    }
  }

  // echo ' > 【２】入力フォーム画面制御コード「page_flag」 ☛ 【'.$GB_page_flag.'】<br><br>';

  // 
  // ***********************************************
  // ***********************************************
  //  入力値チェック関数
  // ***********************************************
  // ***********************************************
  function validationInDat( $data, $optLabel ) {

    $error = array();
  
    // 氏名のバリデーション
    if( empty($data[0]) ) {
      $error[] = "・「氏名」は必ず入力して下さい。";
    } elseif ( 20 < mb_strlen($data[0]) ) {
      $error[] = "・「氏名」は20文字以内で入力して下さい。";
    }
    
    // 名前のバリデーション
    if( empty($data[1]) ) {
      $error[] = "・「名前」は必ず入力して下さい。";
    } elseif ( 20 < mb_strlen($data[1]) ) {
      $error[] = "・「名前」は20文字以内で入力して下さい。";
    }
  
    // 氏名カナのバリデーション
    if( empty($data[2]) ) {
      $error[] = "・「フリガナ氏名」は必ず入力して下さい。";
    } elseif ( 20 < mb_strlen($data[2]) ) {
      $error[] = "・「フリガナ氏名」は20文字以内で入力して下さい。";
    }
    
    // 名前カナのバリデーション
    if( empty($data[3]) ) {
      $error[] = "・「フリガナ名前」は必ず入力して下さい。";
    } elseif ( 20 < mb_strlen($data[3]) ) {
      $error[] = "・「フリガナ名前」は20文字以内で入力して下さい。";
    }

    // メールアドレスのバリデーション
    if( empty($data[4]) ) {
      $error[] = "・「メールアドレス」は必ず入力して下さい。";
    } elseif( !preg_match( '/^[0-9a-z_.\/?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$/', $data[4]) ) {
      $error[] = "・「メールアドレス」は正しい形式で入力して下さい。";
    }

    // お問い合わせ種別のバリデーション
    if( $optLabel == "》----------" ) {
      $error[] = "・「お問い合わせ種別」は必ずお選び下さい。";
    }

    // console_log( $optLabel );
  
    // 性別のバリデーション
    if( empty($data[5]) ) {
      $error[] = "・「お問い合わせ内容」は必ず入力して下さい。";
    }

    // ライバシーポリシー同意のバリデーション
    if( empty($data[6]) ) {
      $error[] = "・「プライバシーポリシー」をご確認下さい。";
    }
    
  // console_log( $data[6] );

    return $error;
  }

  // ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
  // ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

  // 「ご相談・お問い合わせ」
  // $GB_menuPos = 11;

  // echo " ????? \$GB_page_flag 【". $GB_page_flag . "】";

  // ヘッダー部の取込み
                    $args[ 'GB_page_flag' ] = $GB_page_flag;
  get_header( null, $args );
?>

<!--  -->
<!-- ************************************************************* -->
<!-- ************************************************************* -->
<!--                                                               -->
<!-- ■ フォーム内、ご相談・お問い合わせ各種情報入力完了：メール送信処理 -->
<!--                                                               -->
<!-- １．入力内容を、メール形式に整え送信 -->
<!-- ２．「送信完了」メッセージ、送信内容一覧表示を実行 -->
<!--                                                               -->
<!--（「ヘッダ・コンテンツ・フッタ」迄を、このIF文以下に全て持つ）-->
<!--                                                               -->
<!-- ************************************************************* -->
<!-- ************************************************************* -->
<?php if( $GB_page_flag == 2 ):

  // echo " ☛☛☛☛☛☛　入力内容送信制御！"; 

  // session_start();
  if ( !empty($_SESSION['page']) && $_SESSION['page'] === true )  {

    // セッションの削除
    unset($_SESSION['page']);

    // 
    // ****************************************************************
    // ****************************************************************
    // ■ 送信完了報告ページ制御
    // ****************************************************************
    // ****************************************************************
    // 
    // ■ 自動返信メール送信
    // 【参考：https://blog.ver001.com/windows_php_sendmail/】
    // 
    // 変数の設定
    $to      = $sendWaPlus;
    $subject = "【通知：和Plus】 ホームページより、問い合わせが有りました！";
    $text    =   "\n株式会社 和Plus"
              . "\n下記内容にて、問い合わせを受けました。"
              
              . "\n\n　対応をお願いします。"

              . "\n\n --------------------------------------------------"
              . "\n【お問い合わせ種別】：" . $optionLabel

              . "\n\n --------------------------------------------------"
              . "\n【お名前】　　　　　：" . $lName  . " " . $fName
              . "\n　　　　　　　　　　：" . $klName . " " . $kfName

              . "\n\n --------------------------------------------------"
              . "\n【返信先アドレス】　：" . $mail

              . "\n\n --------------------------------------------------"
              . "\n【お問い合わせ内容】：\n" . $askText

              . "\n\n --------------------------------------------------"

              . "\n　ご対応の程、宜しくお願い致します。"

              . "\n\n"
              . "株式会社 和Plus"
              . "\n" . $homeAddr;

    $from    = "From: " . $fromHPAddr;

    // メール送信
    $rtn = mb_send_mail( $to, $subject, $text, $from );

    // console_log( $rtn );
    // console_log( $to );
    // console_log( $subject );
    // console_log( $from );

    // echo "<br><br><br><br><br><br>";
    // echo " ? mb_send_mail RTN       【". $rtn."】<br>";
    // echo " ? mb_send_mail \$to      【". $to."】<br>";
    // echo " ? mb_send_mail \$subject 【". $subject."】<br>";
    // echo " ? mb_send_mail \$from    【". $from."】<br>";

    // 
    // ■ 自動返信メール送信
    // 【参考：https://blog.ver001.com/windows_php_sendmail/】
    // 
    // 変数の設定
    $to      = $mail;
    $subject = "【ご案内：和Plus】 お問い合わせ、ありがとうございます";
    $text    =  "\n株式会社 和Plus です。"
              . "\nこの度は弊社ホームページより、"
              . "\nお問い合わせを頂き、誠にありがとうございます。"
              
              . "\n\n　お問い合わせに付きまして、"
              .   "\n　改めて弊社担当よりご案内を申し上げます。"

              . "\n\n　誠に恐れ入りますが、ご案内を申し上げます迄、"
              .   "\n　今少しお待ちくださいます様、お願いを申し上げます。"

              . "\n\n --------------------------------------------------"
              . "\n【お問い合わせ種別】：\n　》" . $optionLabel

              . "\n\n --------------------------------------------------"
              . "\n【お問い合わせ内容】：\n　》" . $askText

              . "\n\n --------------------------------------------------"
              . "\n【ご案内先メールアドレス】：\n　》" . $mail

              . "\n\n --------------------------------------------------"

              . "\n　何卒、宜しくお願い申し上げます。"

              . "\n\n"
              . "株式会社 和Plus"
              . "\n" . $homeAddr;

    $from    = "From: info@waplus-jpn.co.jp";


    // メール送信
    mb_send_mail( $to, $subject, $text, $from );
  } else  {
    $GB_page_flag = 0;
  }
?>

  <!--  -->
  <!-- サイト：活動理念ページ・メインコンテンツ -->
  <div class="main" id="mainArea">

  <!--  -->
  <!-- **************************************************** -->
  <!-- **************************************************** -->
  <!-- contactFormGSAPDspCtr 表示ID切り替え用スイッチ設定 -->
  <!-- **************************************************** -->
  <div id="pageFlag-2" title="2"></div>
  <!-- **************************************************** -->
  <!-- <div class="mainContents"> 【contactFormCOntents】に変更-->
  <?php require( get_template_directory() . "/WaPlusCfg/contents/01_subPages/contactFormCtr/inputDataSend.php" ); ?>
  <!-- </div> -->
 
<!--  -->
<!-- ************************************************************* -->
<!-- ************************************************************* -->
<!--                                                                 -->
<!-- ■ フォーム内、ご相談・お問い合わせ各種情報入力内容：確認処理 -->
<!--                                                               -->
<!-- １．入力内容を、表示 -->
<!-- ２．「送信する？」「戻る？」メッセージ、表示 -->
<!--                                                               -->
<!--（「ヘッダ・コンテンツ・フッタ」迄を、このIF文以下に全て持つ）-->
<!--                                                               -->
<!-- ************************************************************* -->
<!-- ************************************************************* -->
<?php elseif( $GB_page_flag == 1 ):
  // 
  // ****************************************************************
  // ****************************************************************
  // ■ 入力内容確認ページ制御
  // ****************************************************************
  // ****************************************************************
  // echo " ☛☛☛☛☛☛　記入内容：ご確認"; 
?>

  <!--  -->
  <!-- サイト：活動理念ページ・メインコンテンツ -->
  <div class="main" id="mainArea">

  <!--  -->
  <!-- **************************************************** -->
  <!-- **************************************************** -->
  <!-- contactFormGSAPDspCtr 表示ID切り替え用スイッチ設定 -->
  <!-- **************************************************** -->
  <div id="pageFlag-1" title="1"></div>
  <!-- **************************************************** -->
  <!-- HTML記述：ここに、入力内容を表示し、これでいい？と確認する処理を記述する -->
  <!-- <div class="mainContents"> 【contactFormCOntents】に変更-->
  <?php require( get_template_directory() . "/WaPlusCfg/contents/01_subPages/contactFormCtr/inputDataConf.php" ); ?>
  <!-- </div> -->
 
<?php
  // 
  // ****************************************************************
  // ****************************************************************
  // ■ 入力フォームページ制御
  // ****************************************************************
  // ****************************************************************
else: ?>

  <!--  -->
  <!-- **************************************************** -->
  <!-- **************************************************** -->
  <!-- contactFormGSAPDspCtr 表示ID切り替え用スイッチ設定 -->
  <!-- **************************************************** -->
  <div id="pageFlag-0" title="0"></div>
  <!-- **************************************************** -->

  <!-- else: /* echo " ☛☛☛☛☛☛　入力フォームページ制御！"; */ ?> -->
  <!-- HTML記述：入力不備、或いは戻って更新希望の場合の、フォーム入力処理制御を記述する -->
  <!-- <div class="mainContents"> 【contactFormCOntents】に変更-->
  <?php require( get_template_directory() . "/WaPlusCfg/contents/01_subPages/contactFormCtr/inputDataEdit.php" ); ?>
  <!-- </div> -->

<?php endif; ?>
