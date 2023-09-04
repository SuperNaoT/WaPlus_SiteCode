
<!--  -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!--                                                     -->
<!-- ■ 投稿記事検索結果、投稿タイル一覧表示用コード -->
<!-- 　（検索結果一覧表示ページ本体）　　　　　　　 -->
<!--                                                     -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!--  -->
<?php

// echo "<br><br><br><br>";
// echo ">>>>> IndicateSearchResultPage.php<br>";

	//   
	// グローバル変数定義ファイル
  require( get_template_directory() . '/WaPlusCfg/common-php/globalVariables.php' );

  global $args_largeLogoCLASS;
  global $args_largeLogoID;
  global $args_animateTITLE_PC;
  global $args_animateTITLE_MB;
  global $args_cthCopy;
  global $args_cthCopyMB;
  if ( !$GB_MOBILE_FLAG )  {
    $cthCopyStr = $args_cthCopy;
  } else  {
    $cthCopyStr = $args_cthCopyMB;
  }
  $error_flag = 0;
?>

      <!--  -->
      <!-- メインコンテンツ内、クロコダイルアイテム・ACestus -->
      <section id="rollingTitlePage">
        <div class="container" style="overflow: hidden;">


          <!-- イメージ画像表示 -->
          <div class="<?php echo $args_largeLogoCLASS ?> classTypeDEF" id="<?php echo $args_largeLogoID ?>"></div>

          <!-- ローリングタイトルセクション部 -->
          <?php if ( $GB_RELLAX_FLAG ): ?>
            <div class="rollingTitle js-pallax" data-rellax-speed="5">
          <?php else: ?>
            <div class="rollingTitle">
          <?php endif; ?>

            <div class="msgMainTitle" id="msgMainTitleLC">
              
              <!-- **************************** -->
              <!-- **************************** -->
              <!-- ＰＣ環境表示時 -->
              <!-- **************************** -->
              <!-- **************************** -->
              <?php //if ( !$GB_MOBILE_FLAG ): ?>
              <div class="pcLine forPC">
                <?php echo $args_animateTITLE_PC ?>
              </div>
              <?php //else: ?>
              <div class="mbLine forMB">
                <?php echo $args_animateTITLE_MB ?>
              </div>              
              <?php //endif; ?>
            </div>

            <div class="cthCopy" id="cthCopy">
              <div class="hrzLine"></div>
              <h2><?php echo $cthCopyStr ?></h2>
            </div>

            <div class="sBysBlk">

              <!--  -->
              <!-- **************************** -->
              <!-- 投稿タイル一覧表示 -->
              <!-- **************************** -->
              <div id="msgDetail">

              <?php if ( !$GB_MOBILE_FLAG ): ?>
                <div class="msgDetailPC forPC">
              <?php else: ?>
                <div class="msgDetailMB forMB">
              <?php endif; ?>
                  <div class="uline"></div>

                  <?php
                    // 
                    // 検索条件と一致する投稿有り！
                    if ( have_posts() )  {
                      //
                      // wordpress 投稿情報を取得する。
                      while (have_posts()) : the_post();
                        require( get_template_directory() . "/WaPlusCfg/common-php/categoryUtility/indicateOnePostTILE.php" );
                      endwhile;
                      // *****************************************
                    } else  {
                      $error_flag = 1;
                    }
                  ?>
                  <?php if ( $error_flag ): ?>
                    <p style="margin-left: 30px; font-weight: bold;">　■ 検索条件に一致するものが有りませんでした。</p>
                  <?php endif; ?>

                  <div class="uline" style="padding-top: 30px;"></div>
                </div>

                <!-- <div class="msgDetailMB forMB">
                  <div class="uline"></div>

                  <?php
                    // 
                    // 検索条件と一致する投稿有り！
                    // if ( have_posts() )  {
                    //   if ( $error_flag == 0 )  {
                    //     //
                    //     // wordpress 投稿情報を取得する。
                    //     while (have_posts()) : the_post();
                    //       require( get_template_directory() . "/WaPlusCfg/common-php/categoryUtility/indicateOnePostTILE.php" );
                    //     endwhile;
                    //     // *****************************************
                    //   }
                    // }
                  ?>
                  <?php if ( $errore_flag ): ?>
                    <p style="margin-left: 30px; font-weight: bold;">　■ 検索条件に一致するものが有りませんでした。</p>
                  <?php endif; ?>

                  <div class="uline" style="padding-top: 30px;"></div>
                </div> -->

                <!--  -->
                <!-- ************************************** -->
                <!-- ************************************** -->
                <!-- ■ 投稿データ多数時、ページネーション機能実装 -->
                <!-- ************************************** -->
                <!-- ************************************** -->
                <?php if ( categoryPagination() ): ?>
                  <div class="nextPrevArea">
                    <div class="post-link">
                      <?php if ( !$GB_MOBILE_FLAG )  {
                        echo categoryPagination();
                      } else  {
                        echo categoryPagination(1,1,false);
                      } ?>
                    </div>
                  </div>
                <?php endif; ?>
              </div>

              <!--  -->
              <!-- **************************** -->
              <!-- サイドバー表示 -->
              <!-- **************************** -->
              <!-- サイドバー部（アーカイブリスト表示用サイドバー）の取込み -->
              <!-- サイドバーは、カテゴリー「ブログ」の時のみ表示する事に。 -->
              <?php get_sidebar(); ?>
            
            </div>
          </div>
        </div>
      </section>
      <?php // echo " <<<<< Exit- subPage-07.php <<<<< <br>" ?>
 
<!-- **************************************************************** -->
<!-- **************************************************************** -->
<!-- **************************************************************** -->