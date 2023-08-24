
<!--  -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!--                                                     -->
<!-- ■ 個別投稿記事表示用コード「sngle.php」 -->
<!-- （投稿記事本体ページ本体） -->
<!--                                                     -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!--  -->
<?php

/*
  ■ 和Plus：投稿ページ・実コンテンツ表示コード
*/

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

  // 表示対象記事、カテゴリー情報の取得
  $postInfo        = get_the_category();
  $cat             = $postInfo[0];
  $catNoDsp        = "";
  $GB_categoryType = $cat->cat_name;

  $categoryCount = chkCategoryCount( $GB_categoryType );
  // echo "<br><br><br><br><br>";
  // echo " >>>>> indicateOnePostPAGE( \$GB_categoryType[ " . $GB_categoryType . " ] ： \$categoryCount[ ". $categoryCount ." ] )<br>";
?>

      <!--  -->
      <!-- メインコンテンツ内、IT WEB エンジニア経歴ページ -->
      <section id="rollingTitlePage">
        <!-- <div class="container" style="overflow:hidden;"> -->
        <div class="container">

          <!-- ローリングタイトルセクション部 -->
          <?php if ( $GB_RELLAX_FLAG ): ?>
            <div class="rollingTitle js-pallax" id ="rollingTitle" data-rellax-speed="5">
          <?php else: ?>
            <div class="rollingTitle" id ="rollingTitle">
          <?php endif; ?>

            <div class="msgMainTitle" id="msgMainTitleLC">
              
              <!-- **************************** -->
              <!-- **************************** -->
              <!-- ＰＣ環境表示時 -->
              <!-- **************************** -->
              <!-- **************************** -->
              <?php if ( !$GB_MOBILE_FLAG ): ?>
                <div class="pcLine">
                  <?php echo $args_animateTITLE_PC ?>
                </div>
              <?php else: ?>
                <div class="mbLine">
                  <?php echo $args_animateTITLE_MB ?>
                </div>              
              <?php endif; ?>
            </div>
                
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

              <div class="cthCopy" id="cthCopy">
                <div class="hrzLine"></div>
                <h2><?php the_title(); ?></h2>
              </div>

              <div id="detailInfo">
                <div id="forExample">
                  <div class="doubleLine"></div>

                  <div class="sBysBlk">

                    <!--  -->
                    <!-- 左側ペイン -->
                    <!-- <div class="rightArea" id="myEager"> -->
                    <div class="eachPostDigest" id="myEager">
                      <!-- ********************************************** -->
                      <!-- ********************************************** -->

                      <div class="infoArea sa sa--up rlxBGBaseArea">
                        <!-- <p class="infoTitle">　<u><?php // echo get_the_date(); ?></u>　</p> -->
                        <!-- <p class="infoTitle"><u> ページ：<?php // echo $GB_currentPage; ?></u></p> -->

                    
                        <!-- ************************************** -->
                        <!-- ************************************** -->
                        <?php echo the_content(); ?>
                        <!-- ************************************** -->
                        <!-- ************************************** -->
                        <p class="postDate">　<?php echo get_the_date(); ?>　</p>

                        <?php if ( $categoryCount > 1 ): ?>
                          <div class="nextPrevArea forPC">
                            <ul class="post-link">
                              <li class="prevNextBtn linkInternalDec">
                                <!-- <?php //previous_post_link('%link', '<<　前の記事へ', true, $catNoDsp ); ?> -->
                                <?php previous_post_link('%link', '<<　前の記事へ', true ); ?>
                              </li>
                              <li class="prevNextBtn linkInternalDec">
                                <!-- <?php //next_post_link    ('%link', '次の記事へ　>>', true, $catNoDsp ); ?> -->
                                <?php next_post_link    ('%link', '次の記事へ　>>', true ); ?>
                              </li>
                            </ul>
                          </div>
                          <div class="nextPrevArea forMB">
                            <ul class="post-link">
                              <li class="prevNextBtn linkInternalDec">
                                <!-- <?php //previous_post_link('%link', '<< 前へ', true, $catNoDsp ); ?> -->
                                <?php previous_post_link('%link', '<< 前へ', true ); ?>
                              </li>
                              <li class="prevNextBtn linkInternalDec">
                                <!-- <?php //next_post_link    ('%link', '次へ >>', true, $catNoDsp ); ?> -->
                                <?php next_post_link    ('%link', '次へ >>', true ); ?>
                              </li>
                            </ul>
                          </div>
                        <?php else: ?>
                          <div class="mgnT50"></div>
                        <?php endif; ?>

                      </div>  <!-- infoArea -->

                      <!-- ********************************************** -->
                      <!-- ********************************************** -->

                    </div>

                    <!--  -->
                    <!-- 右側ペイン -->
                    <!-- サイドバー部（アーカイブリスト表示用サイドバー）の取込み -->
                    <?php get_sidebar(); ?>

                  </div>

                </div>
                <div class="uline"></div>
                <div class="uline"></div>
              </div>

            <?php endwhile; endif; ?>


          </div>

          <!-- イメージ画像表示 -->
          <!-- <div class="imgFrame"> -->
            <?php if ( $cat->cat_ID == $DEF_catID_news ):     // $DEF_catID_news news 3 ?>
              <div class="singlePageBkImg"  id="singlePageBkImg" ></div>     
            <!-- <?php // elseif ( $cat->cat_ID == $DEF_catID_blog ): ?> -->
            <?php else: ?>
              <div class="singlePageBkImgBlog"  id="singlePageBkImgBlog" ></div>     
            <?php endif; ?>
          <!-- </div> -->

        </div>
      </section>

<!-- **************************************************************** -->
<!-- **************************************************************** -->
<!-- **************************************************************** -->