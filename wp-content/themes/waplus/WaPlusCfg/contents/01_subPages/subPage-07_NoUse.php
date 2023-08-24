
<?php
/*
Template Name: 和Plus：新着ニュース！
*/
  global $DEF_catID_news;
  global $DEF_catID_blog;

  global $GB_MOBILE_FLAG;
  global $GB_RELLAX_FLAG;
  global $GB_countOfPosts;
  global $GB_categoryType;
         $GB_categoryType = $DEF_catID_news;
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
          <div class="newsLargeLogo" id="newsLgLogoImage"></div> <!-- ★ NEWS/BLOG違い -->

          <!-- ローリングタイトルセクション部 -->
          <?php if ( $GB_RELLAX_FLAG ): ?>
          <div class="rollingTitle js-pallax" data-rellax-speed="5">
          <?php else: ?>
          <div class="rollingTitle">
          <?php endif; ?>

            <div class="msgMainTitle" id="msgMainTitleLC">
              
              <?php if ( !$GB_MOBILE_FLAG ): ?>
              <div class="pcLine">
                <span>N</span>
                <span>e</span>
                <span>w</span>　
                <span>A</span>
                <span>r</span>
                <span>r</span>
                <span>i</span>
                <span>v</span>
                <span>a</span>
                <span>l</span>
                <span>s</span>
              </div>
              <?php else: ?>
              <div class="mbLine">
                <span>N</span>
                <span>e</span>
                <span>w</span><br>
                <span>A</span>
                <span>r</span>
                <span>r</span>
                <span>i</span>
                <span>v</span>
                <span>a</span>
                <span>l</span>
                <span>s</span>
              </div>              
              <?php endif; ?>
            </div>

            <div class="cthCopy" id="cthCopy">
              <div class="hrzLine"></div>
              <h2>新着ニュース・ご案内</h2> <!-- ★ NEWS/BLOG違い -->
            </div>

            <div id="msgDetail">

              <?php if ( !$GB_MOBILE_FLAG ): ?>
                <div class="msgDetailPC">
                  <div class="uline"></div>

                  <!--  -->
                  <!-- 投稿記事カテゴリ対応の投稿数をデバッグ -->
                  <?php
                    $GB_countOfPosts = 5;

                    $cateCount = chkCategoryCount( $GB_categoryType );

                    // echo " ? 【subPage-07.php】\$category Type  【". $GB_categoryType . "】<br>";
                    // echo " ? 【subPage-07.php】\$category Count 【". $cateCount . "】<br>";
                  ?>

                  <!--  -->
                  <!-- カテゴリにて、新着情報「news」カテゴリがあれば、当セクションを表示する -->
                  <?php if( $cateCount > 0 ): ?>
                    <?php
                      //
                      // wordpress 「お知らせ」投稿情報を取得する。 
                      //【お知らせ:カテゴリ名：「news」】
                      $posts = get_posts("numberposts=$GB_countOfPosts&category_name=$GB_categoryType&orderby=post_date&offset=0");
                      foreach ($posts as $post):
                        //
                        // 取得投稿データの、グローバル変数への設定。
                        setup_postdata($post);
                    ?>
                    
                      <!-- ************************************** -->
                      <!-- ************************************** -->
                      <?php include( get_template_directory() . "/WaPlusCfg/common-php/categoryUtility/indicateOnePostTILE.php" ); ?>
                      <?php // include( get_template_directory() . "/contents/com/dspPostInfoAtList.php" ); ?>
                      <!-- ************************************** -->
                      <!-- ************************************** -->

                    <?php endforeach; ?>
                  <?php else: ?>
                    <p>ご指定のカテゴリーでの投稿はありません。</p>
                  <?php endif; ?>
                  <div class="uline"></div>
                </div>
              <?php else: ?>
                <div class="msgDetailMB">
                  <div class="uline"></div>

                  <!--  -->
                  <!-- 投稿記事カテゴリ対応の投稿数をデバッグ -->
                  <?php
                    $GB_countOfPosts = 3;

                    $cateCount = chkCategoryCount( $GB_categoryType );
                    // echo " ? 【subPage-07.php】\$category Type  【". $GB_categoryType . "】<br>";
                    // echo " ? 【subPage-07.php】\$category Count 【". $cateCount . "】<br>";
                  ?>

                  <!--  -->
                  <!-- カテゴリにて、新着情報「news」カテゴリがあれば、当セクションを表示する -->
                  <?php if( $cateCount > 0 ): ?>
                    <?php
                      //
                      // wordpress 「お知らせ」投稿情報を取得する。 
                      //【お知らせ:カテゴリ名：「news」】
                      $posts = get_posts("numberposts=$GB_countOfPosts&category_name=$GB_categoryType&orderby=post_date&offset=0");
                      foreach ($posts as $post):
                        //
                        // 取得投稿データの、グローバル変数への設定。
                        setup_postdata($post);
                    ?>
                    
                      <!-- ************************************** -->
                      <!-- ************************************** -->
                      <?php include( get_template_directory() . "/WaPlusCfg/common-php/categoryUtility/indicateOnePostTILE.php" ); ?>
                      <?php // include( get_template_directory() . "/contents/com/dspPostInfoAtList.php" ); ?>
                      <!-- ************************************** -->
                      <!-- ************************************** -->

                    <?php endforeach; ?>
                  <?php else: ?>
                    <p>ご指定のカテゴリーでの投稿はありません。</p>
                  <?php endif; ?>
                  
                  <div class="uline"></div>
                </div>
              <?php endif; ?>

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
              <?php else: ?>
                <!-- <div class="nextPrevArea">何にもない！</div> -->
              <?php endif; ?>

            </div>
          </div>
        </div>
      </section>
      <?php // echo " <<<<< Exit- subPage-07.php <<<<< <br>" ?>
 
<!-- **************************************************************** -->
<!-- **************************************************************** -->
<!-- **************************************************************** -->