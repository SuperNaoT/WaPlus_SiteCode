<?php
  // 
  // *******************************************************
  // *******************************************************
  // ★ 【global：グローバル変数・メニューポジション】の取込み
  // *******************************************************
  // *******************************************************
  global $DEF_catID_news;
  global $DEF_catID_blog;

  // 
  // 当該固定ページ種別設定
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
  // ...
  global $GB_menuPos;
  global $GB_page_flag;
  global $GB_DEVICE_KIND;

  // echo " >>>>> Through 【comHeader】 \$GB_menuPos  【 " . $GB_menuPos . " 】<br>";
  // echo " >>>>> Through 【comHeader】 \$GB_page_flag【 " . $GB_page_flag . " 】<br>";
  
  // 初期化
  $pageLink[ 0] = esc_url( home_url( '/'           ) );  // ホーム
  $pageLink[ 1] = esc_url( home_url( '01_philo'    ) );  // 企業理念
  $pageLink[ 2] = esc_url( home_url( '02_mngsup'   ) );  // 経営支援
  $pageLink[ 3] = esc_url( home_url( '03_itwebs'   ) );  // IT WEB ソリューション
  $pageLink[ 4] = esc_url( home_url( '04_orgods'   ) );  // オリジナル商品販売
  $pageLink[ 5] = esc_url( home_url( '05_inekka'   ) );  // オリジナル商品販売・いーねっか
  $pageLink[ 6] = esc_url( home_url( '06_acestus'  ) );  // オリジナル商品販売・クロコダイル

  // $pageLink[ 7] = esc_url( home_url( '07_news'     ) );  // 最新ニュース
  // $pageLink[ 8] = esc_url( home_url( '08_blog'     ) );  // ブログ日記・予約枠
  $pageLink[ 7] = esc_url( get_category_link( $DEF_catID_news ) );  // 最新ニュース  
  $pageLink[ 8] = esc_url( get_category_link( $DEF_catID_blog ) );  // ブログ日記・予約枠

  $pageLink[ 9] = esc_url( home_url( '09_comprof'  ) );  // 会社概要
  $pageLink[10] = esc_url( home_url( '10_ppolicy'  ) );  // 個人情報保護指針
  $pageLink[11] = esc_url( home_url( '11_contactf' ) );  // お問い合わせ・予約枠

  // 
  // OGP 利用時表示用、ページ対応「DESCRIPTION」
  $pageDescription[ 0] = "";
  $pageDescription[ 1] = "";
  $pageDescription[ 2] = "";
  $pageDescription[ 3] = "";
  $pageDescription[ 4] = "";
  $pageDescription[ 5] = "";
  $pageDescription[ 6] = "";
  $pageDescription[ 7] = "";
  $pageDescription[ 8] = "";
  $pageDescription[ 9] = "";
  $pageDescription[10] = "";
  $pageDescription[11] = "";

  $menuCount = 12;
  for( $i=0 ; $i< $menuCount ; $i++ ) { $menuColor[$i]          = 'color:#333;'; }
                                        $menuColor[$GB_menuPos] = 'color:limegreen;';
                                        $pageLink [$GB_menuPos] = '#mainArea';
        
  // 
  // メニュー位置・ページ種別判定及び設定
  require_once( get_template_directory() . '/WaPlusCfg/common-php/setPageKinds.php' );

?>

