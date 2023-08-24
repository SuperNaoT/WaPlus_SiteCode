
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
                <span>P</span>
                <span>h</span>
                <span>i</span>
                <span>l</span>
                <span>o</span>
                <span>s</span>
                <span>o</span>
                <span>p</span>
                <span>h</span>
                <span>y</span>
              </div>
              
              <div class="mbLine">
                <span>P</span>
                <span>h</span>
                <span>i</span>
                <span>l</span>
                <span>o</span>
                <span>s</span>
                <span>o</span>
                <span>p</span>
                <span>h</span>
                <span>y</span>
              </div>              
            </div>

            <div class="cthCopy" id="cthCopy">
              <div class="hrzLine"></div>
              <h2>企業理念・・・</h2>
            </div>

            <div id="msgDetail">
              
              <?php //if ( $GB_MOBILE_FLAG == false ): ?>
                <div class="msgDetailPC forPC">
                  <p>【和Plus】<br>
                    　このフィルタを透過させる事により、<br>
                    　小さな「Plus-α」を加え「更に大きな魅力」に創造し、<br><br>
                    【笑顔創造企業】<br>
                    　としての存在価値を見出して参ります。</p>
                  <div class="uline"></div>
                  <div class="philoDetail">
                    　日本に於ける「衣食住」習慣や「文化」面での特徴が、<br>
                    　今、世界中からとても高い評価を得て注目されています。<br><br>
                    　私ども「和Plus」は、日本固有な特徴の本質に有る、<br>
                    【気付き】を【和のフィルター】とし透過させる事に因って、<br><br>
                    <!-- 　日本固有である特徴の本質に有る魅力「気付き」、<br>
                    　それを【和のフィルター】とし透過させる事に因って、<br><br> -->
                    　　1．海外に有って日本には無い様々な魅力（From oversea）<br>
                    　　2．日本に有って海外にな無い様々な魅力（From Japan)<br><br>
                    　これらを「更に大きな魅力」に創造し、<br>
                    　双方向に発信して行きたく考えて居ります。<br><br>
                    　多くの笑顔と出会うために・・・<br>
                    　これからの「和Plus」に、ご期待下さい。
                  </div>      
                </div>
              <?php //else: ?>
                <div class="msgDetailMB forMB">
                  <p>【和Plus】<br>
                      　このフィルタを透過させる事により、<br>
                      　小さな「Plus-α」を加え<br>
                      　　　　「更に大きな魅力」に創造し、<br><br>
                      【笑顔創造企業】<br>
                      　としての存在価値を見出して参ります。
                  </p>
                  <div class="uline"></div>
                  <div class="philoDetail">
                    　日本での「衣食住」習慣や<br>
                    　　　　　「文化」面での特徴が、<br>
                    　世界中からとても高い評価を得て<br>
                    　注目されています。<br><br>
                    　私ども「和Plus」は、<br>
                    　日本固有な特徴の本質に有る<br><br>
                    　　【気付き】これを、<br>
                    　　【和のフィルター】とし<br>
                    　透過させる事に因って、<br><br>
                    <!-- 　私ども「和Plus」は、<br>
                    　日本固有である特徴の本質に有る「気付き」を、<br>
                    【和のフィルター】とし、<br>
                    　そのフィルターを透過させる事に因って、<br><br> -->
                    　　1．海外に有って日本には無い<br>
                    　　　　様々な魅力（From oversea）<br>
                    　　2．日本に有って海外にな無い<br>
                    　　　　様々な魅力（From Japan)<br><br>
                    　これらを「更に大きな魅力」に創造し<br>
                    　双方向に発信して行きたく思います。<br><br>
                    　多くの笑顔と出会うために・・・<br>
                    　これからの「和Plus」に、ご期待下さい。
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