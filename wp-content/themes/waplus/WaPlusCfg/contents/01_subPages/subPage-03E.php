
<?php
/*
Template Name: 和Plus：IT WEB エンジニア経歴
*/
  // $GB_MOBILE_FLAG = $args[ 'GB_MOBILE_FLAG' ];
  // $GB_RELLAX_FLAG = $args[ 'GB_RELLAX_FLAG' ];
  global $GB_MOBILE_FLAG;
  global $GB_RELLAX_FLAG;
?>


      <!--  -->
      <!-- メインコンテンツ内、IT WEB エンジニア経歴ページ -->
      <section id="rollingTitlePage">
        <div class="container">

          <!-- ローリングタイトルセクション部 -->
          <?php if ( $GB_RELLAX_FLAG ): ?>
            <div class="rollingTitle js-pallax" data-rellax-speed="5">
          <?php else: ?>
            <div class="rollingTitle">
          <?php endif; ?>
            <div class="msgMainTitle" id="msgMainTitleLC">
              <div class="pcLine">
                <span>P</span>
                <span>a</span>
                <span>s</span>
                <span>t</span>　
                <span>D</span>
                <span>e</span>
                <span>v</span>
                <span>e</span>
                <span>l</span>
                <span>o</span>
                <span>p</span>
                <span>m</span>
                <span>e</span>
                <span>n</span>
                <span>t</span>　
                <span>R</span>
                <span>e</span>
                <span>s</span>
                <span>u</span>
                <span>l</span>
                <span>t</span>
                <span>s</span>
              </div>
              
              <div class="mbLine">
                <span>P</span>
                <span>a</span>
                <span>s</span>
                <span>t</span><br>
                <span>D</span>
                <span>e</span>
                <span>v</span>
                <span>e</span>
                <span>l</span>
                <span>o</span>
                <span>p</span>
                <span>m</span>
                <span>e</span>
                <span>n</span>
                <span>t</span><br>
                <span>R</span>
                <span>e</span>
                <span>s</span>
                <span>u</span>
                <span>l</span>
                <span>t</span>
                <span>s</span>
              </div>              
            </div>

            <div class="cthCopy" id="cthCopy">
              <div class="hrzLine"></div>
              <h1>開発・対応実績</h1>
            </div>

            <div id="detailInfo">
              <div id="forExample">
                <div class="uline"></div>
                <h2>　■ システム開発・保守　</h2>
                <table>
                  <tr>
                    <th>
                      1． 独立系ソフトウェアハウス：１３年
                    </th>
                  </tr>
                  <tr>
                    <td>
                      <ul>
                        <li class="mbMgnTop10">　<span class="strAttrGold">(1) プラント構造解析会社 様</span>
                          <ul>
                            <li>　　① 移動体通信監視制御宅システム開発</li>
                            <li>　　② 移動体通信電界強度測定システム</li>
                            <li>　　③ 他</li>
                          </ul>
                        </li>
                        <li class="mbMgnTop10">　<span class="strAttrGold">(2) 精密機器メーカー 様</span>
                          <ul>
                            <li>　　① レストランオーダリングシステム</li>
                            <li>　　② 他</li>
                          </ul>
                        </li>
                        <li class="mbMgnTop10">　<span class="strAttrGold">(3) 光学機器メーカー 様</span>
                          <?php //if ( !$GB_MOBILE_FLAG ): ?>
                            <ul class="forPC">
                              <li>　　① 県立病院内モダリティシステム</li>
                              <li>　　② 製品公差照合判定システム</li>
                              <li>　　③ ２．５次元製品意匠設計システム</li>
                              <li>　　④ ３次元形状測定機NCデータ生成システム</li>
                              <li>　　⑤ 他</li>
                            </ul>
                          <?php //else: ?>
                            <ul class="forMB">
                              <li>　　① 県立病院内モダリティシステム</li>
                              <li>　　② 製品公差照合判定システム</li>
                              <li>　　③ ２．５次元製品意匠設計システム</li>
                              <li>　　④ ３次元形状測定機<br>　　　　 NCデータ生成システム</li>
                              <li>　　⑤ 他</li>
                            </ul>
                          <?php //endif; ?>
                        </li>
                      </ul>
                    </td>  
                  </tr>
                  <tr>
                    <th>
                      2． 日系コンピューターメーカー：４年
                    </th>                      
                  </tr>
                  <tr>
                    <td>
                      <ul>
                        <?php //if ( !$GB_MOBILE_FLAG ): ?>
                          <li class="forPC">　<span class="strAttrGold">(1) Client/Server システム 主要顧客 Project 技術支援</span>
                        <?php //else: ?>
                          <li class="forMB mbLineHgt mbMgnTop10">　<span class="strAttrGold">(1) Client/Server システム<br>　　　　　　　　主要顧客 Project 技術支援</span>
                        <?php //endif; ?>
                          <ul>
                            <li>　　① 光学機器メーカー</li>
                            <li>　　② 法規出版社</li>
                            <li>　　③ 新聞社</li>
                            <li>　　④ 大手金融機関</li>
                            <li>　　⑤ 他</li>
                          </ul>
                        </li>
                        <?php //if ( !$GB_MOBILE_FLAG ): ?>
                          <li class="forPC">　<span class="strAttrGold">(2) Middle Wareシステム 主要顧客 Project 技術支援</span>
                        <?php //else: ?>
                          <li class="forMB mbLineHgt mbMgnTop10">　<span class="strAttrGold">(2) Middle Wareシステム<br>　　　　　　　　主要顧客 Project 技術支援</span>
                        <?php //endif; ?>
                          <ul>
                            <li>　　① 発動機メーカー</li>
                            <li>　　② 他</li>
                          </ul>
                        </li>
                      </ul>
                    </td>  
                  </tr>
                  <tr>
                    <?php //if ( !$GB_MOBILE_FLAG ): ?>
                      <th class="forPC">
                          3． 台湾系組込ボードメーカー 主要顧客 Project 技術支援：４年
                      </th>                      
                    <?php //else: ?>
                      <th class="forMB">
                        3． 台湾系組込ボードメーカー<br>　　　　主要顧客 Project 技術支援：４年
                      </th>                      
                    <?php //endif; ?>
                  </tr>
                  <tr>
                    <td>
                      <ul class="mbMgnTop10">
                        <li>　<span class="strAttrGold">(1) ロボット機器メーカー</span></li>
                        <li>　<span class="strAttrGold">(2) センサー機器メーカー</span></li>
                        <li>　<span class="strAttrGold">(3) 電機機器メーカー</span></li>
                        <li>　<span class="strAttrGold">(4) 電子部品メーカー</span></li>
                        <li>　<span class="strAttrGold">(5) 他</span></li>
                      </ul>
                    </td>  
                  </tr>
                  <tr>
                    <?php //if ( !$GB_MOBILE_FLAG ): ?>
                      <th class="forPC">
                        4． 米国系半導体・通信機器メーカー 主要顧客 Project 技術支援：３年
                      </th>                      
                    <?php //else: ?>
                      <th class="forMB">
                        4． 米国系半導体・通信機器メーカー<br>　　　　主要顧客 Project 技術支援：３年
                      </th>                      
                    <?php //endif; ?>
                  </tr>
                  <tr>
                    <td>
                      <ul>
                        <?php //if ( !$GB_MOBILE_FLAG ): ?>
                          <li class="forPC">　<span class="strAttrGold">(1) パケット交換機・システム 主要顧客 Project 技術支援</span>
                        <?php //else: ?>
                          <li class="forMB mbLineHgt mbMgnTop10">　<span class="strAttrGold">(1) パケット交換機・システム<br>　　　　　　　　主要顧客 Project 技術支援</span>
                        <?php //endif; ?>
                          <ul>
                            <li>　　① 国内コンピューターメーカーＦ社</li>
                            <li>　　② 国内コンピューターメーカーＮ社</li>
                            <li>　　⑤ 他</li>
                          </ul>
                        </li>
                      </ul>
                    </td>  
                  </tr>
                </table>
              </div>
              <div class="uline"></div>

              <div id="forExample1">
                <h2>　■ 渉外対応、顧客評価　</h2>
                <table>
                  <tr>
                    <th>
                      1． 日系コンピューターメーカー 在職時
                    </th>                      
                  </tr>
                  <tr>
                    <td>
                      <?php //if ( !$GB_MOBILE_FLAG ): ?>
                        <ul class="forPC">
                          <!-- <li>　<span class="strAttrGold">(1) 顧客満足度・全グループ会社内最優秀賞受賞</span></li> -->
                          <li>　<span class="strAttrGold">(1) 顧客満足度・全社内（グループ会社含）最優秀賞受賞</span></li>
                        </ul>
                      <?php //else:  ?>
                        <ul class="forMB">
                          <!-- <li class="mbMgnTop10">　<span class="strAttrGold">(1) 顧客満足度・<br>　　　全グループ会社内最優秀賞受賞</span></li> -->
                          <li class="mbMgnTop10">　<span class="strAttrGold">(1) 顧客満足度・全社内（グループ会社含）<br>　　　最優秀賞受賞</span></li>
                        </ul>
                      <?php //endif; ?>
                    </td>  
                  </tr>
                  <tr>
                    <th>
                      2． 台湾系組込ボードメーカー 在職時
                    </th>                      
                  </tr>
                  <tr>
                    <td>
                      <ul>
                        <li class="mbMgnTop10">　<span class="strAttrGold">(1) 顧客満足度に関するアワード受賞</span></li>
                      </ul>
                    </td>                      
                  </tr>
                  <tr>
                    <?php //if ( !$GB_MOBILE_FLAG ): ?>
                      <th class="forPC">
                        3． 米国系半導体・通信機器メーカー 在職時
                      </th>                      
                    <?php //else:  ?>
                      <th class="forMB">
                        3． 米国系半導体・<br>　　 通信機器メーカー 在職時
                      </th>                      
                    <?php //endif; ?>
                  </tr>
                  <tr>
                    <td>
                      <ul>
                        <li class="mbMgnTop10">　<span class="strAttrGold">(1) 顧客満足度に関するアワード受賞</span></li>
                      </ul>
                    </td>  
                  </tr>
                </table>
              </div>
              <div class="uline"></div>

              <div id="forExample2">
                <h2>　■ IT WEB ソリューション開発</h2>
                <table>
                  <tr>
                    <th>
                      1． 独立系ソフトウェアハウス：１年
                    </th>                      
                  </tr>
                  <tr>
                    <td>
                      <?php //if ( !$GB_MOBILE_FLAG ): ?>
                        <ul class="forPC">
                          <li>　<span class="strAttrGold">(1) 病院内イントラネットシステム構築</span></li>
                          <li>　<span class="strAttrGold">(2) 患者様カルテ情報 医師デスク配信システム</span></li>
                          <li>　<span class="strAttrGold">(3) DICOM画像・JPG変換 カンファレンスルーム配信システム</span></li>
                        </ul>
                      <?php //else:  ?>
                        <ul class="forMB">
                          <li class="mbMgnTop10">　<span class="strAttrGold">(1) 病院内イントラネットシステム構築</span></li>
                          <li class="mbMgnTop10">　<span class="strAttrGold">(2) 患者様カルテ情報<br>　　　医師デスク配信システム</span></li>
                          <li class="mbMgnTop10">　<span class="strAttrGold">(3) DICOM画像・JPG変換<br>　　　カンファレンスルーム配信システム</span></li>
                        </ul>
                      <?php //endif; ?>
                      <ul>
                        <li>　　・Apacheサーバー環境構築</li>
                        <li>　　・HTML</li>
                        <li>　　・CSS</li>
                        <li>　　・CGI(Perl/Awk/C++)実装</li>
                        <li>　　・他</li>
                      </ul>
                    </td>  
                  </tr>
                  <!-- <tr>
                    <th>
                      2． 株式会社ミルバルール様<br>　　（甘味処）：４年
                    </th>                      
                  </tr>
                  <tr>
                    <td>
                      <ul>
                        <li class="mbMgnTop10">　<span class="strAttrGold">(1) 社内 ITインフラ整備</span></li>
                        <li class="mbMgnTop10">　<span class="strAttrGold">(2) 製造拠点内 ITインフラ構築</span></li>
                        <li class="mbMgnTop10">　<span class="strAttrGold">(3) ホームページデザイン・開発・公開</span></li>
                      </ul>
                      <ul>
                        <li>　　・HTML5</li>
                        <li>　　・CSS3</li>
                        <li>　　・jQuery</li>
                        <li>　　・PHP</li>
                      </ul>
                    </td>  
                  </tr> -->
                  <tr>
                    <th>
                      2． 自社内プロジェクト：５年
                    </th>                      
                  </tr>
                  <tr>
                    <td>
                      <?php //if ( !$GB_MOBILE_FLAG ): ?>
                        <ul class="forPC">
                          <li>　<span class="strAttrGold">(1) 社内 ITインフラ整備</span></li>
                          <li>　<span class="strAttrGold">(2) ホームページデザイン・開発・公開</span></li>
                          <li>　<span class="strAttrGold">(3) WordPress 独自テーマ開発・ECサイト・公開準備</span></li>
                        </ul>
                      <?php //else:  ?>
                        <ul class="forMB">
                          <li class="mbMgnTop10">　<span class="strAttrGold">(1) 社内 ITインフラ整備</span></li>
                          <li class="mbMgnTop10">　<span class="strAttrGold">(2) ホームページデザイン・開発・公開</span></li>
                          <li class="mbMgnTop10">　<span class="strAttrGold">(3) WordPress 独自テーマ開発・<br>　　　ECサイト・公開準備</span></li>
                        </ul>
                      <?php //endif; ?>
                      <!-- <ul> -->
                      <ul>
                        <li>　　・HTML5</li>
                        <li>　　・CSS3/SCSS</li>
                        <li>　　・JavaScript/jQuery</li>
                        <li>　　・PHP</li>
                      </ul>
                    </td>
                  </tr>
                  <tr>
                    <th class="mbMgnTop10">
                      <span class="strAttrGold">　※ 主要クライアント</span>
                    </th>                      
                  </tr>
                  <tr>
                    <td>
                      <ul>
                        <li class="mbMgnTop05">　　》株式会社 ミルバルール 様</span></li>
                        <li>　　》株式会社 齋藤建築・<br>　　　一級齋藤工建築士事務所 様</span></li>
                      </ul>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>

          <!-- イメージ画像表示 -->
          <div class="ITWebEngTopImg"></div>     
          <div class="ITWebEngTopImg2" id="ITWebEngTopImg2"></div>
          <div class="ITWebEngTopImg3" id="ITWebEngTopImg3"></div>
        </div>
      </section>

<!-- **************************************************************** -->
<!-- **************************************************************** -->
<!-- **************************************************************** -->