
<?php
/*
Template Name: 和Plus：会社概要
*/
  global $GB_MOBILE_FLAG;
  global $GB_RELLAX_FLAG;
?>

      <!--  -->
      <!-- メインコンテンツ内、オリジナル商品販売・いーねっか -->
      <section id="rollingTitlePage">
        <div class="container">

          <!-- ローリングタイトルセクション部 -->
          <?php if ( $GB_RELLAX_FLAG ): ?>
            <div class="rollingTitle js-pallax" id="rollingTitle" data-rellax-speed="5">
          <?php else: ?>
            <div class="rollingTitle" id="rollingTitle">
          <?php endif; ?>

            <div class="msgMainTitle" id="msgMainTitleLC">

              <?php //if ( !$GB_MOBILE_FLAG ): ?>
                <div class="pcLine forPC">
                  <span>C</span>
                  <span>o</span>
                  <span>m</span>
                  <span>p</span>
                  <span>a</span>
                  <span>n</span>
                  <span>y</span>　
                  <span>P</span>
                  <span>r</span>
                  <span>o</span>
                  <span>f</span>
                  <span>i</span>
                  <span>l</span>
                  <span>e</span>
                  <span>s</span>
                </div>
              <?php //else: ?>
                <div class="mbLine forMB">
                  <span>C</span>
                  <span>o</span>
                  <span>m</span>
                  <span>p</span>
                  <span>a</span>
                  <span>n</span>
                  <span>y</span><br>
                  <span>P</span>
                  <span>r</span>
                  <span>o</span>
                  <span>f</span>
                  <span>i</span>
                  <span>l</span>
                  <span>e</span>
                  <span>s</span>
                </div>   
              <?php //endif; ?>           
            </div>

            <div class="cthCopy" id="cthCopy">
              <div class="hrzLine"></div>
              <h1>会社概要</h1>
            </div>

            <div id="detailInfo">
              <div id="forExample">
                <div class="uline"></div>
                <h2>　■ プロフィール　</h2>

                <table>
                  <tr>
                    <td class="textRight">会社名　： </td>
                    <td class="textLeft">　株式会社 和Plus</td>
                  </tr>
                  <tr>
                    <td class="textRight">代表者　： </td>
                    <td class="textLeft">　代表取締役社長　田所 曜子</td>
                  </tr>
                  <tr>
                    <td class="textRight">　〒　　： </td>
                    <td class="textLeft">　104-0061</td>
                  </tr>
                  <?php //if ( !$GB_MOBILE_FLAG ): ?>
                    <tr class="forPC">
                      <td class="textRight">所在地　： </td>
                      <td class="textLeft">　東京都中央区銀座 1-12-4 N&E BLD. 7階</td>
                    </tr>
                  <?php //else: ?>
                    <tr class="forMB">
                      <td class="textRight">所在地　： </td>
                      <td class="textLeft">　東京都中央区銀座 1-12-4</td>
                    </tr>
                  <?php //endif; ?>
                  <tr>
                    <td class="textRight">電話　　： </td>
                    <td class="textLeft">　03-4243-7253</td>
                  </tr>
                  <tr>
                    <td class="textRight">創業　　： </td>
                    <td class="textLeft">　2018年 2月 1日</td>
                  </tr>
                  <tr>
                    <td class="textRight">資本金　： </td>
                    <td class="textLeft">　5,000,000円</td>
                  </tr>
                  <tr>
                    <td class="textRight">取引銀行： </td>
                    <td class="textLeft">　- 三菱UFJ銀行<br>
                                    　- 埼玉りそな銀行</td>
                  </tr>
                  <tr>
                    <td class="textRight">事業内容： </td>
                    <td>　- 経営コンサルティング
                      <ul>
                          <li>　　》<span class="whiteShadowLetter">財務/会計/人事</span></li>
                          <li>　　》<span class="whiteShadowLetter">営業コンサルティング</span></li>
                          <li>　　》<span class="whiteShadowLetter">やりたい思い！ 実現支援</span></li>
                          <li>
                            <ul>
                              <li class="forPC">　　　・株式会社 ミルバルール 様　<span class="whiteShadowLetter">（甘味処　　　：和菓子職人）</span></li>
                              <li class="forPC">　　　・ＣＨＡＮＣＥ企画 様　　　 <span class="whiteShadowLetter">（かき氷屋さん：パティシエ）</span></li>
                              <li class="forMB">　　　・<span class="whiteShadowLetter">株式会社 ミルバルール 様<br>　　　　（甘味処　　　：和菓子職人）</span></li>
                              <li class="forMB">　　　・<span class="whiteShadowLetter">ＣＨＡＮＣＥ企画 様<br>　　　　（かき氷屋さん：パティシエ）</span></li>
                            </ul>  
                          </li>
                      </ul>
                    </td>
                  </tr>
                  <!-- <tr><td>　</td></tr> -->
                  <tr>
                    <td></td>
                    <td>　- ITビジネスソリューション
                      <ul>
                        <li>　　》<span class="whiteShadowLetter">WEB コンサルテーション</span></li>
                        <li>
                          <ul>
                            <li>　　　・<span class="whiteShadowLetter">株式会社 齋藤建築 様</span></li>
                          </ul>  
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <!-- <tr><td>　</td></tr> -->
                  <tr>
                    <td></td>
                    <td>　- 各種雑貨販売</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>　- 物品の輸出入並びに販売</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>　- 各種イベント企画・運営管理</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <!-- イメージ画像表示 -->
          <div class="businessTopImage" id="businessTopImage"></div>     
        </div>
      </section>

<!-- **************************************************************** -->
<!-- **************************************************************** -->
<!-- **************************************************************** -->