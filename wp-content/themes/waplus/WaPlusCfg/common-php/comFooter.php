<?php
  // 
  // *******************************************************
  // *******************************************************
  // ★ 【global：グローバル変数・メニューポジション】の取込み
  // *******************************************************
  // *******************************************************
  global $DEF_catID_news;
  global $DEF_catID_blog;

  // echo "【comHeader.php】\$args ☛【". $args['GB_menuPos'] . "】\n";
  // 
  // $GB_menu_POS :  0 / Home
  // $GB_menu_POS :  1 / Philosophy
  // $GB_menu_POS :  2 / Management
  // $GB_menu_POS :  3 / IT WEB Sol
  // $GB_menu_POS :  4 / Original Products Sales
  // $GB_menu_POS :  5 / i-nekka
  // $GB_menu_POS :  6 / ACestus
  // $GB_menu_POS :  7 / Our Information
  // $GB_menu_POS :  8 / Management
  // $GB_menu_POS :  9 / Company Profile
  // $GB_menu_POS : 10 / Provacy Policy
  // $GB_menu_POS : 11 / Contact Us
  // $GB_menu_POS : 12 / i-nekka OnLineShop
  // $GB_menu_POS : 30 / IT WEB Past Dev Result
  // ...
  global $GB_menuPos;
  global $GB_page_flag;
  
  // 初期化
  $pageLink[ 0] = esc_url( home_url( '/'           ) );  // ホーム
  $pageLink[ 1] = esc_url( home_url( '01_philo'    ) );  // 企業理念
  $pageLink[ 2] = esc_url( home_url( '02_mngsup'   ) );  // 経営支援
  $pageLink[ 3] = esc_url( home_url( '03_itwebs'   ) );  // IT WEB ソリューション
  $pageLink[ 4] = esc_url( home_url( '04_orgods'   ) );  // オリジナル商品販売
  $pageLink[ 5] = esc_url( home_url( '05_inekka'   ) );  // オリジナル商品販売・いーねっか
  $pageLink[ 6] = esc_url( home_url( '06_acestus'  ) );  // オリジナル商品販売・クロコダイル

  // $pageLink[ 7] = esc_url( home_url( '07_news'     ) );  // 新着ニュース・ご案内
  // $pageLink[ 8] = esc_url( home_url( '08_blog'     ) );  // ブログ日記・予約枠
  $pageLink[ 7] = esc_url( get_category_link( $DEF_catID_news ) );  // 最新ニュース  
  $pageLink[ 8] = esc_url( get_category_link( $DEF_catID_blog ) );  // ブログ日記・予約枠

  $pageLink[ 9] = esc_url( home_url( '09_comprof'  ) );  // 会社概要
  $pageLink[10] = esc_url( home_url( '10_ppolicy'  ) );  // 個人情報保護指針
  $pageLink[11] = esc_url( home_url( '11_contactf' ) );           // お問い合わせ・予約枠

  $menuCount = 12;
  for( $i=0 ; $i< $menuCount ; $i++ ) { $menuColor[$i]          = 'color:#333;'; }
                                        $menuColor[$GB_menuPos] = 'color:limegreen;';
                                        $pageLink [$GB_menuPos] = '#mainArea';

