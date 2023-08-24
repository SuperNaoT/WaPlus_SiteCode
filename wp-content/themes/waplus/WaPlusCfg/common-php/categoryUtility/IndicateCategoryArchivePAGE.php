
<!--  -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!--                                                     -->
<!-- ■ カテゴリー単位、全投稿タイル一覧表示用コード -->
<!-- 　（アーカイブリストページ本体）　　　　　　　 -->
<!--                                                     -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!--  -->
<?php

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

  // echo "<br><br><br><br>";
  // echo ">>>>> IndicateCategoryArchivePAGE.php「\$GB_categoryType」☛【". $GB_categoryType ."】<br>";
  // echo ">>>>> IndicateCategoryArchivePAGE.php「\$args_largeLogoCLASS」☛【". $args_largeLogoCLASS ."】<br>";
  // echo ">>>>> IndicateCategoryArchivePAGE.php「\$args_largeLogoID」☛【". $args_largeLogoID ."】<br>";

  switch( $GB_categoryType ) {
    case $DEF_catName_news:
      $categoryTypeClass = "newsClass";
      break;
    case $DEF_catName_blog:
      $categoryTypeClass = "blogClass";
      break;
    case $DEF_catName_tech:
      $categoryTypeClass = "techClass";
      break;
    default:
      $categoryTypeClass = "dfltClass";
  }
?>

      <!--  -->
      <!-- メインコンテンツ内、クロコダイルアイテム・ACestus -->
      <section id="rollingTitlePage">
        <div class="container" style="overflow: hidden;">

<!-- <div class="areaChk" >000</div>
<div class="areaChk1">100</div> 
<div class="areaChk2">200</div>
<div class="areaChk3">300</div>
<div class="areaChk4">400</div>
<div class="areaChk5">500</div>
<div class="areaChk6">600</div>
<div class="areaChk7">700</div>
<div class="areaChk8">800</div>
<div class="areaChk9">900</div>
<div class="areaChk10">1000</div>
<div class="areaChk11">1100</div>
<div class="areaChk12">1200</div>
<div class="areaChk13">1300</div>
<div class="areaChk14">1400</div>
<div class="areaChk15">1500</div> -->

          <!-- イメージ画像表示 -->
          <!-- .newsLargeLogo / #newsLgLogoImage -->
          <!-- .blogLargeLogo / #blogLgLogoImage -->
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

              <?php //if ( !$GB_MOBILE_FLAG ): ?>
                <div class="msgDetailPC forPC">
                  <div class="uline"></div>

                  <!--  -->
                  <!-- 投稿記事カテゴリ対応の投稿数をデバッグ -->
                  <?php
                    $cateCount = chkCategoryCount( $GB_categoryType );
                  ?>

                  <!--  -->
                  <!-- カテゴリにて、新着情報「指定」カテゴリがあれば、当セクションを表示する -->
                  <?php if( $cateCount > 0 ): ?>
                    <?php

                      // 
                      // ■ ページネーションに合わせた投稿情報を取得する
                      // *****************************************
                      while ( have_posts() ) : the_post();
                        require( get_template_directory() . "/WaPlusCfg/common-php/categoryUtility/indicateOnePostTILE.php" );
                      endwhile;
                      // *****************************************
                    ?>
                  <?php else: ?>
                    <p style="margin-left: 30px; font-weight: bold;">　■ 只今、当カテゴリーでのご案内はありません。</p>
                  <?php endif; ?>

                  <div class="uline" style="padding-top: 30px;"></div>
                </div>
              <?php //else: ?>
                <div class="msgDetailMB forMB">
                  <div class="uline"></div>

                  <!--  -->
                  <!-- 投稿記事カテゴリ対応の投稿数をデバッグ -->
                  <?php
                    $cateCount = chkCategoryCount( $GB_categoryType );
                  ?>

                  <!--  -->
                  <!-- カテゴリにて、新着情報「news」カテゴリがあれば、当セクションを表示する -->
                  <?php if( $cateCount > 0 ): ?>
                    <?php

                      // 
                      // ■ ページネーションに合わせた投稿情報を取得する
                      // *****************************************
                      while ( have_posts() ) : the_post();
                        require( get_template_directory() . "/WaPlusCfg/common-php/categoryUtility/indicateOnePostTILE.php" );
                      endwhile;
                      // *****************************************
                    ?>
                  <?php else: ?>
                    <p style="margin-left: 30px; font-weight: bold;">　■ 只今、当カテゴリーでのご案内はありません。</p>
                  <?php endif; ?>

                  <div class="uline" style="padding-top: 30px;"></div>
                </div>
              <?php //endif; ?>

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