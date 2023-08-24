
    <section id="section-1">
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

        <?php
          global $GB_reEditFlag;
          if   ( $GB_reEditFlag != 0 )  {
            if ( !$GB_MOBILE_FLAG )  {
              $h1Title = "入力フォーム：記入内容の編集";
            } else  {
              $h1Title = "入力フォーム：<br>《記入内容の編集》";
            }
          } else                          { $h1Title = "お問い合わせ入力"; }
          // else                          { $h1Title = "入力フォーム"; }
        ?>

        <!-- <div class="pageTitle" id="pageTitle" style="margin-top: 200px;"> -->
        <div class="pageTitle" id="pageTitle" style="margin-top: 200px;">
          <div class="hrzLine"></div>
          <h1><?php echo $h1Title; ?></h1>
        </div>

        <div class="detailInfo" id="detailInfo">
    
          <!-- 仕切り線表示 -->
          <div class="uline"></div>

          <h2>　■ 入力フォーム　</h2>

          <form action="" method="post" name="contactForm1">
            <!--  -->
            <!-- 入力値にエラーが有った！ -->
            <!-- エラーメッセージを表示。 -->
            <?php if( !empty($errors) ): ?>
              <?php // console_log( $errors );?>
              <ul class="error_list">
                <?php foreach( $errors as $value ): ?>
                  <li><?php echo $value; ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>

            <?php //if ( !$GB_MOBILE_FLAG ): ?>
              <div class="forPC">
                <div class="item">
                  <label class="label">お名前　　　　　<span class="label-required">（必須）</span>：</label>
                  <label>（氏）</label>
                  <input  id="nameLPC" type="text" name="yourLnamePC" placeholder="和＋" class="inElmPC" value="<?php if( !empty($_POST['yourLnamePC']) ){ echo $_POST['yourLnamePC']; } ?>">
                  <label>　（名）</label>
                  <input  id="nameFPC" type="text" name="yourFnamePC" placeholder="太郎" class="inElmPC" value="<?php if( !empty($_POST['yourFnamePC']) ){ echo $_POST['yourFnamePC']; } ?>">
                </div>  
                <div class="item">
                  <label class="labelNoLBdr">フリガナ　　　　<span class="label-required">（必須）</span>：</label>
                  <label>（氏）</label>
                  <input  id="nameKLPC" type="text" name="yourKLnamePC" placeholder="ワプラス" pattern="[\u30A1-\u30F6]*" class="inElmPC" value="<?php if( !empty($_POST['yourKLnamePC']) ){ echo $_POST['yourKLnamePC']; } ?>">
                  <label>　（名）</label>
                  <input  id="nameKFPC" type="text" name="yourKFnamePC" placeholder="タロウ" pattern="[\u30A1-\u30F6]*" class="inElmPC" value="<?php if( !empty($_POST['yourKFnamePC']) ){ echo $_POST['yourKFnamePC']; } ?>">
                </div>  
              </div>
            <?php //else: ?>
              <div class="forMB">
                <div class="item">
                  <label class="label">お名前　：（氏）<br>　<span class="label-required">（必須）</span></label>
                  <input id="nameLMB" type="text" name="yourLnameMB" placeholder="和＋" class="inElmMB" value="<?php if( !empty($_POST['yourLnameMB']) ){ echo $_POST['yourLnameMB']; } ?>">
                </div>  
                <div class="item">
                  <label class="labelNoLBdr">　　　　　（名）<br>　　　　　</label>
                  <input id="nameFMB" type="text" name="yourFnameMB" placeholder="太郎" class="inElmMB" value="<?php if( !empty($_POST['yourFnameMB']) ){ echo $_POST['yourFnameMB']; } ?>">
                </div>  
                <div class="item">
                  <label class="label">フリガナ：（氏）<br>　<span class="label-required">（必須）</span></label>
                  <input id="nameKLMB" type="text" name="yourKLnameMB" placeholder="ワプラス" pattern="[\u30A1-\u30F6]*" class="inElmMB" value="<?php if( !empty($_POST['yourKLnameMB']) ){ echo $_POST['yourKLnameMB']; } ?>">
                </div>  
                <div class="item">
                  <label class="labelNoLBdr">　　　　　（名）<br>　　　　　</label>
                  <input id="nameKFMB" type="text" name="yourKFnameMB" placeholder="タロウ" pattern="[\u30A1-\u30F6]*" class="inElmMB" value="<?php if( !empty($_POST['yourKFnameMB']) ){ echo $_POST['yourKFnameMB']; } ?>">
                </div>  
              </div>
            <?php //endif; ?>
            <div class="noMgnULine"></div>
            
            <div class="dline"></div>

            <?php //if ( !$GB_MOBILE_FLAG ): ?>
              <div class="forPC">
                <div class="item">
                  <label class="label emLabel">メールアドレス　<span class="label-required">（必須）</span>：</label>
                  <input id="emailPC" type="email" name="emailPC" placeholder="example@waplus-jpn.co.jp" class="inElmPC" value="<?php if( !empty($_POST['emailPC']) ){ echo $_POST['emailPC']; } ?>">
                </div>  
              </div>
            <?php //else: ?>
              <div class="forMB">
                <div class="item">
                  <label class="label">メール<br>アドレス：<br>　<span class="label-required">（必須）</span></label>
                  <input id="emailMB" type="email" name="emailMB" placeholder="example@waplus-jpn.co.jp" class="inElmMB" value="<?php if( !empty($_POST['emailMB']) ){ echo $_POST['emailMB']; } ?>">
                </div>  
              </div>
            <?php //endif; ?>
            <div class="noMgnULine"></div>

            <div class="dline"></div>

            <?php //if ( !$GB_MOBILE_FLAG ): ?>
              <div class="forPC">
                <div class="item m-form-select">
                  <label class="label">お問い合わせ種別<span class="label-required">（必須）</span>：</label>
                  <select name="itemOptionPC" class="inElmPC">
                    <?php
                      foreach( $itemOptionList as $value )  {
                        if ( $value[0] === $option )  {
                          // ① POST データが存在する場合はこちらの分岐に入る
                          echo "<option value='$value[0]' selected>".$value[1]."</option>";
                        }else{
                          // ② POST データが存在しない場合はこちらの分岐に入る
                          echo "<option value='$value[0]'>".$value[1]."</option>";
                        }
                      }
                    ?>
                  </select>
                </div>
              </div>
            <?php //else: ?>
              <div class="forMB">
                <div class="item m-form-select">
                  <label class="label">お問い合わせ<br>　　　　種別：<br>　<span class="label-required">（必須）</span></label>
                  <select name="itemOptionMB" class="inElmMB">

                    <?php
                      foreach( $itemOptionList as $value )  {
                        if ( $value[0] === $option )  {
                          // ① POST データが存在する場合はこちらの分岐に入る
                          echo "<option value='$value[0]' selected>".$value[2]."</option>";
                        }else{
                          // ② POST データが存在しない場合はこちらの分岐に入る
                          echo "<option value='$value[0]'>".$value[2]."</option>";
                        }
                      }
                    ?>
                  </select>
                </div>
              </div>
            <?php //endif; ?>

            <?php //if ( !$GB_MOBILE_FLAG ): ?>
              <div class="forPC">
                <div class="item">
                  <label class="label">お問い合わせ内容<span class="label-required">（必須）</span>：</label>
                  <textarea id="textarea-itemPC" name="textareaItemPC" class="inElmPC" placeholder="お問い合わせ内容"><?php if( !empty($_POST['textareaItemPC']) ){ echo $_POST['textareaItemPC']; } ?></textarea>
                </div>
              </div>
            <?php //else: ?>
              <div class="forMB">
                <div class="item">
                  <label class="label">お問い合わせ<br>　　　　内容：<br>　<span class="label-required">（必須）</span></label>
                  <textarea id="textarea-itemMB" name="textareaItemMB" class="inElmMB" placeholder="お問い合わせ内容"><?php if( !empty($_POST['textareaItemMB']) ){ echo $_POST['textareaItemMB']; } ?></textarea>
                </div>
              </div>
            <?php //endif; ?>

            <div class="dline" style="margin-bottom: 30px;"></div>

            <?php //if ( !$GB_MOBILE_FLAG ): ?>
              <div class="forPC">
                <div class="item pvChkBox">
                  <label for="pvChkBoxPC">　<input id="pvChkBoxPC" type="checkbox" name="agreementPC" value="1">
                                          　プライバシーポリシーに同意します。
                  </label>
                </div>
              </div>
            <?php //else: ?>
              <div class="forMB">
                <div class="item pvChkBox">
                  <label for="pvChkBoxMB">　<input id="pvChkBoxMB" type="checkbox" name="agreementMB" value="1">
                                          　プライバシーポリシーに同意します。
                  </label>
                </div>
              </div>
            <?php //endif; ?>

            <!--  -->
            <!-- 入力値にエラーが有った！ -->
            <!-- エラーメッセージを表示。 -->
            <?php if( !empty($errors) ): ?>
              <?php // console_log( $errors );?>
              <br>
              <ul class="error_list">
                <?php foreach( $errors as $value ): ?>
                  <li><?php echo $value; ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>

            <div class="sendBtn">
              <button type="submit" name="btn_confirm" class="confBtn sdw-btn" id="submitBtn" value="入力内容を確認する">入力内容を確認する</button>
            </div>
          </form>
        </div>

        <!-- イメージ画像表示 -->
        <div class="imgFrame">
          <div class="pageCthImage" id="pageCthImage"></div> 
        </div>
      </div>
    </section>
