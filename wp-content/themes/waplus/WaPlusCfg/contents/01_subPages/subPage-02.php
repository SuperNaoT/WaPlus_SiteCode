
<?php
/*
Template Name: 和Plus：経営支援
*/
  // $GB_MOBILE_FLAG = $args[ 'GB_MOBILE_FLAG' ];
  // $GB_RELLAX_FLAG = $args[ 'GB_RELLAX_FLAG' ];
  global $GB_MOBILE_FLAG;
  global $GB_RELLAX_FLAG;
?>

      <!--  -->
      <!-- メインコンテンツ内、経営支援 -->
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
                  <span>M</span>
                  <span>a</span>
                  <span>n</span>
                  <span>a</span>
                  <span>g</span>
                  <span>e</span>
                  <span>m</span>
                  <span>e</span>
                  <span>n</span>
                  <span>t</span>　
                  <span>S</span>
                  <span>u</span>
                  <span>p</span>
                  <span>p</span>
                  <span>o</span>
                  <span>r</span>
                  <span>t</span>
                </div>
              <?php //else: ?>
                <div class="mbLine forMB">
                  <span>M</span>
                  <span>a</span>
                  <span>n</span>
                  <span>a</span>
                  <span>g</span>
                  <span>e</span>
                  <span>m</span>
                  <span>e</span>
                  <span>n</span>
                  <span>t</span><br>
                  <span>S</span>
                  <span>u</span>
                  <span>p</span>
                  <span>p</span>
                  <span>o</span>
                  <span>r</span>
                  <span>t</span>
                </div>              
              <?php //endif; ?>
            </div>

            <div class="cthCopy" id="cthCopy">
              <div class="hrzLine"></div>
              <h1>経営支援</h1>
            </div>

            <div id="msgDetail">
              <?php //if ( !$GB_MOBILE_FLAG ): ?>
                <div class="msgDetailPC forPC">
                  <p>【実現したい！】その熱い想いをサポート致します。<br>
                    【想いの実現に集中出来る環境】創りが大切です。<br><br>
                    　財務・会計・人事等の付随作業は勿論のこと、<br>
                    　更には、マーケティング・営業コンサルティング、そして商品開発迄、<br>
                    　鋭意支援をさせて頂きます。<br><br>
                    　先ずは、【想い貯めている構想】を形にして下さい。</p>
                  <div class="uline"></div>
                  <div class="mngSupDetail">
                    <h2>　マーケティング・営業コンサルティングでは、</h2>
                      <p>　　1．主要顧客の開拓<br>
                    　　2．ニーズの把握<br>
                    　　3．商品開発<br>
                    　　4．競合の状況掌握<br>
                    　　5．販売促進の為の IT技術活用<br><br>
                    【想い貯めている構想】の素晴らしさを、<br>
                    　広く認知して頂くために、様々に支援をさせて頂きます。</p>
                  </div>      
                  <div class="uline"></div>
                  <div class="mngSupDetail">
                    <h2>　財務・会計・人事面での支援では、</h2>
                    <p>　　1．店舗・什器当の管理<br>
                    　　2．原価管理からの利益率の把握<br>
                    　　3．四半期・年度末会計<br>
                    　　4．キャストさん（稼働時間・給与）管理<br><br>
                    　ビジネスとして成功させる為に核と成る部分での、<br>
                    　支援をさせて頂きます。</p>
                  </div>      
                </div>
              <?php //else: ?>
                <div class="msgDetailMB forMB">
                  <p>【実現したい！】<br>
                    　その熱い想いをサポート致します。<br>
                    【想いの実現に集中出来る環境】<br>
                    　が大切です。<br><br>
                    　財務・会計・人事等の<br>
                    　付随作業は勿論のこと、<br><br>
                    　更には、<br>
                    　マーケティング・<br>
                    　営業コンサルティング・<br>
                    　そして商品開発迄、<br>
                    　鋭意支援をさせて頂きます。<br><br>
                    　先ずは、<br>
                    【想い貯めている構想】<br>
                    　これを形にして下さい。</p>
                  <div class="uline"></div>
                  <div class="mngSupDetail">
                    <h2>　マーケティング・<br>
                        　営業コンサルティングでは、</h2>
                    <p>　　1．主要顧客の開拓<br>
                    　　2．ニーズの把握<br>
                    　　3．商品開発<br>
                    　　4．競合の状況掌握<br>
                    　　5．販売促進の為の IT技術活用<br><br>
                    【想い貯めている構想】の素晴らしさを、<br>
                    　広く認知して頂くために、<br>
                    　様々に支援をさせて頂きます。</p>
                  </div>      
                  <div class="uline"></div>
                  <div class="mngSupDetail">
                    <h2>　財務・会計・人事面での支援では、</h2>
                    <p>　　1．店舗・什器当の管理<br>
                    　　2．原価管理からの利益率の把握<br>
                    　　3．四半期・年度末会計<br>
                    　　4．キャストさん<br>
                    　　 　（稼働時間・給与）管理<br><br>
                    　ビジネスとして成功させる為に、<br>
                    　核と成る部分について、<br>
                    　鋭意支援をさせて頂きます。</p>
                  </div>      
                </div>
              <?php //endif; ?>
            </div>
          </div>

          <!-- イメージ画像表示 -->
          <div class="sunShineImage" id="sunShineImageR"></div>
        </div>
      </section>

      <!--  -->
      <!-- 事業実績説明セクション -->
      <section id="mngSupPfm">
        <div class="container">

        <!-- <div class="areaChk" >000</div>
        <div class="areaChk1">100</div>
        <div class="areaChk2">200</div>
        <div class="areaChk3">300</div>
        <div class="areaChk4">400</div>
        <div class="areaChk5">500</div>
        <div class="areaChk6">600</div>
        <div class="areaChk7">700</div>
        <div class="areaChk8">800</div>
        <div class="areaChk9">900</div>
        <div class="areaChk10">1000</div>
        <div class="areaChk11">1100</div>
        <div class="areaChk12">1200</div>
        <div class="areaChk13">1300</div>
        <div class="areaChk14">1400</div>
        <div class="areaChk15">1500</div> -->
        <!-- <div class="areaChk16">1600</div>
        <div class="areaChk17">1700</div>
        <div class="areaChk18">1800</div>
        <div class="areaChk19">1900</div>
        <div class="areaChk20">2000</div>
        <div class="areaChk21">2100</div>
        <div class="areaChk22">2200</div>
        <div class="areaChk23">2300</div>
        <div class="areaChk24">2400</div>
        <div class="areaChk25">2500</div>
        <div class="areaChk26">2600</div>
        <div class="areaChk27">2700</div>
        <div class="areaChk28">2800</div>
        <div class="areaChk29">2900</div>
        <div class="areaChk30">3000</div> -->


          <div class="mngDtlMsg">

            <div class="cthCopy" id="cthCopy2">
              <div class="hrzLine"></div>
              <h2>事業実績</h2>
            </div>

            <div class="forExample">
              <div id="cstmName">
                <?php //if ( !$GB_MOBILE_FLAG ): ?>
                  <h3 class="forPC">　※ 株式会社ミルバルール様（甘味処）支援　</h3>
                <?php //else: ?>
                  <h3 class="forMB">　※ 株式会社ミルバルール様　<br>　　　（甘味処）支援　</h3>
                <?php //endif; ?>
              </div>
              <div class="uline"></div>

              <div id="forExample1">
                <h2>　■ 事業支援　</h2>
                <table>
                  <tr>
                    <th>
                      <?php if ( !$GB_MOBILE_FLAG ): ?>
                        1． 営業コンサルティング・マーケティング支援<br>
                      <?php else: ?>
                        1． 営業コンサルティング・<br> 　　マーケティング支援<br><br>
                      <?php endif; ?>
                    </th>
                  </tr>
                  <tr>
                    <td>
                      <ul>
                        <li>　(1) 顧客開拓（敬称略）
                          <ul>
                            <li>　　① 公益財団法人 日本相撲協会</li>
                            <li>　　② 宗教法人 明治神宮</li>
                            <li>　　③ 株式会社 ヤクルト球団</li>
                            <li>　　④ 株式会社 オノデン</li>
                            <li>　　⑤ 株式会社 フロムワン</li>  
                          </ul>
                        </li>
                        <li>　(2) 商品開発
                          <?php //if ( !$GB_MOBILE_FLAG ): ?>
                            <ul class="forPC">
                              <li>　　① 「ひよちゃん焼き」（大相撲、卸）</li>
                              <li>　　② 「つば九郎焼き・つばみ姫焼き」（野球場場外店舗販売）</li>
                              <li>　　③ 「ほっぺ焼」（明治神宮外苑いちょう祭り店舗販売）</li>
                              <li>　　④ 「オノデン坊や焼」（オノデン様店舗先販売、卸）</li>
                            </ul>
                          <?php //else: ?>
                            <ul class="forMB">
                              <li>　　① 「ひよちゃん焼き」（大相撲、卸）</li>
                              <li class="mbLineHgt">　　② 「つば九郎焼き・つばみ姫焼き」<br>
                                  　　　　　（野球場場外店舗販売）</li>
                              <li class="mbLineHgt">　　③ 「ほっぺ焼」<br>
                                  　　　　　（明治神宮外苑<br>
                                  　　　　　　いちょう祭り店舗販売）</li>
                              <li class="mbLineHgt">　　④ 「オノデン坊や焼」<br>
                                  　　　　　（オノデン様店舗先販売、卸）</li>
                            </ul>
                          <?php //endif; ?>
                        </li>
                      </ul>
                    </td>  
                  </tr>

                  <tr>
                    <th>
                      2． 人事支援<br>
                    </th>
                  </tr>
                  <tr>
                    <td>
                      <ul>
                        <li>　(1) 人事管理支援
                          <ul>
                            <li>　　① キャストさん稼働時間管理</li>
                            <li>　　② キャストさん給与・税務管理</li>
                          </ul>
                        </li>
                      </ul>
                    </td>  
                  </tr>
                </table>  
              </div>
              <div class="uline"></div>

              <div id="forExample2">
                　<h2>　■ 店舗出店（運営）支援　</h2>
                <table>
                  <tr>
                    <th>
                      1． 常設店舗出店・運用
                    </th>
                  </tr>
                  <tr>
                    <td>
                      <ul>
                        <li>
                          <ul>
                            <li>　》大相撲・東京場所</li>
                            <?php //if ( !$GB_MOBILE_FLAG ): ?>
                              <li class="forPC">　》ヤクルトスワローズ公式戦・神宮野球場場外店舗出店販売</li>
                            <?php //else: ?>
                              <li class="forMB mbLineHgt">　》ヤクルトスワローズ公式戦・<br>
                                                    　　神宮野球場場外店舗出店販売</li>
                            <?php //endif; ?>
                          </ul>
                        </li>
                        <!-- <li class="mbLineHgt">　》大相撲・東京場所</li>
                        <li class="mbLineHgt">　》ヤクルトスワローズ公式戦・神宮野球場場外店舗出店販売</li> -->
                      </ul>
                    </td>  
                  </tr>
                  <tr>
                    <th>
                      2． イベント店舗出店・運用<br>
                    </th>
                  </tr>
                  <tr>
                    <td>
                      <ul>
                        <li>
                          <ul>
                            <?php //if ( !$GB_MOBILE_FLAG ): ?>
                              <li class="forPC">　》明治神宮外苑いちょう祭り・会場内店舗出店販売</li>
                            <?php //else: ?>
                              <li class="forMB mbLineHgt">　》明治神宮外苑いちょう祭り・<br>
                                                    　　会場内店舗出店販売</li>
                            <?php //endif; ?>
                          </ul>
                        </li>
                      </ul>
                    </td>  
                  </tr>
                </table>  
              </div>
            </div>
          </div>

          <?php //if ( $GB_MOBILE_FLAG == false ): ?>
            <div class="forPC">
              <div class="rectS" id="rectSPC6" data-rellax-zindex="0" data-rellax-speed="1"></div>
              <div class="rectS" id="rectSPC1" data-rellax-zindex="0" data-rellax-speed="1.8"></div>
              <div class="rectS" id="rectSPC2" data-rellax-zindex="0" data-rellax-speed="2.6"></div>
              <div class="rectS" id="rectSPC3" data-rellax-zindex="0" data-rellax-speed="3.4"></div>
              <div class="rectS" id="rectSPC4" data-rellax-zindex="0" data-rellax-speed="1"></div>
              <div class="rectS" id="rectSPC5" data-rellax-zindex="0" data-rellax-speed="1.8"></div>
            </div>
          <?php //else: ?>
            <div class="forMB">
              <div class="rectS" id="rectSPC11" data-rellax-zindex="0" data-rellax-speed="6"></div>
              <div class="rectS" id="rectSPC12" data-rellax-zindex="0" data-rellax-speed="5"></div>
              <div class="rectS" id="rectSPC13" data-rellax-zindex="0" data-rellax-speed="4"></div>
              <div class="rectS" id="rectSPC16" data-rellax-zindex="0" data-rellax-speed="3"></div>
              <div class="rectS" id="rectSPC14" data-rellax-zindex="0" data-rellax-speed="2"></div>
              <div class="rectS" id="rectSPC15" data-rellax-zindex="0" data-rellax-speed="1"></div>
            </div>
          <?php //endif; ?>
        </div>
      </section>

<!-- **************************************************************** -->
<!-- **************************************************************** -->
<!-- **************************************************************** -->