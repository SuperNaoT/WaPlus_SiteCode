
<?php
/*
Template Name: 和Plus：オリジナル商品販売・いーねっか！
*/
  global $GB_MOBILE_FLAG;
  global $GB_RELLAX_FLAG;
?>

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

      <!--  -->
      <!-- メインコンテンツ内、オリジナル商品販売・いーねっか -->
      <section id="rollingTitlePage">
        <div class="container" style="overflow: hidden;">

          <!-- イメージ画像表示 -->
          <div class="inekkaLargeLogo" id="inekkaLgLogoImage"></div>

          <!-- ローリングタイトルセクション部 -->
          <?php if ( $GB_RELLAX_FLAG ): ?>
            <div class="rollingTitle js-pallax" data-rellax-speed="5">
          <?php else: ?>
            <div class="rollingTitle">
          <?php endif; ?>

            <div class="msgMainTitle" id="msgMainTitleLC">
              <?php //if ( !$GB_MOBILE_FLAG ): ?>
                <div class="pcLine forPC">
                  <span>i</span>
                  <span>-</span>
                  <span>n</span>
                  <span>e</span>
                  <span>k</span>
                  <span>k</span>
                  <span>a</span>
                </div>
              <?php //else: ?>
                <div class="mbLine forMB">
                  <span>i</span>
                  <span>-</span>
                  <span>n</span>
                  <span>e</span>
                  <span>k</span>
                  <span>k</span>
                  <span>a</span>
                </div>
              <?php //endif; ?> 
            </div>

            <div class="cthCopy" id="cthCopy">
              <div class="hrzLine"></div>
              <h1>大人の素敵雑貨</h1>
            </div>

            <div id="msgDetail">
              <?php //if ( !$GB_MOBILE_FLAG ): ?>
                <div class="msgDetailPC forPC">
                  <p>
                    【i-nekka】オリジナルのお品の数々・・・<br><br>
                    「素敵な大人の女性を演出したい、一助となりたい」<br>
                    「手に取って頂けたとき、思わず笑顔が広がる様に」<br><br>
                    　こんな気持ちを込めて、一つ一つ丁寧に手作りしています。<br>
                    　一瞬でも、気持ちが華やいで頂けたらとても嬉しい・・・<br><br>
                    　　　　　　　　　　<a href="<?php // echo esc_url( home_url('05_inekkaec' ) ); ?>">[ オンラインショップのご案内 ... <i class="fas fa-info" style="color: blue;"></i> <i class="fas fa-link extLnkIcon colBlue"></i> ]</a>
                  </p>
                  <div class="uline"></div>
                  <p>
                    　手に取った時の「思わず広がる笑顔」<br><br>
                    　多くの笑顔を造りだし『過疎・高齢化の進む地域を元気づけたい！』<br>
                    　そんな想いも芽生えて参りました。<br><br>
                    【刺し子の会】<br>
                    　週に一度の開催「刺し子・レース・ニット」を「皆で集って」実際に作ってみる。<br>
                    　地域を元気付けるその一歩、先ずは「コミュニティー形成の一助」となりたい。<br><br>
                    　熱い想いで地域の活性化に貢献して参ります。
                  </p>
                </div>
              <?php //else: ?>
                <div class="msgDetailMB forMB">
                  <p>
                    【i-nekka】オリジナルのお品の数々・・・<br><br>
                    「素敵な大人の女性を演出したい、<br>
                    　一助となりたい」<br><br>
                    「手に取って頂けたとき、<br>
                    　思わず笑顔が広がる様に」<br><br>
                    　こんな気持ちを込めて、<br>
                    　一つ一つ丁寧に手作りしています。<br><br>
                    　一瞬でも気持ちが華やいで頂けたら<br>
                    　とても嬉しい・・・<br><br>
                    　<a href="<?php echo esc_url( home_url('05_inekkaec' ) ); ?>">[ オンラインショップのご案内 ... <i class="fas fa-info colBlue"></i> <i class="fas fa-link extLnkIcon colBlue"></i> ]</a>
                  </p>
                  <div class="uline"></div>
                  <p>
                    　手に取った時の「思わず広がる笑顔」<br><br>
                    　多くの笑顔を造りだし、<br>
                    『高齢化・過疎化の進む地域を元気づけたい！』<br>
                    　そんな想いも芽生えて参りました。<br><br>
                    【刺し子の会】<br>
                    　週に一度の開催、「皆で集って」<br>
                    「刺し子・レース・ニット」を作ってみる。<br><br>
                    　地域を元気付けるその一歩、<br>
                    「コミュニティー形成の一助」となりたい。<br><br>
                    　熱い想いで地域の活性化に貢献して参ります。
                  </p>
                </div>
              <?php //endif; ?>
            </div>
          </div>
        </div>
      </section>

      <!--  -->
      <!-- ブランド詳細説明セクション -->
      <section id="inekkaGallery">
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

          <div class="brdDtlMsg">
            <div class="cthCopy" id="cthCopy1">
              <div class="hrzLine"></div>
              <h2>Gallery</h2>
            </div>  

            <div class="forExample">
              <div class="uline"></div>

              <div id="forExample1">

                <!-- 旧スタイルギャラリー -->
                <?php // get_template_part( 'WaPlusCfg/contents/01_subPages/gallery/subPage-05_Gallery' ); ?>

                <!-- 新スタイルギャラリー -->
                <?php // get_template_part( 'WaPlusCfg/contents/01_subPages/gallery/subPage-InekkaGallery', null, $args ); ?>
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