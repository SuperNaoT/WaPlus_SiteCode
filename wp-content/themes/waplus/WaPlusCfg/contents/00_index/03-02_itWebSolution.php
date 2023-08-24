<?php
  // 
  // *******************************************************
  // *******************************************************
  // ★ 【global：グローバル変数・デバイス判断フラグ】の取込み
  // *******************************************************
  // *******************************************************
  // $GB_MOBILE_FLAG = $args['GB_MOBILE_FLAG'];
  global $GB_MOBILE_FLAG;
  global $GB_RELLAX_FLAG;

?>

<!--  -->
<!-- ********************************************* -->
<!-- ********************************************* -->
<!-- 各種事業説明セクション内・２、【IT WEB ソリューション事業】セクション -->
<!-- ********************************************* -->
<!-- ********************************************* -->

            <!--  -->
            <!-- IT WEB ソリューション -->
            <div class="panel js-panel" id="OurPerformanceITWEBSol">
              <div class="sectionContainer">

                <div class="bizKind doubleLine" id="bizKindMB2">
                  <h2>Ⅱ　IT WEB ソリューション</h2>
                </div>

                <div class="msgDetailPerform" id="msgDtlPfmMB2">
                  <?php //if ( !$GB_MOBILE_FLAG ): ?>
                    <div class="msgDetailPC forPC">
                      <p>【笑顔創造】<br>
                        　「受動/指示待ち型」ビジネスモデルから、<br>
                        　「能動/提案型」　　ビジネスモデルへ。<br><br>
                        【和Plus】自らの社会的な立ち位置を意識し、<br>
                        【和Plus】自らの発想にてできる事を常に意識し、クライアント様とのご協業に臨みます。<br>
                        　　効率的なシステム利用の為の環境構築から、<br>
                        　　ホームページ開設に於ける一連の課題迄と、<br>
                        　　経営支援事業の中で積み重ねてきた実績を活かし、更に結果を求めて参ります。
                        　<a href="<?php echo esc_url( home_url('03_itwebs') ); ?>">[ ... <i class="fas fa-info colBlue"></i> <i class="fas fa-link extLnkIcon colBlue"></i> ]</a></p>

                    </div>
                  <?php //else: ?>
                    <div class="msgDetailMB forMB">
                      <p>【笑顔創造】<br>
                        　「受動/指示待」ビジネスモデルから、<br>
                        　「能動/提案型」ビジネスモデルへ。<br><br>
                        【和Plus】<br>
                        　自らの社会的な立ち位置を意識し、<br>
                        　自らの発想にてできる事を常に意識し、<br>
                        　クライアント様とのご協業に臨みます。<br><br>
                        　効率的なシステム利用の為の環境構築から、<br>
                        　ホームページ開設に於ける一連の課題迄と、<br>
                        　経営支援にて積み重ねてきた実績を活かし、<br>
                        　更に結果を求めて参ります。<br><br>
                        　　　　　　　　　　　　<a href="<?php echo esc_url( home_url('03_itwebs') ); ?>">[ ... <i class="fas fa-info colBlue"></i> <i class="fas fa-link extLnkIcon colBlue"></i> ]</a></p>

                    </div>
                  <?php //endif; ?>
                </div>

                <div class="addImagePkg" id="addImgPkgMB2">
                  <div class="rectL"></div>
                  <div class="rectC"></div>  
                  <div class="rectR"></div>
                </div>
                  
              </div>

              <?php if ( $GB_RELLAX_FLAG ): ?>
                <div class="expImage js-expMImage" id="expImgMB2" data-rellax-zindex="2" data-rellax-tablet-speed="-1">
              <?php else: ?>
                <div class="expImage" id="expImgMB2">
              <?php endif; ?>
                <div class="baseFrame">
                  <img src="<?php echo esc_url( get_template_directory_uri().'/WaPlusCfg/Images/ITWebSol/macOnDeskS.jpg' ) ?>" alt="机のパソコン">
                  <!-- <img class="forPC" src="<?php //echo esc_url( get_template_directory_uri().'/WaPlusCfg/Images/ITWebSol/macOnDeskS.jpg' ) ?>" alt="机のパソコン"> -->
                  <!-- <img class="forMB" src="<?php //echo esc_url( get_template_directory_uri().'/WaPlusCfg/Images/ITWebSol/macOnDeskPx.jpg' ) ?>" alt="机のパソコン"> -->
                </div>
              </div>  
            </div>
