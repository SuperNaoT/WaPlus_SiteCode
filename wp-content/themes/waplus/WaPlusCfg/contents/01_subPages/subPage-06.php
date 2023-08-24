
<?php
/*
Template Name: 和Plus：クロコダイルアイテム・ACestus！
*/
  global $GB_MOBILE_FLAG;
  global $GB_RELLAX_FLAG;
?>

      <!--  -->
      <!-- メインコンテンツ内、クロコダイルアイテム・ACestus -->
      <section id="rollingTitlePage">
        <div class="container" style="overflow: hidden;">

          <!-- イメージ画像表示 -->
          <div class="ACestusLargeLogo" id="ACestusLgLogoImage"></div>

          <!-- ローリングタイトルセクション部 -->
          <?php if ( $GB_RELLAX_FLAG ): ?>
            <div class="rollingTitle js-pallax" data-rellax-speed="5">
          <?php else: ?>
            <div class="rollingTitle">
          <?php endif; ?>

            <div class="msgMainTitle" id="msgMainTitleLC">
              
              <?php //if ( !$GB_MOBILE_FLAG ): ?>
              <div class="pcLine forPC">
                <span>A</span>
                <span>p</span>
                <span>h</span>
                <span>r</span>
                <span>o</span>
                <span>d</span>
                <span>i</span>
                <span>t</span>
                <span>e</span>　
                <span>C</span>
                <span>e</span>
                <span>s</span>
                <span>t</span>
                <span>u</span>
                <span>s</span>
              </div>
              <?php //else: ?>
              <div class="mbLine forMB">
                <span>A</span>
                <span>p</span>
                <span>h</span>
                <span>r</span>
                <span>o</span>
                <span>d</span>
                <span>i</span>
                <span>t</span>
                <span>e</span><br>
                <span>C</span>
                <span>e</span>
                <span>s</span>
                <span>t</span>
                <span>u</span>
                <span>s</span>
              </div>              
              <?php //endif; ?>
            </div>

            <div class="cthCopy" id="cthCopy">
              <div class="hrzLine"></div>
              <h1>華やかにクロコダイル</h1>
            </div>

            <div id="msgDetail">
              <?php //if ( !$GB_MOBILE_FLAG ): ?>
                <div class="msgDetailPC forPC">
                  <p>
                    【Aphrodite Cestus】オリジナルのお品の数々・・・<br><br>
                    「素敵な大人の女性を演出したい、一助となりたい」<br>
                    「手に取って頂けたとき、思わず笑顔が広がる様に」<br><br>
                    　素敵な瞬間・出会いのために思いを込めて、<br>
                    　一つ一つ、デザインから縫製まで丁寧に仕上げております。<br>
                  </p>
                  <div class="uline"></div>
                  <p>
                    　一口にクロコダイルと言っても、<br>
                    【肚ワニ】をお品に採用、それとも、<br>
                    【背ワニ】をお品に採用するのか・・・<br>
                    　この二つの異なる部位の採用にて、大きく印象が異なって参ります。
                  </p>
                  <div class="crocoKind">
                    <div class="frontSkin"></div>
                    <div class="backSkin" ></div>
                  </div>        
                  <p>
                    　各々シーンに、またその瞬間のお気持ちにマッチした、<br>
                    　最高な雰囲気を演出するために、最適なお品をご用意申し上げております。<br>
                  </p>
                  <div class="uline"></div>
                  <p>
                    　<a href="#mainArea">[ オンラインショップのご案内（準備中） ... <i class="fas fa-info" style="color: blue;"></i> ]</a>
                  </p>
                  <div class="uline"></div>
                  <p>　　　　　　　　　　　　　　　　　　　　商標登録番号（第６２７１６３６号）</p>
                </div>
              <?php //else: ?>
                <div class="msgDetailMB forMB">
                  <p>
                    【Aphrodite Cestus】<br>
                    　オリジナルのお品の数々・・・<br><br>
                    「素敵な大人の女性を演出したい、<br>
                    　　　　　　その一助となりたい」<br><br>
                    「手に取って頂けたとき、<br>
                    　　　　思わず笑顔が広がる様に」<br><br>
                    　素敵な瞬間・<br>
                    　出会いのために思いを込めて、<br><br>
                    　一つ一つデザインから縫製まで、<br>
                    　丁寧に仕上げております。<br>
                  </p>
                  <div class="uline"></div>
                  <p>
                    　一口にクロコダイルと言っても、<br>
                    【肚ワニ】をお品に採用、それとも、<br>
                    【背ワニ】をお品に採用するのか・・・<br>
                    　この二つの異なる部位の採用にて、<br>
                    　大きく印象が異なって参ります。
                  </p>
                  <div class="crocoKind">
                    <div class="frontSkin"></div>
                    <div class="backSkin" ></div>
                  </div>        
                  <p>
                    　各々シーンに、<br>
                    　その瞬間のお気持ちにマッチした、<br>
                    　最高な雰囲気を演出するために、<br>
                    　最適なお品をご用意申し上げております。<br>
                  </p>
                  <div class="uline"></div>
                  <?php //if ( !$GB_MOBILE_FLAG ): ?>
                    <div class="forPC">
                      <p>
                        　<a href="#mainArea">[ オンラインショップのご案内（準備中） ... <i class="fas fa-info" style="color: blue;"></i> ]</a>
                      </p>
                      <div class="uline"></div>
                      <p>　　　　商標登録番号（第６２７１６３６号）</p>
                    </div>
                  <?php //else: ?>
                    <div class="forMB">
                      <p>
                        　<a href="#mainArea">[ オンラインショップ（準備中） ... <i class="fas fa-info" style="color: blue;"></i> ]</a>
                      </p>
                      <div class="uline"></div>
                      <p>　　商標登録番号（第６２７１６３６号）</p>
                    </div>
                  <?php //endif; ?>
                </div>
              <?php //endif; ?>
            </div>
          </div>
        </div>
      </section>

      <!--  -->
      <!-- ブランド詳細説明ギャラリーセクション -->
      <section id="ACestusGallery">
        <div class="container" style="overflow: hidden;">
<!-- 
        <div class="areaChk" >000</div>
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
        <div class="areaChk15">1500</div>
 -->
          <div class="brdDtlMsg">
            <div class="cthCopy" id="cthCopy1">
              <div class="hrzLine"></div>
              <h2>Gallery</h2>
            </div>  

            <div class="forExample">
              <div class="uline"></div>

              <div id="forExample1">

                <!-- 旧スタイルギャラリー -->
                <?php  // get_template_part( 'WaPlusCfg/contents/01_subPages/gallery/NoUse_subPage-06_Gallery' ); ?>

                <!-- 新スタイルギャラリー -->
                <?php get_template_part( 'WaPlusCfg/contents/01_subPages/gallery/subPage-galleryControl', null, $args ); ?>

              </div>
              <div class="uline"></div>
            </div>
          </div>
        </div>
      </section>

<!-- **************************************************************** -->
<!-- **************************************************************** -->
<!-- **************************************************************** -->