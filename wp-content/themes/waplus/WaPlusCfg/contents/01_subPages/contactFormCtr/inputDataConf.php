
    <section id="section-0">
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

        <div class="pageTitle" id="pageTitle-1" style="margin-top: 100px;">
          <div class="hrzLine"></div>
          <h1>記入内容のご確認</h1>
        </div>
  
        <div class="detailInfo" id="detailInfo-1">

          <!-- 仕切り線表示 -->
          <div class="uline"></div>

          <h2>　■ 記入内容　</h2>
          
          <form style="margin-top: 20px;">

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
                  <label class='confLabel' for='name'>お名前　：<br></label>
                  <span class='inStrMB'><?php echo $lName ?></span>
                </div>  
                <div class='item'>
                  <label class='confLabelNoLBdr' for='name'>　　　　　<br>　　　　　</label>
                  <span class='inStrMB'><?php echo $fName ?></span>　様
                </div>  
                <div class='item'>
                  <label class='confLabel' for='name'>フリガナ：<br></label>
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
            <div class='noMgnULine'></div>

            <div class="dline" style="margin-bottom: 30px;"></div>
            <?php //if ( !$GB_MOBILE_FLAG ): ?>
              <div class="forPC">
                <div class="item">
                  <label class='confLabel' style="width:50vw;">       <!-- 26vw -->
                  <!-- <p> -->
                    <?php if( $_POST['agreementPC'] === "1" ){ echo 'プライバシーポリシーに同意します'; }
                          else{ echo 'プライバシーポリシーに同意しません'; } ?>
                  <!-- </p> -->
                  </label>
                </div>
              </div>
            <?php //else: ?>
              <div class="forMB">
                <div class="item">
                  <label class='confLabel' style="width:80vw;">
                  <!-- <p> -->
                    <?php if( $_POST['agreementMB'] === "1" ){ echo 'プライバシーポリシーに同意します'; }
                          else{ echo 'プライバシーポリシーに同意しません'; } ?>
                  <!-- </p> -->
                  </label>
                </div>
              </div>
            <?php //endif; ?>
          </form>

          <?php //if ( !$GB_MOBILE_FLAG ): ?>
            <div class='forPC'>
              <form action='' method='post'>
                <input type='hidden' name='yourLnamePC'    value='<?php echo $_POST['yourLnamePC'    ]; ?>'>
                <input type='hidden' name='yourFnamePC'    value='<?php echo $_POST['yourFnamePC'    ]; ?>'>
                <input type='hidden' name='yourKLnamePC'   value='<?php echo $_POST['yourKLnamePC'   ]; ?>'>
                <input type='hidden' name='yourKFnamePC'   value='<?php echo $_POST['yourKFnamePC'   ]; ?>'>
                <input type='hidden' name='emailPC'        value='<?php echo $_POST['emailPC'        ]; ?>'>
                <input type='hidden' name='itemOptionPC'   value='<?php echo $_POST['itemOptionPC'   ]; ?>'>
                <input type='hidden' name='textareaItemPC' value='<?php echo $_POST['textareaItemPC' ]; ?>'>
                <input type='hidden' name='agreementPC'    value='<?php echo $_POST['agreementPC'    ]; ?>'>

                <div class="sendBtn">       <!-- NTAD 20220618 -->
                  <input type='submit' class='confBtn sdw-btn' name='btn_back'   value='編集に戻る'>
                  <input type='submit' class='confBtn sdw-btn' name='btn_submit' value='確定して送信'>
                </div>
              </form>
            </div>
          <?php //else: ?>
            <div class='forMB'>
              <form action='' method='post'>
                <input type='hidden' name='yourLnameMB'    value='<?php echo $_POST['yourLnameMB'    ]; ?>'>
                <input type='hidden' name='yourFnameMB'    value='<?php echo $_POST['yourFnameMB'    ]; ?>'>
                <input type='hidden' name='yourKLnameMB'   value='<?php echo $_POST['yourKLnameMB'   ]; ?>'>
                <input type='hidden' name='yourKFnameMB'   value='<?php echo $_POST['yourKFnameMB'   ]; ?>'>
                <input type='hidden' name='emailMB'        value='<?php echo $_POST['emailMB'        ]; ?>'>
                <input type='hidden' name='itemOptionMB'   value='<?php echo $_POST['itemOptionMB'   ]; ?>'>
                <input type='hidden' name='textareaItemMB' value='<?php echo $_POST['textareaItemMB' ]; ?>'>
                <input type='hidden' name='agreementMB'    value='<?php echo $_POST['agreementMB'    ]; ?>'>

                <br><br>
                <div class="sendBtn">       <!-- NTAD 20220618 -->
                  <input type='submit' class='confBtn sdw-btn' name='btn_back'   value=' 編集に戻る '>
                  <input type='submit' class='confBtn sdw-btn' name='btn_submit' value='確定して送信'>
                </div>
              </form>
            </div>
          <?php //endif; ?>
        </div>

        <!-- イメージ画像表示 -->
        <div class="imgFrame">
          <div class="pageCthImage" id="pageCthImage-1"></div> 
        </div>
      </div>

    </section>
