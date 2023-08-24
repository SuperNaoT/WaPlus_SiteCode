
<?php
/*
Template Name: 和Plus：個人情報保護指針
*/
  global $GB_MOBILE_FLAG;
  global $GB_RELLAX_FLAG;
?>

      <!--  -->
      <!-- 個人情報保護指針ページコンテンツ -->
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
                  <span>P</span>
                  <span>r</span>
                  <span>i</span>
                  <span>v</span>
                  <span>a</span>
                  <span>c</span>
                  <span>y</span>　
                  <span>P</span>
                  <span>o</span>
                  <span>l</span>
                  <span>i</span>
                  <span>c</span>
                  <span>y</span>
                </div>
              <?php //else: ?>
                <div class="mbLine forMB">
                  <span>P</span>
                  <span>r</span>
                  <span>i</span>
                  <span>v</span>
                  <span>a</span>
                  <span>c</span>
                  <span>y</span><br>
                  <span>P</span>
                  <span>o</span>
                  <span>l</span>
                  <span>i</span>
                  <span>c</span>
                  <span>y</span>
                </div>              
              <?php //endif; ?>
            </div>

            <div class="cthCopy" id="cthCopy">
              <div class="hrzLine"></div>
              <h1>個人情報保護指針</h1>
            </div>

            <div id="detailInfo">
              <div id="forExample">
                <?php //if ( !$GB_MOBILE_FLAG ): ?>
                  <div class="forPC">
                    <p>
                      弊社が取り扱う全ての個人情報の保護について、<br>
                      社会的使命を十分に認識し、本人の権利の保護、個人情報に関する法規制等を遵守します。<br><br>
                      以下に示す方針を具現化する為の個人情報保護管理システムを構築し、<br>
                      社会的要請の変化、経営環境の変動等を常に認識しながら、<br>
                      その継続的改善に、全社を挙げて取り組む事をここに宣言します。
                    </p>
                  </div>
                <?php //else: ?>
                  <div class="forMB">
                    <p>
                      弊社が取り扱う<br>
                      全ての個人情報の保護について、<br>
                      社会的使命を十分に認識し、<br>
                      本人の権利の保護、<br>
                      個人情報に関する法規制等を<br>
                      遵守します。<br><br>
                      以下に示す方針を具現化する為の<br>
                      個人情報保護管理システムを構築し、<br><br>
                      社会的要請の変化・<br>
                      経営環境の変動等を<br>
                      常に認識しながら、<br>
                      その継続的改善に、<br>
                      全社を挙げて取り組む事を<br>
                      ここに宣言します。
                    </p>
                  </div>
                <?php //endif; ?>

                <div class="uline"></div>
                <!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
  
                <h2>(1) 個人情報は、</h2>
                <?php //if ( !$GB_MOBILE_FLAG ): ?>
                  <div class="forPC">
                    <p>
                      経営支援事業、店舗出店（運営）支援事業、<br>
                      フランチャイズ開発支援業務、IT WEB ソリューション事業における、<br>
                      弊社の正当な事業遂行上並びに従業員の雇用、<span class="whiteShadowLetter">人事管理上必要な範囲に限定して、取得・利用及び提供をし、</span><br>
                      特定された利用目的の達成に必要な範囲を超えた<span class="whiteShadowLetter">個人情報の取扱いを行わない為の措置を講じます。</span>
                    </p>
                  </div>
                <?php //else: ?>
                  <div class="forMB">
                    <p>
                      経営支援事業、<br>
                      店舗出店（運営）支援事業、<br>
                      フランチャイズ開発支援業務、<br>
                      IT WEB ソリューション事業等<br>
                      での、弊社の正当な事業遂行上<br>
                      並びに従業員の雇用、<br>
                      人事管理上必要な範囲に限定して、<br>
                      取得・利用及び提供をし、<br><br>
                      特定された利用目的の達成に必要な<br>
                      範囲を超えた個人情報の取扱いを<br>
                      行わない為の措置を講じます。
                    </p>
                  </div>
                <?php //endif; ?>
                <div class="uline"></div>

                <h2>(2) 個人情報保護に関する法令、</h2>
                <div>
                  <?php //if ( !$GB_MOBILE_FLAG ): ?>
                    <p class="forPC">
                      国が定める指針及びその他の規範を遵守致します。
                    </p>
                  <?php //else: ?>
                    <p class="forMB">
                      国が定める指針及び<br>
                      その他の規範を遵守致します。
                    </p>
                  <?php //endif; ?>
                </div>
                <div class="uline"></div>

                <?php //if ( !$GB_MOBILE_FLAG ): ?>
                  <div class="forPC">
                    <h2>(3) 個人情報の漏えい、滅失、<span class="whiteShadowLetter">毀損等のリスクに対しては、</span></h2>
                    <p>
                      合理的な安全対策を講じて防止すべく<span class="whiteShadowLetter">事業の実情に合致した経営資源を注入し</span><br>
                      個人情報保護体制を継続的に向上させます。<br>
                      また、万一の際には速やかに是正措置を講じます。<br>
                    </p>
                  </div>
                <?php //else: ?>
                  <div class="forMB">
                    <h2>(3) 個人情報の漏えい、滅失、<br>　毀損等のリスクに対しては、</h2>
                    <p>
                      合理的な安全対策を講じ防止すべく<br>
                      事業の実情に合致した<br>
                      経営資源を注入し、<br>
                      個人情報保護体制を<br>
                      継続的に向上させます。<br><br>
                      また、万一の際には<br>
                      速やかに是正措置を講じます。<br>
                    </p>
                  </div>
                <?php //endif; ?>
                <div class="uline"></div>

                <?php //if ( !$GB_MOBILE_FLAG ): ?>
                  <div class="forPC">
                    <h2>(4) 個人情報取扱いに関する苦情及び相談に対しては、</h2>
                  </div>
                <?php //else: ?>
                  <div class="forMB">
                    <h2>(4) 個人情報取扱いに関する<br>　苦情及び相談に対しては、</h2>
                  </div>
                <?php //endif; ?>
                <div>
                  <p>
                    迅速かつ誠実に、<br>
                    適切な対応をさせて頂きます。
                  </p>
                </div>
                <div class="uline"></div>

                <?php //if ( !$GB_MOBILE_FLAG ): ?>
                  <div class="forPC">
                    <h2>(5) 個人情報保護マネジメントシステムは、</h2>
                    <p>
                      弊社を取り巻く環境の変化を踏まえ、<br>
                      適時・適切に見直してその改善を継続的に推進します。<br><br>
                      本方針は、全ての従業者に配付して周知させるとともに、<span class="whiteShadowLetter">弊社のホームページなどに掲載する事により、</span><br>
                      ​いつでもどなたにも入手可能な措置を取るものとします。
                    </p>
                  </div>
                <?php //else: ?>
                  <div class="forMB">
                    <h2>(5) 個人情報保護<br>　マネジメントシステムは、</h2>
                    <p>
                      弊社を取り巻く<br>
                      環境の変化を踏まえ、<br>
                      適時・適切に見直して<br>
                      その改善を継続的に推進します。<br><br>
                      本方針は、<br>
                      全ての従業者に配付し<br>
                      周知させるとともに、<br>
                      弊社のホームページ等に掲載する事<br>
                      により、いつでもどなたにも、<br>
                      入手可能な措置を取るものとします。
                    </p>
                  </div>
                <?php //endif; ?>
                <div class="uline"></div>
              </div>
            </div>

            <div class="cthCopy" id="cthCopy1">
              <div class="hrzLine"></div>
              <h1>個人情報の取り扱い</h1>
            </div>

            <div id="detailInfo1">
              <div id="forExample1">
                <?php //if ( !$GB_MOBILE_FLAG ): ?>
                  <div class="forPC">
                    <p>
                      ご提供いただいた個人情報につきましては、<span class="whiteShadowLetter">以下の利用目的以外では利用しません。</span><br>
                      万一、当該目的以外で利用する場合や、利用<span class="whiteShadowLetter">目的を変更する場合は、事前にお知らせ致します。</span><br>
                      なお、不要になった個人情報につきましては、<span class="whiteShadowLetter">速やかに且つ適正に削除・廃棄します。</span>
                    </p>
                  </div>
                <?php //else: ?>
                  <div class="forMB">
                    <p>
                      ご提供いただいた<br>
                      個人情報につきましては、<br>
                      以下の利用目的以外では<br>
                      利用しません。<br><br>
                      万一、<br>
                      当該目的以外で利用する場合や、<br>
                      利用目的を変更する場合は、<br>
                      事前にお知らせ致します。<br><br>
                      なお、不要になった<br>
                      個人情報につきましては、<br>
                      速やかに且つ適正に<br>
                      削除・廃棄致します。
                    </p>
                  </div>
                <?php //endif; ?>
                <div class="uline"></div>
                <!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
                <?php //if ( !$GB_MOBILE_FLAG ): ?>
                  <div class="forPC">
                    <h2>(1) 委託された業務で取り扱う個人情報</h2>
                  </div>
                <?php //else: ?>
                  <div class="forMB">
                    <h2>(1) 委託された<br>　業務で取り扱う個人情報　</h2>
                  </div>
                <?php //endif; ?>
                <div>
                  <p>
                    委託された業務の遂行の為
                  </p>
                </div>
                <div class="uline"></div>

                <h2>(2) 従業員情報　</h2>
                <div>
                  <p>
                    社員の人事労務管理、<br>
                    業務管理、<br>
                    健康管理、<br>
                    セキュリティ管理の為
                  </p>
                </div>
                <div class="uline"></div>

                <?php //if ( !$GB_MOBILE_FLAG ): ?>
                  <div class="forPC">
                    <h2>(3) パートナー企業様に関する情報</h2>
                  </div>
                <?php //else: ?>
                  <div class="forMB">
                    <h2>(3) パートナー企業様<br>　に関する情報　</h2>
                  </div>
                <?php //endif; ?>
                <div>
                  <p>
                    事業活動における連絡の為
                  </p>
                </div>
                <div class="uline"></div>
              </div>
            </div>

          </div>
          <!-- イメージ画像表示 -->
          <div class="pPolicyTopImage" id="pPolicyTopImage"></div>     
        </div>
      </section>

<!-- **************************************************************** -->
<!-- **************************************************************** -->
<!-- **************************************************************** -->