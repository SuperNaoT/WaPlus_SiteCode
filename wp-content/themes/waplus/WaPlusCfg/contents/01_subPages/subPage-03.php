
<?php
/*
Template Name: 和Plus：IT WEB ソリューション
*/
  // $GB_MOBILE_FLAG = $args[ 'GB_MOBILE_FLAG' ];
  // $GB_RELLAX_FLAG = $args[ 'GB_RELLAX_FLAG' ];
  global $GB_MOBILE_FLAG;
  global $GB_RELLAX_FLAG;
?>

      <!--  -->
      <!-- メインコンテンツ内、IT WEB ソリューション -->
      <section id="rollingTitlePage">
        <div class="container">

          <!-- メッセージ部 -->
          <?php if ( $GB_RELLAX_FLAG ): ?>
            <div class="rollingTitle js-pallax" data-rellax-speed="5">
          <?php else: ?>
            <div class="rollingTitle">
          <?php endif; ?>
            <div class="msgMainTitle" id="msgMainTitleLC">
              <?php //if ( !$GB_MOBILE_FLAG ): ?>
                <div class="pcLine forPC">
                  <span>I</span>
                  <span>T</span>　
                  <span>W</span>
                  <span>E</span>
                  <span>B</span>　
                  <span>S</span>
                  <span>o</span>
                  <span>l</span>
                  <span>u</span>
                  <span>t</span>
                  <span>i</span>
                  <span>o</span>
                  <span>n</span>
                </div>
              <?php //else: ?>
                <div class="mbLine forMB">
                  <span>I</span>
                  <span>T</span><br>
                  <span>W</span>
                  <span>E</span>
                  <span>B</span><br>
                  <span>S</span>
                  <span>o</span>
                  <span>l</span>
                  <span>u</span>
                  <span>t</span>
                  <span>i</span>
                  <span>o</span>
                  <span>n</span>
                </div>              
              <?php //endif; ?>
            </div>

            <div class="cthCopy" id="cthCopy">
              <div class="hrzLine"></div>
              <h1>IT 技術支援</h1>
            </div>

            <div id="msgDetail">
              <?php //if ( !$GB_MOBILE_FLAG ): ?>
                <div class="msgDetailPC forPC">
                  <p>【実現したい！】その熱い想いを、更にサポート致します。<br>
                    【想い貯めている構想】を広く周知できる環境創りが大切です。<br><br>
                    　一つ目には「経営支援」に関する基幹的な事業遂行環境、<br>
                    　二つ目には「IT 技術」を駆使しより発展的事業展開を為せる環境。<br><br>
                    　積極的な事業展開を実現する為の施策を、<br>
                    　様々にご提案させて頂きます。</p>
                  <div class="uline"></div>
                  <div class="itWebDetail">
                    <h2>「経営支援」に関する基幹的な事業遂行環境では、</h2>
                      <p>　　1．会社ドメイン取得・ネットワーク環境構築<br>
                    　　2．業務資源効率化の為の、各種イントラネットアプリ開発<br>
                    　　3．戦略的事業展開の為の、各種解析用マクロ開発<br>
                    　　4．IT環境トラブル発生時の、即時対応と現状復帰<br><br>
                    　ビジネスとして成功させる為の基礎と成る部分について、<br>
                    「IT 技術」を駆使し、鋭意支援をさせて頂きます。</p>
                  </div>
                  <div class="uline"></div>
                  <div class="itWebDetail">
                    <h2>「IT 技術」を駆使しより発展的事業展開を為せる環境では、</h2>
                    <p>　　1．ホームページ設計・実装・開設<br>
                    　　2．各種 WEBアプリケーション開発<br>
                    　　3．各種 SNS を用いた販売支援<br><br>
                    【想い貯めている構想】の素晴らしさを広く認知して頂く為に、<br>
                    「IT 技術」を駆使し効果的に結果を求めていく、<br>
                    　様々に支援をさせて頂きます。</p>
                  </div>      
                </div>
              <?php //else: ?>
                <div class="msgDetailMB forMB">
                  <p>【実現したい！】その熱い想いを、<br>
                    　更にサポート致します。<br>
                    【想い貯めている構想】を広く周知<br>
                    　できる環境創りが大切です。<br><br>
                    　一つ目には「経営支援」<br>
                    　に関する基幹的な事業遂行環境、<br>
                    　二つ目には「IT 技術」<br>
                    　を駆使し発展的事業展開を為す環境。<br><br>
                    　積極的な事業展開を実現する為の施策を、<br>
                    　様々にご提案させて頂きます。</p>
                  <div class="uline"></div>
                  <div class="itWebDetail">
                    <h2>「経営支援」に関する<br>　基幹的な事業遂行環境では、</h2>
                    <p>　　1．会社ドメイン取得・<br>　　 　　ネットワーク環境構築<br>
                    　　2．業務資源効率化の為の、<br>　　 　　各種イントラネットアプリ開発<br>
                    　　3．戦略的事業展開の為の、<br>　　 　　各種解析用マクロ開発<br>
                    　　4．IT環境トラブル発生時の、<br>　　 　　即時対応と現状復帰<br><br>
                    　ビジネスとして成功させる<br>
                    　為の基礎と成る部分について、<br><br>
                    「IT 技術」を駆使し、<br>
                    　鋭意支援をさせて頂きます。</p>
                  </div>
                  <div class="uline"></div>
                  <div class="itWebDetail">
                    <h2>「IT 技術」を駆使し<br>　より発展的事業展開を為せる環境では、</h2>
                    <p>　　1．ホームページ設計・実装・開設<br>
                    　　2．各種 WEBアプリケーション開発<br>
                    　　3．各種 SNS を用いた販売支援<br><br>
                    【想い貯めている構想】の素晴らしさを<br>
                    　広く認知して頂く為に、<br><br>
                    「IT 技術」を駆使し<br>
                    　効果的に結果を求めていく、<br>
                    　様々に支援をさせて頂きます。</p>
                  </div>      
                </div>
              <?php //endif; ?>
            </div>
          </div>

          <!-- イメージ画像表示 -->
          <div class="sunShineImage" id="macOnDeskImage"></div>
        </div>
      </section>

      <!--  -->
      <!-- 事業実績説明セクション -->
      <section id="itWebPfm">

        <div class="container">
          <div class="mngDtlMsg">

            <div class="cthCopy" id="cthCopy1">
              <div class="hrzLine"></div>
              <h2>事業実績</h2>
            </div>

            <div class="forExample">
              <div id="cstmName">
                <?php //if ( !$GB_MOBILE_FLAG ): ?>
                  <div class="forPC">
                    <h3>　※ 株式会社 ミルバルール 様（甘味処）支援　</h3>
                    <div class="exLkFlg cstLinkFlg">
                      <a href="//www.st-daiku.co.jp/" target="_blank" rel="noopener noreferrer">
                        <h3 style="margin-top: 0;">　※ 株式会社 齋藤建築 様 支援　<i class="fas fa-external-link-alt extLnkIcon colBlue"></i></h3>
                      </a>
                    </div>
                  </div>
                <?php //else: ?>
                  <div class="forMB">
                    <h3>　※ 株式会社 ミルバルール 様</h3>
                    <div class="exLkFlg cstLinkFlg">
                      <a href="//www.st-daiku.co.jp/" target="_blank" rel="noopener noreferrer">
                        <h3 style="margin-top: 0;">　※ 株式会社 齋藤建築 様　<i class="fas fa-external-link-alt extLnkIcon colBlue"></i>　</h3>
                      </a>
                    </div>
                  </div>
                <?php //endif; ?>
              </div>
              <div class="uline"></div>

              <div id="forExample1">
                <?php //if ( !$GB_MOBILE_FLAG ): ?>
                  <div class="forPC">
                    　<h4>　■ ＩＴビジネスソリューション分野支援業務　</h2>
                  </div>
                <?php //else: ?>
                  <div class="forMB">
                    　<h4>　■ IT Biz ソリューション<br>　　　　分野支援業務　</h2>
                  </div>
                <?php //endif; ?>
                <table>
                  <tr>
                    <th>
                    1． 技術支援
                    </th>
                  </tr>
                  <tr>
                    <td>
                      <ul>
                        <li>
                          <?php //if ( !$GB_MOBILE_FLAG ): ?>
                            <ul class="forPC">
                              <li>　》会社ドメイン取得・ネットワーク環境構築</li>
                              <li>　》ホームページ開設</li>
                              <li>　》各種ＳＮＳを用いた販売支援（瞬間風速的にトレンド入り）</li>
                              <li>　》社内イントラネット向け各種アプリケーション開発</li>
                            </ul>
                          <?php //else: ?>
                            <ul class="forMB">
                              <li class="mbLineHgt">　》会社ドメイン取得・<br>　　　ネットワーク環境構築</li>
                              <li>　》ホームページ開設</li>
                              <li class="mbLineHgt">　》各種ＳＮＳを用いた販売支援<br>　　（瞬間風速的にトレンド入り）</li>
                              <li class="mbLineHgt">　》社内イントラネット向け<br>　　　各種アプリケーション開発</li>
                            </ul>
                          <?php //endif; ?>
                        </li>
                      </ul>  
                    </td>
                  </tr>
                </table>  
              </div>
            </div>
          </div>

          <?php //if ( !$GB_MOBILE_FLAG ): ?>
            <div class="rectS forPC" id="rectSPC1" data-rellax-zindex="0" data-rellax-speed="1"></div>
            <div class="rectS forPC" id="rectSPC2" data-rellax-zindex="0" data-rellax-speed="2"></div>
            <div class="rectS forPC" id="rectSPC3" data-rellax-zindex="0" data-rellax-speed="3"></div>
            <div class="rectS forPC" id="rectSPC4" data-rellax-zindex="0" data-rellax-speed="4"></div>
          <?php //else: ?>
            <div class="rectS forMB" id="rectSPC1" data-rellax-zindex="0" data-rellax-speed="1"></div>
            <div class="rectS forMB" id="rectSPC2" data-rellax-zindex="0" data-rellax-speed="1.8"></div>
            <div class="rectS forMB" id="rectSPC3" data-rellax-zindex="0" data-rellax-speed="2.6"></div>
            <div class="rectS forMB" id="rectSPC4" data-rellax-zindex="0" data-rellax-speed="3.4"></div>
          <?php //endif; ?>
        </div>
      </section>
      
          
      <!--  -->
      <!-- 保有技術力説明セクション -->
      <section id="itWebHuman">
        <div class="container"> 
          <!-- イメージ画像表示 -->
          <div class="myDeskTopImage" id="myDeskTopImage"></div>     

          <div class="mngDtlMsg">
            <div class="forPC">
              <div class="cthCopy" id="cthCopy2">
                <div class="hrzLine"></div>
                <h2>対応可能業務・技術・環境・他</h2>
              </div>
            </div>
            <div class="forMB">
              <div class="cthCopy" id="cthCopy2">
                <div class="hrzLine"></div>
                <h2 style="line-height:1.5em">対応可能業務・<br>技術・環境・他</h2>
              </div>
            </div>

            <div class="forExample">
              <div id="cstmName1">
                <!-- <h1><u>※ 対応可能技術・環境・他</u></h1> -->
              </div>  
              <div class="uline"></div>

              <div id="forExample2">
                　<h4>　■ 対応可能業務・技術・環境　</h4>
                <table>
                  <!-- <th align="left"> -->
                  <tr>
                    <th>
                      1． 対応可能業務
                    </th>                      
                  </tr>
                  <tr>
                    <td>
                      <ul>
                        <li>
                          <?php //if ( !$GB_MOBILE_FLAG ): ?>
                            <ul class="forPC">
                              <li>　》会社ドメイン取得</li>
                              <li>　》組織内ネットワーク環境設定</li>
                              <li>　》ホームページ設計・実装・保守</li>
                              <li>　》WordPress 導入・独自テーマ作成・保守</li>
                              <li>　》ＬＰ設計・実装・保守</li>
                              <li>　》ＰＣトラブル対応（ＨＤＤ内データサルベージ）</li>
                            </ul>
                          <?php //else: ?>
                            <ul class="forMB">
                              <li>　》会社ドメイン取得</li>
                              <li>　》組織内ネットワーク環境設定</li>
                              <li>　》ホームページ設計・実装・保守</li>
                              <li>　》WordPress 独自テーマ作成・保守</li>
                              <li>　》ＬＰ設計・実装・保守</li>
                              <li class="mbLineHgt">　》ＰＣトラブル対応<br>　　（ＨＤＤ内データサルベージ）</li>
                            </ul>
                          <?php //endif; ?>
                        </li>
                      </ul>
                    </td>  
                  </tr>
                  <tr>
                    <th>
                      2． 対応可能技術（使用言語等）
                    </th>                      
                  </tr>
                  <tr>
                    <td>
                      <ul>
                        <li>
                          <ul>
                            <li>　》HTML5</li>
                            <li>　》CSS3/SCSS</li>
                            <li>　》JavaScript/jQuery</li>
                            <li>　》PHP</li>
                            <li>　》C/C++</li>
                          </ul>
                        </li>
                      </ul>
                    </td>  
                  </tr>

                  <tr>
                    <th>
                      3． 開発環境
                    </th>                      
                  </tr>
                  <tr>
                    <td>
                      <ul>
                        <li>
                          <?php //if ( !$GB_MOBILE_FLAG ): ?>
                            <ul class="forPC">
                              <li>　》OS : Windows10/MacOS10.13.6 HighSierra</li>
                              <li>　》Browser : Edge/Chrome/firefox</li>
                              <li>　》Device : iPhone/iPad/Android</li>
                              <li>　》SDK : XAMPP/Visual Studio Code</li>
                            </ul>
                          <?php //else: ?>
                            <ul class="forMB">
                              <li class="mbLineHgt">　》OS : Windows10/<br>　　　 　MacOS10.13.6 HighSierra</li>
                              <li>　》Browser : Edge/Chrome/firefox</li>
                              <li>　》Device : iPhone/iPad/Android</li>
                              <li>　》SDK : XAMPP/Visual Studio Code</li>
                            </ul>
                          <?php //endif; ?>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </table>  
              </div>
              <div class="uline"></div>


              <div id="forExample3">
                　<h4>　■ エンジニア略歴　</h4>
                <?php //if ( !$GB_MOBILE_FLAG ): ?>
                  <div class="forPC">
                  <table>
                      <tr>
                        <th>
                          1. 独立系ソフトウェアハウス<br>
                        </th>
                      </tr>
                      <tr>
                        <td>
                          　》システム開発経験
                        </td>
                        <td>　：13年</td>
                      </tr>
                      <tr>
                        <th>
                          2. 日系メーカー<br>
                        </th>
                      </tr>
                      <tr>
                        <td>　》Client/Server/MiddleWare 企業サポート経験</td>
                        <td>　：4年</td>
                      </tr>
                      <tr>
                        <th>
                          3. 外資メーカー
                        </th>
                      </tr>
                      <tr>
                        <td>　》顧客開発プロジェクト管理経験</td>
                        <td>　：5年</td>
                      </tr>
                      <tr>
                        <th>
                          4. 自社
                        </th>
                      </tr>
                      <tr>
                        <td>　》IT WEB システム開発経験</td>
                        <td>　：4年</td>
                      </tr>
                    </table>
                  </div>
                <?php //else: ?>
                  <div class="forMB">
                    <table>
                      <tr>
                        <th>
                          1. 独立系ソフトウェアハウス<br>
                        </th>
                      </tr>
                      <tr>
                      </tr>
                        <td>
                          　》システム開発経験
                        </td>
                        <td>　：13年</td>
                      </tr>
                      <tr>
                        <th>
                          2. 日系メーカー<br>
                        </th>
                      </tr>
                      <tr>
                        <td>　》Client/Server/MiddleWare</td>
                      </tr>
                      <tr>
                        <td>　　　　　　　　企業サポート経験</td>
                        <td>　：4年</td>
                      </tr>
                      <tr>
                        <th>
                          3. 外資メーカー
                        </th>
                      </tr>
                      <tr>
                        <td>　》顧客開発プロジェクト管理経験</td>
                        <td>　：5年</td>
                      </tr>
                      <tr>
                        <th>
                          4. 自社
                        </th>
                      </tr>
                      <tr>
                        <td>　》IT WEB システム開発経験</td>
                        <td>　：4年</td>
                      </tr>
                    </table>
                  </div>
                <?php //endif; ?>

                <div id="itEngBtn"><a href="<?php echo esc_url( home_url('03_itwebe') ); ?>" class="btn andMoreBtn"> and more...</a></div>
              </div>
            </div>
          </div>
        </div>
      </section>

<!-- **************************************************************** -->
<!-- **************************************************************** -->
<!-- **************************************************************** -->