?>

    <footer>
      <div class="siteFooter" id="footerSection">
        <div class="cmpyInfo" >

          <?php if ( $GB_page_flag != 1 ): ?>
            <div class="footerLogo">
            <a href="<?php echo esc_url( home_url('/') ); ?>">
              <!-- <img src="./WaPlusCfg/Images/WaPlus-Logo.webp" alt="和プラスロゴマーク"> -->
              <img src="<?php echo esc_url( get_template_directory_uri().'/WaPlusCfg/Images/WaPlus-Logo.png' ) ?>" alt="株式会社和Plus・和プラス・ワプラスのロゴマークが入った画像">
            </a>  
          </div>
          <?php else: ?>
            <div class="footerLogoNL">
              <img src="<?php echo esc_url( get_template_directory_uri().'/WaPlusCfg/Images/WaPlus-Logo.png' ) ?>" alt="株式会社和Plus・和プラス・ワプラスのロゴマークが入った画像">
            </div>
          <?php endif; ?>

          <h2>We will change charms much more!</h2>
          <div class="waPlusAddr">
            <p>
              N&E BLD. 7F<br>
              1-12-4, Ginza, Chuo<br>
              Tokyo, 104-0061, Japan<br>
              WaPlus Co., Ltd.
            </p>
          </div>
        </div>
        <?php if ( $GB_page_flag != 1 ): ?>
          <div id="footerNav">
            <ul>
              <li><a style="<?php echo $menuColor[ 0] ?>" href="<?php echo esc_url( $pageLink[ 0] ); ?>">- ホーム</a></li>
              <li><a style="<?php echo $menuColor[ 1] ?>" href="<?php echo esc_url( $pageLink[ 1] ); ?>">- 企業理念</a></li>
              <li><a style="<?php echo $menuColor[ 2] ?>" href="<?php echo esc_url( $pageLink[ 2] ); ?>">- 経営支援</a></li>
              <li><a style="<?php echo $menuColor[ 3] ?>" href="<?php echo esc_url( $pageLink[ 3] ); ?>">- IT WEB ソリューション</a></li>
              <li><a style="<?php echo $menuColor[ 4] ?>" href="<?php echo esc_url( $pageLink[ 4] ); ?>">- オリジナル商品販売</a></li>
              <li><a style="<?php echo $menuColor[ 5] ?>" href="<?php echo esc_url( $pageLink[ 5] ); ?>">　・ i-nekka：大人の素敵雑貨</a></li>
              <li><a style="<?php echo $menuColor[ 6] ?>" href="<?php echo esc_url( $pageLink[ 6] ); ?>">　・ Aphrodite Cestus：クロコダイル</a></li>
              <li><a style="<?php echo $menuColor[ 7] ?>" href="<?php echo esc_url( $pageLink[ 7] ); ?>">- 新着ニュース・ご案内</a></li>
              <li><a style="<?php echo $menuColor[ 8] ?>" href="<?php echo esc_url( $pageLink[ 8] ); ?>">- ブログ</a></li>
              <li><a style="<?php echo $menuColor[ 9] ?>" href="<?php echo esc_url( $pageLink[ 9] ); ?>">- 会社概要</a></li>
              <li><a style="<?php echo $menuColor[10] ?>" href="<?php echo esc_url( $pageLink[10] ); ?>">- 個人情報保護指針</a></li>
              <li><a style="<?php echo $menuColor[11] ?>" href="<?php echo esc_url( $pageLink[11] ); ?>">- お問い合わせ</a></li>
            </ul>  
          </div>
          <div class="brandLink">
            <a href="<?php echo esc_url( home_url('05_inekkaec' ) ); ?>"><div class="inekkaLink" ></div></a>
            <a href="<?php echo esc_url( home_url('06_acestus'  ) ); ?>"><div class="ACestusLink"></div></a>
          </div>
        <?php else: ?>
          <div id="footerNav">
            <ul>
              <li style="color: silver;">- ホーム</li>
              <li style="color: silver;">- 企業理念</li>
              <li style="color: silver;">- 経営支援</li>
              <li style="color: silver;">- IT WEB ソリューション</li>
              <li style="color: silver;">- オリジナル商品販売</li>
              <li style="color: silver;">　・ i-nekka：大人の素敵雑貨</li>
              <li style="color: silver;">　・ Aphrodite Cestus：クロコダイル</li>
              <li style="color: silver;">- お知らせ／ブログ</li>
              <li style="color: silver;">- 会社概要</li>
              <li style="color: silver;">- 個人情報保護指針</li>
              <li style="color: silver;">- お問い合わせ</li>
            </ul>  
          </div>
          <div class="brandLink">
            <div class="inekkaLinkNL" ></div>
            <div class="ACestusLinkNL"></div>
          </div>
        <?php endif; ?>
      </div>

      <!-- ***************************************** -->
      <!-- ***************************************** -->
      <!-- DigiCert Seal HTML -->
      <!-- Place HTML on your site where the seal should appear -->
      <div class="digiCertImg">
        <div id="DigiCertClickID_KbMS0Jnn"></div>

        <!-- DigiCert Seal Code -->
        <!-- Place with DigiCert Seal HTML or with other scripts -->
        <!-- <script type="text/javascript"> -->
        <script>
          var __dcid = __dcid || [];
          __dcid.push({"cid":"DigiCertClickID_KbMS0Jnn","tag":"KbMS0Jnn"});
          (function(){var cid=document.createElement("script");cid.async=true;cid.src="//seal.digicert.com/seals/cascade/seal.min.js";var s = document.getElementsByTagName("script");var ls = s[(s.length - 1)];ls.parentNode.insertBefore(cid, ls.nextSibling);}());
        </script>
      </div>
      <!-- ***************************************** -->
      <!-- ***************************************** -->

      <!-- ***************************************** -->
      <!-- ***************************************** -->
      <!-- W3C CSS Validation -->
      <!-- <a href="http://jigsaw.w3.org/css-validator/check/referer"> -->
      <div class="w3cValidation">
        <a href="<?php echo esc_url( get_template_directory_uri().'/WaPlusCfg/w3cValidation/w3cValidate.html' ); ?>" target="_blank" rel="noopener noreferrer">
          <img style="width:88px;height:31px"
                src="<?php echo esc_url( get_template_directory_uri().'/WaPlusCfg/w3cValidation/images/vcss.gif' ); ?>"
                alt="当該ホームページの「CSS」が正当である事を証明する画像" />
        </a>    
      </div>
      <!-- ***************************************** -->
      <!-- ***************************************** -->

      <div class="rightsNote"><p>Copyright © 2018 WaPlus Co., Ltd. All Rights Reserved.</p></div>
    </footer>

  </div>      <!-- mainContents-->

  <?php
			// ★【重要】WORDPRESSのお約束
			wp_footer();
	?>

</body>
</html>