<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

	<head>

    <!-- Google Tag Manager -->
    <script>
      (function(w,d,s,l,i){
        w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});
        var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
            j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
            f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WRGTZ4M');
    </script>
    <!-- End Google Tag Manager -->

		<meta charset="<?php bloginfo( 'charset' ); ?>">

    <!-- レスポンシブ対応設定。-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
    
		<link rel="profile" href="//gmpg.org/xfn/11">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>
      <?php
        
        // // 
        // // メニュー位置・ページ種別判定及び設定
        // require_once( get_template_directory() . '/WaPlusCfg/common-php/setPageKinds.php' );

        echo $titleMsg;
        echo bloginfo( 'name' );  // 【bloginfo('name')】Wordpress ダッシュボードにて設定した情報を取得
      ?>
    </title>

    <!-- サイト説明：SEO対策一環 -->
    <!-- 「WordPressダッシュボード：【設定】☛【一般】☛【キャッチフレーズ】引用」 -->
  <?php if ( $GB_menuPos == 0 ): ?>
    <meta name="description" content="<?php echo bloginfo( 'description' ); ?>" >
  <?php else: ?>
    <meta name="description" content="<?php echo $descriptMsg; ?>" >
  <?php endif; ?>

    <!-- For Google search Engine.-->
    <!-- サイト所有権の証明「１」HTML確認ファイル -->
    <!-- サイト所有権の証明「２」HTMLタグ -->
    <meta name="google-site-verification" content="Krob07mThJONh2h2vEuYlQKXW2tpJXNnOZ2EdoZpfg8"/>

    <!-- ブラウザタブ・ファビコン表示 -->
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri().'/WaPlusCfg/Images/favicon.ico' ); ?>">

    <!-- Google Analytics トラッキングコード -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="//www.googletagmanager.com/gtag/js?id=UA-226360801-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-226360801-2');
    </script>
    
    <!-- For NEW Version : Google Analytics 4 -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="//www.googletagmanager.com/gtag/js?id=G-NTYTNNFSZY"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-NTYTNNFSZY');
    </script>

    <!-- For Microsoft:Clarity -->
    <!-- サイト・ヒートマップ検査導入 -->
    <script type="text/javascript">
      (function(c,l,a,r,i,t,y){
          c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
          t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
          y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
      })(window, document, "clarity", "script", "g4remilym6");
    </script>

    <?php require_once( get_template_directory() . '/WaPlusCfg/common-php/seo_structureData.php' ); ?>

    <!-- ★【重要】WORDPRESSのお約束：WORDPRESS利用のJavascript/PHP等の取込み（WORDPRESS管理バー表示等々） -->
    <?php wp_head(); ?>
	</head>

	<!--【body_class()】 -->
	<!-- ★ WordPress にて当該ページ種別に応じたクラスを「<body>タグ」に追加 -->
	<body class="bodyLock <?php echo $galleryFlg; ?> <?php echo $GB_DEVICE_KIND; ?>" <?php body_class(); ?>> <?php wp_body_open(); ?>

    <!-- Google Tag Manager (noscript) -->
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WRGTZ4M" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

		<?php
			// //
			// // ★ function.php に下記コードを追加すると、
			// ーーーーーーーーーーーーーーーーーーーーーーー
			// add_action( 'wp_body_open', function() {
			// 	\?^>
			// 	!-- ここから挿入したいソースコードなどスタート --
			// 	・・・・・
			// 	!-- ここまで --
			// 	\<\?php
			// }); 
			// ーーーーーーーーーーーーーーーーーーーーーーー
			// // 下記の様に関数【wp_body_open()】を呼ぶと、
			// // 上記挿入したいソースコードが、ここに展開される！
			// // 
			wp_body_open(); 
		?>

  <div class="mask" id="mask"></div>

  <!--  -->
  <!-- 和Plus ホームページ・トップページ表示時のみ、ロード待ち画面表示 -->
  <?php if ( $GB_menuPos == 0 ): ?>
    <?php //include( get_template_directory() . "/WaPlusCfg/common-php/loadScreen.php" ); ?>
    <?php require_once( get_template_directory() . "/WaPlusCfg/common-php/loadScreen.php" ); ?>
  <?php endif; ?>

  <?php // echo " >>>>> (1) \$GB_menuPos【 " . $GB_menuPos . " 】\n"; ?>

  <!--  -->
  <!-- サイトロード画面消去後ロード -->
  <div class="<?php echo $pageWrapper ?>">

    <!--  -->
    <!-- メインページ内ヘッダー部 -->
    <header class="siteHeader">

      <!-- ヘッダー部ロゴマーク -->
      <div class="headerLogo">
        <?php if ( $GB_page_flag != 1 ): ?>
          <a href="<?php echo esc_url( home_url('/') ); ?>">
            <img class="waPlusLogo"   src="<?php echo esc_url( get_template_directory_uri().'/WaPlusCfg/Images/WaPlus-LogoName.png' ) ?>" alt="株式会社和Plus・和プラス・ワプラスのロゴマークと会社名が入った画像">
          </a>
        <?php else: ?>
          <img class="waPlusLogoNL" src="<?php echo esc_url( get_template_directory_uri().'/WaPlusCfg/Images/WaPlus-LogoName.png' ) ?>" alt="株式会社和Plus・和プラス・ワプラスのロゴマークと会社名が入った画像">
        <?php endif; ?>
      </div>

      <!-- お問い合わせフォーム、入力値確認画面は、メニュー表示無し -->
      <!-- お問い合わせフォーム、入力値確認画面は、メニュー表示無し -->
      <!-- お問い合わせフォーム、入力値確認画面は、メニュー表示無し -->
      <!-- ここから ********************************************* -->
      <?php if ( $GB_page_flag != 1 ): ?>
        <div class="hamburgerMenu-Wrapper">
          <!-- <a class="hamburgerMenuButton" id="hamburgerMenuButton">
            <div></div>
            <div></div>
            <div></div>
          </a> -->
          <div class="hamburgerMenuButton" id="hamburgerMenuButton">
            <div></div>
            <div></div>
            <div></div>
          </div>
          <!-- EMACCS【nav>ul>li*3>a{menu$}】 -->
          <div class="hamburgerNav" id="hamburgerNav">
            <ul>
              <li><a style="<?php echo $menuColor[ 0] ?>" href="<?php echo esc_url( $pageLink[ 0] ); ?>" class="hbgrMenuElm">- ホーム</a></li>
              <li><a style="<?php echo $menuColor[ 1] ?>" href="<?php echo esc_url( $pageLink[ 1] ); ?>" class="hbgrMenuElm">- 企業理念</a></li>
              <li><a style="<?php echo $menuColor[ 2] ?>" href="<?php echo esc_url( $pageLink[ 2] ); ?>" class="hbgrMenuElm">- 経営支援</a></li>
              <li><a style="<?php echo $menuColor[ 3] ?>" href="<?php echo esc_url( $pageLink[ 3] ); ?>" class="hbgrMenuElm">- IT WEB ソリューション</a></li>
              <li><a style="<?php echo $menuColor[ 4] ?>" href="<?php echo esc_url( $pageLink[ 4] ); ?>" class="hbgrMenuElm">- オリジナル商品販売</a></li>
              <li><a style="<?php echo $menuColor[ 5] ?>" href="<?php echo esc_url( $pageLink[ 5] ); ?>" class="hbgrMenuElm">　・ i-nekka：大人の素敵雑貨</a></li>
              <li><a style="<?php echo $menuColor[ 6] ?>" href="<?php echo esc_url( $pageLink[ 6] ); ?>" class="hbgrMenuElm">　・ Aphrodite Cestus：クロコダイル</a></li>
              <li><a style="<?php echo $menuColor[ 7] ?>" href="<?php echo esc_url( $pageLink[ 7] ); ?>" class="hbgrMenuElm">- 新着ニュース・ご案内</a></li>
              <li><a style="<?php echo $menuColor[ 8] ?>" href="<?php echo esc_url( $pageLink[ 8] ); ?>" class="hbgrMenuElm">- ブログ</a></li>
              <li><a style="<?php echo $menuColor[ 9] ?>" href="<?php echo esc_url( $pageLink[ 9] ); ?>" class="hbgrMenuElm">- 会社概要</a></li>
              <li><a style="<?php echo $menuColor[10] ?>" href="<?php echo esc_url( $pageLink[10] ); ?>" class="hbgrMenuElm">- 個人情報保護指針</a></li>
              <li><a style="<?php echo $menuColor[11] ?>" href="<?php echo esc_url( $pageLink[11] ); ?>" class="hbgrMenuElm">- お問い合わせ</a></li>
            </ul>
          </div>
        </div>
        <!-- ここ迄 ********************************************* -->

        <div id="subMnuErase"></div>
        <nav id="navigation">
          <ul class="mainNav">
            <!-- *************************************************** -->
            <!-- 企業理念ページ -->
            <!-- *************************************************** -->
            <li class="navInter"></li>
            <li id="philoMenu" >
              <!--  -->
              <!-- サイト・トップページ（サイト内企業理念セクションへ移動） -->

              <?php if ( $GB_menuPos == 0 ): ?>
                <a href="#siteLoadWrapper">Philosophy</a>
                <div class="philoSubMenu" id="philoSubMenu">
                  <ul>
                    <li><a href="<?php echo esc_url( home_url('01_philo') ); ?>">- 企業理念</a></li>
                  </ul>
                </div>

              <!--  -->
              <!-- サイト・活動理念（トップページへ移動） -->
              <?php elseif ( $GB_menuPos == 1 ): ?>
                <a href="<?php echo esc_url( home_url('/') ); ?>?loadScreen=no">Home</a>
              
              <!--  -->
              <!-- サイト・トップページ／活動理念以外（トップページ／活動理念ページへ移動） -->
              <?php else: ?>
                <a href="<?php echo esc_url( home_url('/') ); ?>?loadScreen=no">Home</a>
                <div class="philoSubMenu" id="philoSubMenu">
                  <ul>
                    <!--  -->
                    <!-- home_url()引数は、WordPress内で指定する「slug」 -->
                    <li><a href="<?php echo esc_url( home_url('01_philo') ); ?>">- 企業理念</a></li>
                  </ul>
                </div>
              <?php endif; ?>
            </li>

            <!-- *************************************************** -->
            <!-- 経営支援・IT WEBソリューション・オリジナル商品販売 -->
            <!-- *************************************************** -->
            <li class="navInter"></li>
            <li id="bizMenu">

              <!--  -->
              <!-- サイト・トップページ（事業紹介セクションに移動） -->
              <?php if ( $GB_menuPos == 0 ): ?>   <!-- 経営支援 -->
                <a href="#OurServices">Business</a>
                <div class="bizSubMenu" id="bizSubMenu">
                  <ul>
                    <li><a href="<?php echo esc_url( home_url('02_mngsup') ); ?>">- 経営支援</a></li>
                    <li><a href="<?php echo esc_url( home_url('03_itwebs') ); ?>">- IT WEB ソリューション</a></li>
                    <li><a href="<?php echo esc_url( home_url('04_orgods') ); ?>">- オリジナル商品販売</a></li>            <!-- Own brand -->
                  </ul>
                </div>

              <!--  -->
              <!-- サイト・経営支援ページ -->
              <?php elseif ( $GB_menuPos == 2 ): ?>   <!-- 経営支援 -->
                <!-- <a href="#mainArea">Business</a> -->
                <a href="<?php echo esc_url( home_url('03_itwebs') ); ?>">Business</a>
                <div class="bizSubMenu" id="bizSubMenu">
                  <ul>
                    <li><a href="<?php echo esc_url( home_url('03_itwebs') ); ?>">- IT WEB ソリューション</a></li>
                    <li><a href="<?php echo esc_url( home_url('04_orgods') ); ?>">- オリジナル商品販売</a></li>            <!-- Own brand -->
                  </ul>
                </div>

              <!--  -->
              <!-- サイト・IT WEB ソリューションページ -->
              <?php elseif ( $GB_menuPos == 3 ): ?>   <!-- IT WEB ソリューション -->
                <!-- <a href="#mainArea">Business</a> -->
                <a href="<?php echo esc_url( home_url('02_mngsup') ); ?>">Business</a>
                <div class="bizSubMenu" id="bizSubMenu">
                  <ul>
                    <li><a href="<?php echo esc_url( home_url('02_mngsup') ); ?>">- 経営支援</a></li>
                    <li><a href="<?php echo esc_url( home_url('04_orgods') ); ?>">- オリジナル商品販売</a></li>            <!-- Own brand -->
                  </ul>
                </div>

              <!--  -->
              <!-- サイト・IT WEB エンジニア略歴 -->
              <?php elseif ( $GB_menuPos == 30 ): ?>
                <!-- <a href="#mainArea">Business</a> -->
                <a href="<?php echo esc_url( home_url('03_itwebs') ); ?>">Business</a>
                <div class="bizSubMenu" id="bizSubMenu">
                  <ul>
                    <li><a href="<?php echo esc_url( home_url('02_mngsup') ); ?>">- 経営支援</a></li>
                    <li><a href="<?php echo esc_url( home_url('03_itwebs') ); ?>">- IT WEB ソリューション</a></li>
                    <li><a href="<?php echo esc_url( home_url('04_orgods') ); ?>">- オリジナル商品販売</a></li>
                  </ul>
                </div>

              <!--  -->
              <!-- サイト・オリジナル商品販売 -->
              <?php elseif ( $GB_menuPos == 4 ): ?>
                <!-- <a href="#mainArea">Business</a> -->
                <a href="<?php echo esc_url( home_url('02_mngsup') ); ?>">Business</a>
                <div class="bizSubMenu" id="bizSubMenu">
                  <ul>
                    <li><a href="<?php echo esc_url( home_url('02_mngsup') ); ?>">- 経営支援</a></li>
                    <li><a href="<?php echo esc_url( home_url('03_itwebs') ); ?>">- IT WEB ソリューション</a></li>
                  </ul>
                </div>

              <!--  -->
              <!-- サイト・その他ページ -->
              <?php else: ?>
                <a href="<?php echo esc_url( home_url('02_mngsup') ); ?>">Business</a>
                <div class="bizSubMenu" id="bizSubMenu">
                  <ul>
                    <li><a href="<?php echo esc_url( home_url('02_mngsup') ); ?>">- 経営支援</a></li>
                    <li><a href="<?php echo esc_url( home_url('03_itwebs') ); ?>">- IT WEB ソリューション</a></li>
                    <li><a href="<?php echo esc_url( home_url('04_orgods') ); ?>">- オリジナル商品販売</a></li>
                  </ul>
                </div>
              <?php endif; ?>
            </li>

            <!-- *************************************************** -->
            <!-- オリジナル商品販売：大人の素敵雑貨 [i-nekka]・クロコダイルアイテム [ACestus] -->
            <!-- *************************************************** -->
            <li class="navInter"></li>
            <li  id="actMenu"   >

              <!--  -->
              <!-- サイト・トップページ（事業紹介セクションに移動） -->
              <?php if ( $GB_menuPos == 0 ): ?>   <!-- 経営支援 -->
                <a href="#sideScrollArea">Activity</a>
                <div class="activitySubMenu" id="activitySubMenu">
                  <ul>
                    <li><a href="<?php echo esc_url( home_url('05_inekka') ); ?>">- i-nekka "大人の素敵雑貨"</a></li>
                    <li><a href="<?php echo esc_url( home_url('06_acestus') ); ?>">- Aphrodite Cestus "クロコダイルアイテム"</a></li>
                  </ul>
                </div>

              <!--  -->
              <!-- サイト・オリジナル商品「大人の素敵雑貨」いーねっか ページ -->
              <?php elseif ( $GB_menuPos == 5 ): ?>
                <!-- <a href="#mainArea">Activity</a> -->
                <a href="<?php echo esc_url( home_url('06_acestus') ); ?>">Activity</a>
                <div class="activitySubMenu" id="activitySubMenu">
                  <ul>
                    <!-- <li><a href="<?php // echo esc_url( home_url('05_inekka') ); ?>">- i-nekka "大人の素敵雑貨"</a></li> -->
                    <li><a href="<?php echo esc_url( home_url('06_acestus') ); ?>">- Aphrodite Cestus "クロコダイルアイテム"</a></li>
                  </ul>
                </div>

              <!--  -->
              <!-- サイト・オリジナル商品「クロコダイルアイテム」ACestus ページ -->
              <?php elseif ( $GB_menuPos == 6 ): ?>
                <!-- <a href="#mainArea">Activity</a> -->
                <a href="<?php echo esc_url( home_url('05_inekka') ); ?>">Activity</a>
                <div class="activitySubMenu" id="activitySubMenu">
                  <ul>
                    <li><a href="<?php echo esc_url( home_url('05_inekka') ); ?>">- i-nekka "大人の素敵雑貨"</a></li>
                    <!-- <li><a href="<?php // echo esc_url( home_url('06_acestus') ); ?>">- Aphrodite Cestus "クロコダイルアイテム"</a></li> -->
                  </ul>
                </div>

              <!--  -->
              <!-- サイト・その他ページ -->
              <?php else: ?>
                <a href="<?php echo esc_url( home_url('05_inekka') ); ?>">Activity</a>
                <div class="activitySubMenu" id="activitySubMenu">
                  <ul>
                    <li><a href="<?php echo esc_url( home_url('05_inekka' ) ); ?>">- i-nekka "大人の素敵雑貨"</a></li>
                    <li><a href="<?php echo esc_url( home_url('06_acestus') ); ?>">- Aphrodite Cestus "クロコダイルアイテム"</a></li>
                  </ul>
                </div>

              <?php endif; ?>

            </li>

            <!-- *************************************************** -->
            <!-- 新着ニュース・活動日記一覧 -->
            <!-- *************************************************** -->
            <li class="navInter"></li>
            <li  id="nwsMenu"   >

            
              <!--  -->
              <!-- サイト・トップページ（事業紹介セクションに移動） -->
              <?php if ( $GB_menuPos == 0 ): ?>   <!-- 経営支援 -->
                <a href="#OurInformation">News</a>
                <div class="newsSubMenu" id="newsSubMenu">
                  <ul>
                    <!-- <li><a href="<?php //echo esc_url( home_url('07_news' ) ) ?>">- 新着ニュース・ご案内</a></li> -->
                    <!-- <li><a href="<?php //echo esc_url( home_url('08_blog' ) ) ?>">- ブログ</a></li> -->
                    <li><a href="<?php echo esc_url( get_category_link( $DEF_catID_news ) ) ?>">- 新着ニュース・ご案内</a></li>
                    <li><a href="<?php echo esc_url( get_category_link( $DEF_catID_blog ) ) ?>">- ブログ</a></li>
                  </ul>
                </div>
              <?php elseif ( $GB_menuPos == 7 ): ?>
                <!-- <a href="#mainArea">News</a> -->
                <a href="<?php echo esc_url( get_category_link( $DEF_catID_blog ) ) ?>">News</a>
                <div class="newsSubMenu" id="newsSubMenu">
                  <ul>
                    <!-- <li><a href="<?php //echo esc_url( home_url('08_blog' ) ) ?>">- ブログ</a></li> -->
                    <li><a href="<?php echo esc_url( get_category_link( $DEF_catID_blog ) ) ?>">- ブログ</a></li>
                  </ul>
                </div>
              <?php elseif ( $GB_menuPos == 8 ): ?>
                <!-- <a href="#mainArea">News</a> -->
                <a href="<?php echo esc_url( get_category_link( $DEF_catID_news ) ) ?>">News</a>
                <div class="newsSubMenu" id="newsSubMenu">
                  <ul>
                  <!-- <li><a href="<?php //echo esc_url( home_url('07_news' ) ) ?>">- 新着ニュース・ご案内</a></li> -->
                  <li><a href="<?php echo esc_url( get_category_link( $DEF_catID_news ) ) ?>">- 新着ニュース・ご案内</a></li>
                  </ul>
                </div>
              <?php else: ?>
                <!-- <a href="<?php //echo esc_url( home_url('07_news' ) ) ?>">News</a> -->
                <a href="<?php echo esc_url( get_category_link( $DEF_catID_news ) ) ?>">News</a>
                <div class="newsSubMenu" id="newsSubMenu">
                  <ul>
                    <!-- <li><a href="<?php //echo esc_url( home_url('07_news' ) ) ?>">- 新着ニュース・ご案内</a></li> -->
                    <!-- <li><a href="<?php //echo esc_url( home_url('08_blog' ) ) ?>">- ブログ</a></li> -->
                    <li><a href="<?php echo esc_url( get_category_link( $DEF_catID_news ) ) ?>">- 新着ニュース・ご案内</a></li>
                    <li><a href="<?php echo esc_url( get_category_link( $DEF_catID_blog ) ) ?>">- ブログ</a></li>
                  </ul>
                </div>
              <?php endif; ?>

            </li>

            <!-- *************************************************** -->
            <!-- 会社情報・個人情報保護指針 -->
            <!-- *************************************************** -->
            <li class="navInter"></li>
            <li  id="abtMenu"   >

              <!--  -->
              <!-- サイト・トップページ（事業紹介セクションに移動） -->
              <?php if ( $GB_menuPos == 0 ): ?>
                <a href="#sideScrollArea">Company</a>
                <div class="aboutUSSubMenu" id="aboutUSSubMenu">
                  <ul>
                    <li><a href="<?php echo esc_url( home_url('09_comprof') ); ?>">- 会社概要</a></li>
                    <li><a href="<?php echo esc_url( home_url('10_ppolicy') ); ?>">- 個人情報保護指針</a></li>
                  </ul>
                </div>

              <!--  -->
              <!-- サイト・会社概要ページ -->
              <?php elseif ( $GB_menuPos == 9 ): ?>
                <!-- <a href="#mainArea">Company</a> -->
                <a href="<?php echo esc_url( home_url('10_ppolicy') ); ?>">Company</a>
                <div class="aboutUSSubMenu" id="aboutUSSubMenu">
                  <ul>
                    <li><a href="<?php echo esc_url( home_url('10_ppolicy') ); ?>">- 個人情報保護指針</a></li>
                  </ul>
                </div>

              <!--  -->
              <!-- サイト・個人情報保護ページ -->
              <?php elseif ( $GB_menuPos == 10 ): ?>
                <!-- <a href="#mainArea">Company</a> -->
                <a href="<?php echo esc_url( home_url('09_comprof') ); ?>">Company</a>
                <div class="aboutUSSubMenu" id="aboutUSSubMenu">
                  <ul>
                    <li><a href="<?php echo esc_url( home_url('09_comprof') ); ?>">- 会社概要</a></li>
                  </ul>
                </div>

              <?php else: ?>
                <a href="<?php echo esc_url( home_url('09_comprof') ); ?>">Company</a>
                <div class="aboutUSSubMenu" id="aboutUSSubMenu">
                  <ul>
                    <li><a href="<?php echo esc_url( home_url('09_comprof') ); ?>">- 会社概要</a></li>
                    <li><a href="<?php echo esc_url( home_url('10_ppolicy') ); ?>">- 個人情報保護指針</a></li>
                  </ul>
                </div>

              <?php endif; ?>
            </li>

            <!-- *************************************************** -->
            <!-- お問い合わせフォーム -->
            <!-- *************************************************** -->
            <li class="navInter"></li>
            <li  id="contctMenu" >
              <a href="<?php echo esc_url( home_url('11_contactf') ); ?>">Contact</a>
            </li>
          </ul>
        </nav>

      <?php endif; ?>
      <!-- お問い合わせフォーム、入力値確認画面は、メニュー表示無し -->
      <!-- お問い合わせフォーム、入力値確認画面は、メニュー表示無し -->
      <!-- お問い合わせフォーム、入力値確認画面は、メニュー表示無し -->

    </header>

    <!--  -->
    <!-- スクロールガイド -->
    <div class="scrollGuideArea">
      <p>scroll</p><div class="downArrow"></div>
    </div>

    <!-- ページ本体表示位置、page-11.php から移動 -->
    <?php if ( $GB_menuPos == 11 ): ?>
      <!--  -->
      <!-- サイト：活動理念ページ・メインコンテンツ -->
      <div class="main" id="mainArea">
    <?php endif; ?>
