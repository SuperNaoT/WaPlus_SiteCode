
<?php
/*
Template Name: 和Plus：企業理念
*/
  global $GB_MOBILE_FLAG;
  global $GB_RELLAX_FLAG;
  
  // if ( $GB_RELLAX_FLAG )  {
  //   echo "\n\n\n >>>>> subPage-01.php [\$GB_RELLAX_FLAG] ☛【TRUE】\n";
  // } else  {
  //   echo "\n\n\n >>>>> subPage-01.php [\$GB_RELLAX_FLAG] ☛【FALSE】\n";
  // }

?>
      <!--  -->
      <!-- メインコンテンツ内、和プラス企業理念 -->
      <section id="rollingTitlePage">
        <div class="container">

          <!-- メッセージ部 -->
          <?php if ( $GB_RELLAX_FLAG ): ?>
            <div class="rollingTitle js-pallax" data-rellax-speed="5">
          <?php else: ?>
            <div class="rollingTitle">
          <?php endif; ?>
            <div class="msgMainTitle" id="msgMainTitleLC">
              <div class="pcLine">
                <span>申</span>
                <span>し</span>
                <span>訳</span>
                <span>ご</span>
                <span>ざ</span>
                <span>い</span>
                <span>ま</span>
                <span>せ</span>
                <span>ん</span>
                <span>。</span>
              </div>
              
              <div class="mbLine">
                <span>申</span>
                <span>し</span>
                <span>訳</span>
                <span>ご</span>
                <span>ざ</span>
                <span>い</span>
                <span>ま</span>
                <span>せ</span>
                <span>ん</span>
                <span>。</span>
              </div>              
            </div>

            <div class="cthCopy" id="cthCopy">
              <div class="hrzLine"></div>
              <h2>お探しのページは見つかりませんでした。</h2>
            </div>

            <div id="msgDetail">
              
              <?php //if ( $GB_MOBILE_FLAG == false ): ?>
                <div class="msgDetailPC forPC">
                  <div class="uline"></div>
                  <div class="page404Detail">
                    <p>404 : Page not found.</p>
                    <p>URL : <?php echo get_pagenum_link(); ?></p>
                  </div>      
                </div>
              <?php //else: ?>
                <div class="msgDetailMB forMB">
                  <div class="uline"></div>
                  <div class="page404Detail">
                    <p>404 : Page not found.</p>
                  </div>
                </div>
              <?php //endif; ?>

            </div>
          </div>

          <!-- イメージ画像表示 -->
          <div class="sakuraImage" id="philoImage"></div>
        </div>
      </section>

<!-- **************************************************************** -->
<!-- **************************************************************** -->
<!-- **************************************************************** -->