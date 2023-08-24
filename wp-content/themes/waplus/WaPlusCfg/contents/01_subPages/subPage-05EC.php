
<?php
/*
Template Name: 和Plus：個人情報保護指針
*/
  global $GB_MOBILE_FLAG;
  global $GB_RELLAX_FLAG;

  // if ( $GB_MOBILE_FLAG )  {
  //   echo "\n\n\n >>>>> subPage-05EC.php [\$GB_MOBILE_FLAG] ☛【TRUE】\n";
  // } else  {
  //   echo "\n\n\n >>>>> subPage-05EC.php [\$GB_MOBILE_FLAG] ☛【FALSE】\n";
  // }

?>

      <!--  -->
      <!-- 個人情報保護指針ページコンテンツ -->
      <section id="rollingTitlePage">
        <div class="container">


          <!-- イメージ画像表示 -->
          <div class="inekkaLargeLogo" id="inekkaLgLogoImage"></div>

          <!-- メッセージ部 -->
          <div class="rollingTitle js-pallax" data-rellax-speed="5">
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
              <?php //if ( !$GB_MOBILE_FLAG ): ?>
                <h1 class="forPC">オンラインショップのご案内</h1>
              <?php //else: ?>
                <h1 class="forMB">Online Shop のご案内</h1>
              <?php //endif; ?>
            </div>

            <div id="msgDetail">
              <?php //if ( !$GB_MOBILE_FLAG ): ?>
                <div class="msgDetailPC forPC" id="brandLinkURL1">
                  <table style="color:#665A1A; font-weight: 700;">
                    <tr>
                      <th>【 <span style="color: red;">creema</span> 】</th>
                      <td style="padding-left: 10px;">ハンドメイド・手作り・クラフト作品の通販、</td>
                    </tr>
                    <tr>
                      <th></th>
                      <td style="text-align: right;"><a href="//www.creema.jp/c/i-nekka" target="_blank" rel="noopener noreferrer">販売サイト様　[ ... <i class="fas fa-external-link-alt" style="color: blue;"></i> ]　　</a></td>
                    </tr>
                    <tr style="line-height: 0.5em;" ><th>　</th><td>　</td></tr>
                    <tr>
                      <th>【 <span style="color: red;">minne</span> 】</th>
                      <td style="padding-left: 10px;">日本最大級のハンドメイド・手作り通販、</td>
                    </tr>
                    <tr>
                      <th></th>
                      <td style="text-align: right;"><a href="//minne.com/@i-nekka" target="_blank" rel="noopener noreferrer">販売サイト様　[ ... <i class="fas fa-external-link-alt" style="color: blue;"></i> ]　　</a></td>
                    </tr>
                  </table>
                  <p style="margin-top: 1.2em;">
                    　気持ちを込めて創り上げましたお品を販売して居ります。<br>
                    　宜しければ、こちらへもご訪問下さいませ。
                  </p>
                </div>
              <?php //else: ?>
                <div class="msgDetailMB forMB" id="brandLinkURL2">
                  <table style="color:#665A1A; font-weight: 700;">
                    <tr>
                      <th style="text-align: right;">【 <span style="color: red;">creema</span> 】</th>
                      <td>ハンドメイド・<br>手作りクラフト作品の</td>
                    </tr>
                    <tr>
                      <th></th>
                      <td>通販サイト様</td>
                    </tr>
                    <tr>
                      <th></th>
                      <td style="text-align: center;"><a href="//www.creema.jp/c/i-nekka" target="_blank" rel="noopener noreferrer">[ ... <i class="fas fa-external-link-alt" style="color: blue;"></i> ]</a></td>
                    </tr>
                    <tr style="line-height: 0.8em;" ><th>　</th><td>　</td></tr>
                    <tr>
                      <th style="text-align: right;">【 <span style="color: red;">minne</span> 】</th>
                      <td>日本最大級の<br>ハンドメイド・<br>手作りクラフト作品の</td>
                    </tr>
                    <tr>
                      <th></th>
                      <td>通販サイト様</td>
                    </tr>
                    <tr>
                      <th></th>
                      <td style="text-align: center;"><a href="//minne.com/@i-nekka" target="_blank" rel="noopener noreferrer">[ ... <i class="fas fa-external-link-alt" style="color: blue;"></i> ]</a></td>
                    </tr>
                  </table>
                  <p style="margin-top: 1.2em; margin-left: 10px;">
                    気持ちを込めて<br>
                    創り上げましたお品を販売して居ります。<br>
                    宜しければ、こちらへもご訪問下さいませ。
                  </p>
                </div>
              <?php //endif; ?>
            </div>
          </div>
        </div>
      </section>

      <!--  -->
      <!-- ブランド詳細説明セクション -->
      <section id="snsInformation">        
        <div class="container">      
          <div class="brdDtlMsg">
            <div class="cthCopy" id="cthCopy1">
              <div class="hrzLine"></div>
              <!-- <h2>ＳＮＳ</h2> -->
              <?php //if ( !$GB_MOBILE_FLAG ): ?>
                <h2 class="forPC">Social Networking Service</h2>
              <?php //else: ?>
                <h2 class="forMB" style="line-height: 1.2em;">Social<br>　Networking<br>　　Service</h2>
              <?php //endif; ?>
            </div>  

            <div class="forPC">
              <?php require_once( get_template_directory() . '/WaPlusCfg/contents/01_subPages/iNekkaEC/iNekkaECP.php' ); ?>
            </div>
            <div class="forMB">
              <?php require_once( get_template_directory() . '/WaPlusCfg/contents/01_subPages/iNekkaEC/iNekkaECM.php' ); ?>            
            </div>
          </div>
        </div>
      </section>

<!-- **************************************************************** -->
<!-- **************************************************************** -->
<!-- **************************************************************** -->