<?php
  // 
  // *******************************************************
  // *******************************************************
  // ★ 【global：グローバル変数】の取込み
  // *******************************************************
  // *******************************************************

	//   
	// グローバル変数定義ファイル
  require( get_template_directory() . '/WaPlusCfg/common-php/globalVariables.php' );

  // echo "<br><br><br><br> >>>>> sidebar.php [\$GB_categoryType] ☛【". $GB_categoryType . "】<br>";

  $GB_postYear  = get_the_date('Y');
  // echo " 　　　　? \$GB_postYear [". $GB_postYear . " ]<br>";
?>
<!-- <div class="pAside"> -->

  <aside id="sidebar" class="wpls-sideBar">

    <!-- ************************************ -->
    <!-- ************************************ -->
    <div class="sideMenu">

      <!--  -->
      <!-- 新着ニュースに過去投稿はないので、　 -->
      <!-- 投稿時期別一覧・過去ログは表示しない -->
      <?php if ( ( $GB_categoryType != $DEF_catName_news ) && ( chkCategoryCount( $GB_categoryType ) > 0 ) ): ?>

        <h4 style="margin-bottom: 0;">　■ 投稿時期別一覧　</h4>
        <div class="eraList" id="js-eraList">
          <!--  -->
          <!-- *************************************************
            // *************************************************
            // *************************************************
            // ■ カテゴリ別・アーカイブリスト表示用設定
            // 【参考】「https://ateitexe.com/wordpress-accordion-archives/」
            // 　　　　「https://ateitexe.com/wordpress-category-archives/」
            // 　１．「＋<span>」 年号（投稿件数）
            // 　　(1) 月別（投稿件数）
            // 　※　「＋<span>」クリックにて、月別データの表示／非表示を切り替える
            // *************************************************
            // *************************************************
              ************************************************* -->
          <ul class="accordion">
            <?php
              $cat_slug = $GB_categoryType; //カテゴリをスラッグで指定

              // echo "<br><br><br><br><br>";
              // echo " >>>>> ACCORDION <br>"; 
              // echo " ? CategoryType [ " . $GB_categoryType . " ] <br>";

              $y_flg    = true;  // 年号表示フラグ　「未表示：true／表示済み」
              $f_flg    = true;  // 月別リスト展開チェックフラグ　「単一年度のみ、月別データを展開表示」

              $year     = idate('Y'); //本日の年
              $month    = idate('m'); //本日の月

              // 
              // カテゴリー毎、最古年迄のループ
                      $cat_oldest_year = get_cat_oldest_year( $cat_slug ); //一番古い投稿日の年
              while ( $cat_oldest_year <= $year ) { //一番古い投稿年を指定年が下回るまでループ

                // 
                // ***************************************
                // ***************************************
                // 初回、或いは【年号見出し】出力処理
                // ***************************************
                if ( $y_flg == true )  { //年切替フラグが立っていたら
                  // echo "<br> ！ 年号切替え[ " . $year . " ]<br>";

                  // 
                  // 該当年の投稿数を取得
                       $year_cat_archives_num = get_year_cat_archives_num( $cat_slug, $year );
                  if ( $year_cat_archives_num > 0 )  { // 指定年の投稿があったら閉じた年見出しを出力
                    // echo " ！ データ有り ☛ [ " . $year . " ]<br>";

                    // 
                    // 月別リスト展開フラグ、未表示状態
                    if ( $f_flg == true )  {
                      // echo " ！ 月別切替え[ " . $year . " ]<br>";

                      // 
                      // 展開年度、投稿データ年と一致、指定月有無フラグ
                      if ( $year == $GB_postYear )  { // 初回は閉じタグ不要&開いておく
                          $f_flg = false; // 月別リスト展開フラグを倒しておく

                          // echo " 参照中の年号 [ " . $year . " ]";

            ?>

            <!--  -->
            <!-- 全履歴中、ここでだけ年月データを展開 -->
            <li>
              <p><span class="acv_open"></span><?php echo $year; ?>年 (<?php echo $year_cat_archives_num; ?>)</p>
              <ul>

            <?php
                      // 
                      // 展開年度、投稿データ年と不一致、指定月有無フラグ
                      } else  {
                        // $f_flg = true; // 月別リスト展開フラグを起こしておく
                        // echo " 見ていない年号 ① [ " . $year . " ]";

            ?>


            <!--  -->
            <!-- 履歴中、年月データを展開しない -->
              <!-- </ul> -->
            <!-- </li> -->
            <li>
              <p><span></span><?php echo $year; ?>年 (<?php echo $year_cat_archives_num; ?>)</p>
              <ul class="hide">

            <?php
                      }

                      // 
                      // 年代見出しの表示済みなので、年号表示フラグをOFF
                      $y_flg = false; //年見出しが出力されたら年切替フラグを倒しておく
                        
                    } else  {
                      // echo " 見ていない年号 ② [ " . $year . " ]";

            ?>

              <!-- </ul> -->
            <!-- </li> -->
            <li>
              <p><span></span><?php echo $year; ?>年 (<?php echo $year_cat_archives_num; ?>)</p>
              <ul class="hide">

            <?php

                      // 
                      // 年代見出しの表示済みなので、年号表示フラグをOFF
                      $y_flg = false; //年見出しが出力されたら年切替フラグを倒しておく

                    }
                    // $year--; //1年前へ
                    // $month = 12; //12月へ
                  } else { //該当の年に投稿がなかった場合
                    $year--; //1年前へ
                    $month = 12; //12月へ
                  }
                }

                // 
                // ***************************************
                // ***************************************
                // 【月毎見出し】の表示処理
                // ***************************************
                // echo " >>>>> 月毎見出し表示の有無 \$y_flg [ " . $y_flg . " ]";

                if ( $y_flg == false )  { // 年号見出し表示済み
                       $month_cat_archives_num = get_month_cat_archives_num($cat_slug, $year, $month); // 指定年月の投稿数を取得
                  if ( $month_cat_archives_num > 0 )  { // 指定年月の投稿があったらアーカイブリンクを出力
            ?>

                <li><a href="<?php echo esc_url( home_url('/') . $year.'/' . str_pad($month, 2, 0, STR_PAD_LEFT) . '/?cat_slug='.$cat_slug ); ?>">
                             <?php echo $year . "年" . $month . "月"; ?></a> (<?php echo $month_cat_archives_num; ?>)
                </li>

            <?php
                  }
                      $month--; //1月前へ
                  if ( $month < 1 )  { //0月になってしまったら
                    $year--; //1年前へ
                    $month = 12; //12月へ
                    $y_flg = true; //年切替フラグを立てる
            ?>

              </ul>
            </li>

            <?php
                  }
                }

              }         // while
            ?>
              </ul>
            </li>
          </ul>          
        </div>
      <?php endif; ?>

      <h4 style="margin-bottom: 0;">　■ カテゴリー種別　</h4>
      <div class="catBtnList" id="js-catBtnList">
        <!-- 新着ニュース記事が存在すれば、ボタンを表示 -->
        <?php if ( chkCategoryCount( $DEF_catName_news ) > 0 ): ?>
        <!-- <?php //if ( chkCategoryCount( $DEF_catName_news ) > 0 ): ?> -->
          <a href="<?php echo esc_url( get_category_link( $DEF_catID_news ) ) ?>">
            <div class="menuBtn sdw-btn">
              <div class="btnInner">
                <img src="<?php echo esc_url( get_template_directory_uri(). '/WaPlusCfg/Images/newsBlog/newsImageMB.png' ) ?>" alt="新着ニュースをイメージするNEWSロゴ縦型画像" class="mnBtnIcon">
                <p>新着ニュース<i class="fas fa-link extLnkIcon"></i></p>  
              </div>
            </div>
          </a>
        <?php endif; ?>
        <!-- ブログ記事が存在すれば、ボタンを表示 -->
        <!-- <?php //if ( chkCategoryCount( $DEF_catName_blog ) > 0 && ( $GB_categoryType != $DEF_catName_blog ) ): ?> -->
        <?php if ( chkCategoryCount( $DEF_catName_blog ) > 0 ): ?>
          <a href="<?php echo esc_url( get_category_link( $DEF_catID_blog ) ) ?>">
            <div class="menuBtn sdw-btn" >
              <div class="btnInner">
                <img src="<?php echo esc_url( get_template_directory_uri(). '/WaPlusCfg/Images/newsBlog/blogImage.png' ) ?>" alt="ブログアーカイブをイメージするBLOGロゴ画像" class="mnBtnIcon">
                <p>ブログ日記　<i class="fas fa-link extLnkIcon"></i></p>  
              </div>
            </div>
          </a>
        <?php endif; ?>
        <!-- 技術ティップ記事が存在すれば、ボタンを表示 -->
        <!-- <?php //if ( chkCategoryCount( $DEF_catName_tech ) > 0 && ( $GB_categoryType != $DEF_catName_tech ) ): ?> -->
        <?php if ( chkCategoryCount( $DEF_catName_tech ) > 0 ): ?>
          <a href="<?php echo esc_url( get_category_link( $DEF_catID_tech ) ) ?>">
            <div class="menuBtn sdw-btn" >
              <div class="btnInner">
                <img src="<?php echo esc_url( get_template_directory_uri(). '/WaPlusCfg/Images/newsBlog/company_1280-1280.jpg' ) ?>" alt="会社案内に用いるオフィス仕事をしている男性の後ろ姿の画像" class="mnBtnIcon">
                <p>技術の種<i class="fas fa-link extLnkIcon"></i></p>  
              </div>
            </div>
          </a>
        <?php endif; ?>
        <!-- ハウツー記事が存在すれば、ボタンを表示 -->
        <!-- <?php //if ( chkCategoryCount( $DEF_catName_howTo ) > 0 && ( $GB_categoryType != $DEF_catName_howTo ) ): ?> -->
        <?php if ( chkCategoryCount( $DEF_catName_howTo ) > 0 ): ?>
          <a href="<?php echo esc_url( get_category_link( $DEF_catID_howTo ) ) ?>">.
            <!-- <div class="menuBtn sdw-btn" >
              <div class="btnInner">
                <img src="<?php //echo esc_url( get_template_directory_uri(). '/WaPlusCfg/Images/newsBlog/rescue_1980-1521.png' ) ?>" alt="ギャラリーアイコン" class="mnBtnIcon">
                <p>利用方法　<i class="fas fa-link extLnkIcon"></i></p>  
              </div>
            </div> -->
          </a>
        <?php endif; ?>
      </div>      <!-- catBtnList  -->
    </div>

    <!-- ************************************ -->
    <!-- ************************************ -->
  </aside>
  
<!-- </div> -->