
    <section id="section-2">
      <div class="container">

        <!-- メッセージ部 -->
          <!-- メッセージ部 -->
          <?php if ( $GB_RELLAX_FLAG ): ?>
            <div class="rollingTitle js-pallax" data-rellax-speed="5">
          <?php else: ?>
            <div class="rollingTitle">
          <?php endif; ?>

          <div class='msgMainTitle' id='msgMainTitleLC'>
            <div class='pcLine'>
              <span>C</span>
              <span>o</span>
              <span>n</span>
              <span>t</span>
              <span>a</span>
              <span>c</span>
              <span>t</span>　
              <span>U</span>
              <span>s</span>
            </div>
            
            <div class='mbLine'>
              <span>C</span>
              <span>o</span>
              <span>n</span>
              <span>t</span>
              <span>a</span>
              <span>c</span>
              <span>t</span>　
              <span>U</span>
              <span>s</span>
            </div>              
          </div>
        </div>

        <div class="pageTitle" id="pageTitle-2" style="margin-top: 100px;">
          <div class="hrzLine"></div>
          <h1>送信が完了しました。</h1>
        </div>

        <!-- ********************************************************* -->
        <!-- ********************************************************* -->
        <!-- ■ 送信内容、表示処理 -->
        <!-- ********************************************************* -->
        <!-- ********************************************************* -->
        <div class="detailInfo" id="detailInfo-2">

          <!-- 仕切り線表示 -->
          <div class="uline"></div>

          <h2>　■ お問い合わせ内容　</h2>
          <!-- <form action="./index.php" style="margin-top: 20px;"> -->
          <!-- <form action="<?php // echo esc_url( home_url( '/index.php' ) )?>" style="margin-top: 20px;"> -->
          <form action="<?php echo esc_url( home_url( '/' ) )?>" style="margin-top: 20px;">
            <?php //if ( !$GB_MOBILE_FLAG ): ?>
              <div class='forPC'>
                <div class='item'>
                  <label class='confLabel' for='name'>お名前　　　　　：</label>
                  <span class='inStrPC'><?php echo $lName ?></span>　
                  <span class='inStrPC'><?php echo $fName ?></span>　　様
                </div>  
                <div class='item'>
                  <label class='confLabelNoLBdr' for='name'>フリガナ　　　　：</label>
                  <span class='inStrPC'><?php echo $klName ?></span>　
                  <span class='inStrPC'><?php echo $kfName ?></span>　　様
                </div>  
              </div>
            <?php //else: ?>
              <div class='forMB'>
                <div class='item'>
                  <label class='confLabel' for='name'>お名前　：<br>　</label>
                  <span class='inStrMB'><?php echo $lName ?></span>
                </div>  
                <div class='item'>
                  <label class='confLabelNoLBdr' for='name'>　　　　　<br>　　　　　</label>
                  <span class='inStrMB'><?php echo $fName ?></span>　様
                </div>  
                <div class='item'>
                  <label class='confLabel' for='name'>フリガナ：<br>　</label>
                  <span class='inStrMB'><?php echo $klName ?></span>
                </div>  
                <div class='item'>
                  <label class='confLabelNoLBdr' for='name'>　　　　　<br>　　　　　</label>
                  <span class='inStrMB'><?php echo $kfName ?></span>　様
                </div>  
              </div>
            <?php //endif; ?>
            <div class='noMgnULine'></div>
              
            <div class="dline"></div>
            <?php //if ( !$GB_MOBILE_FLAG ): ?>
              <div class='forPC'>
                <div class='item'>
                  <label class='confLabel' for='email'>メールアドレス　：</label>
                  <span class='inStrPC'><?php echo $mail ?></span>　
                </div>  
              </div>
            <?php //else: ?>
              <div class='forMB'>
                <div class='item'>
                  <label class='confLabel' for='email'>メール<br>アドレス：<br>　</label>
                  <span class='inStrMB'><?php echo $mail ?></span>　
                </div>  
              </div>
            <?php //endif; ?>
            <div class='noMgnULine'></div>

            <div class="dline"></div>
            <?php //if ( !$GB_MOBILE_FLAG ): ?>
              <div class='forPC'>
                <div class='item'>
                  <label class='confLabel'>お問い合わせ種別：</label>
                  <span class='inStrPC'>
                    <?php
                      switch ($option) {
                        // case 'noSelect':
                        case $itemOptionList[0][0]:
                          // echo '★ 問合せ種別未選択';
                          echo $itemOptionList[0][1];
                          break;
                        // case 'itWeb':
                        case $itemOptionList[1][0]:
                          // echo '》IT WEB ソリューション';
                          echo $itemOptionList[1][1];
                          break;
                        // case 'originalGoods':
                        case $itemOptionList[2][0]:
                          // echo '》オリジナル商品販売';
                          echo $itemOptionList[2][1];
                          break;
                        // case 'management':
                        case $itemOptionList[3][0]:
                          // echo '》経営支援';
                          echo $itemOptionList[3][1];
                          break;
                        // case 'alliance':
                        case $itemOptionList[4][0]:
                          // echo '》ビジネスアライアンス';
                          echo $itemOptionList[4][1];
                          break;
                        // case 'other':
                        case $itemOptionList[5][0]:
                          // echo '》その他';
                          echo $itemOptionList[5][1];
                          break;
                        default:
                          echo '★ 問合せ種別選択エラー';
                      };
                    ?>
                  </span>
                </div>
              </div>
            <?php //else: ?>
              <div class='forMB'>
                <div class='item'>
                  <label class='confLabel'>お問い合わせ<br>　　　　種別：<br></label>
                  <span class='inStrMB' style="font-size: 14px;">
                    <?php
                      switch ($option) {
                        // case 'noSelect':
                        case $itemOptionList[0][0]:
                          echo '★ 問合せ種別未選択';
                          break;
                        // case 'itWeb':
                        case $itemOptionList[1][0]:
                          echo '》IT WEB ソリューション';
                          break;
                        // case 'originalGoods':
                        case $itemOptionList[2][0]:
                          echo '》オリジナル商品販売';
                          break;
                        // case 'management':
                        case $itemOptionList[3][0]:
                          echo '》経営支援';
                          break;
                        // case 'alliance':
                        case $itemOptionList[4][0]:
                          echo '》ビジネスアライアンス';
                          break;
                        // case 'other':
                        case $itemOptionList[5][0]:
                          echo '》その他';
                          break;
                        default:
                          echo '★ 問合せ種別選択エラー';
                      };
                    ?>
                  </span>
                </div>
              </div>
            <?php //endif; ?>
            <?php //if ( !$GB_MOBILE_FLAG ): ?>
              <div class='forPC'>
                <div class='item'>
                  <label class='confLabel' for='textarea-item'>お問い合わせ内容：</label>
                  <div class='inTxtPC'><span><?php echo $askText ?></span></div>
                </div>
              </div>
            <?php //else: ?>
              <div class='forMB'>
                <div class='item'>
                  <label class='confLabel' for='textarea-item'>お問い合わせ<br>　　　　内容：<br>　</label>
                  <div class='inTxtMB'><span><?php echo $askText ?></span></div>
                </div>
              </div>
            <?php //endif; ?>
            <!-- <div class="dline" style="margin-bottom: 30px;"></div> -->

            <div class="sendBtn">       <!-- NTAD 20220618 -->
              <!-- <button type="submit" name="btn_confirm" class="confBtn sdw-btn" value="ホームへ戻る">ホームへ戻る</button> -->
              <button type="submit" name="loadScreen" class="confBtn sdw-btn" value="no">ホームへ戻る</button>
            </div>
          </form>

        </div>    <!-- detailInfo -->

        <!-- イメージ画像表示 -->
        <div class="imgFrame">
          <div class="pageCthImage" id="pageCthImage-2"></div> 
        </div>

      </div>
    </section>
