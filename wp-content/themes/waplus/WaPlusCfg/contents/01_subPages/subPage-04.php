
<?php
/*
Template Name: 和Plus：オリジナル商品販売！
*/
  global $GB_MOBILE_FLAG;
  global $GB_RELLAX_FLAG;
?>

      <!--  -->
      <!-- メインコンテンツ内、オリジナル商品販売 -->
      <section id="rollingTitlePage">
        <div class="container">
<!-- 
<div class="areaChk" >000</div>
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
<div class="areaChk15">1500</div>
 -->
          <!-- ローリングタイトルセクション部 -->
          <?php if ( $GB_RELLAX_FLAG ): ?>
            <div class="rollingTitle js-pallax" data-rellax-speed="5">
          <?php else: ?>
            <div class="rollingTitle">
          <?php endif; ?>

            <div class="msgMainTitle" id="msgMainTitleLC">
              <?php //if ( !$GB_MOBILE_FLAG ): ?>
                <div class="pcLine forPC">
                  <span>O</span>
                  <span>r</span>
                  <span>i</span>
                  <span>g</span>
                  <span>i</span>
                  <span>n</span>
                  <span>a</span>
                  <span>l</span>　
                  <span>P</span>
                  <span>r</span>
                  <span>o</span>
                  <span>d</span>
                  <span>u</span>
                  <span>c</span>
                  <span>t</span>　
                  <span>S</span>
                  <span>a</span>
                  <span>l</span>
                  <span>e</span>
                  <span>s</span>
                </div>
              <?php //else: ?>
                <div class="mbLine forMB">
                  <span>O</span>
                  <span>r</span>
                  <span>i</span>
                  <span>g</span>
                  <span>i</span>
                  <span>n</span>
                  <span>a</span>
                  <span>l</span><br>
                  <span>P</span>
                  <span>r</span>
                  <span>o</span>
                  <span>d</span>
                  <span>u</span>
                  <span>c</span>
                  <span>t</span><br>
                  <span>S</span>
                  <span>a</span>
                  <span>l</span>
                  <span>e</span>
                  <span>s</span>
                </div>             
              <?php //endif; ?> 
            </div>

            <div class="cthCopy" id="cthCopy">
              <div class="hrzLine"></div>
              <h1>オリジナル商品販売</h1>
            </div>

            <div id="msgDetail">

              <?php //if ( !$GB_MOBILE_FLAG ): ?>
                <div class="msgDetailPC forPC" id="msgDetailPC">
                  <p>
                    「海外に有って日本には無い様々な魅力（From oversea）」<br>
                    「日本に有って海外にな無い様々な魅力（From Japan）」<br><br>
                    　これらに少しだけ「和Plus」のエッセンスを加え、<br>
                    　より魅力的なお品として創造し、お届けして参ります。<br><br>
                    　２つのブランド【i-nekka】と【Aphrodite Cestus】<br>
                    　その向こうに見える【たくさんの笑顔】の為に・・・<br>
                  </p>
                  <div class="uline"></div>
                  <div class="doubleLine">
                    <a href="<?php echo esc_url( home_url('05_inekka') ); ?>" class="brdTitleDec">
                      <h2>　■　i-nekka：大人の素敵雑貨　<i class="fas fa-link extLnkIcon colBlue"></i>　</h2>
                    </a>
                  </div>
                  <div class="uline"></div>
                  <div class="doubleLine">
                    <a href="<?php echo esc_url( home_url('06_acestus') ); ?>" class="brdTitleDec">
                      <h2>　■　Aphrodite Cestus：クロコダイル　<i class="fas fa-link extLnkIcon colBlue"></i>　</h2>
                    </a>
                  </div>
                  <div class="uline"></div>
                </div>
              <?php //else: ?>
                <div class="msgDetailMB forMB" id="msgDetailMB">
                  <p>
                    「海外に有って日本には無い様々な魅力<br>　　　　　（From oversea）」<br>
                    「日本に有って海外にな無い様々な魅力<br>　　　　　（From Japan）」<br><br>
                    　これらに少しだけ<br>
                    「和Plus」のエッセンスを加え、<br><br>
                    　より魅力的なお品として創造し、<br>
                    　お届けして参ります。<br><br>
                    　２つのブランド、<br>
                    【i-nekka】と【Aphrodite Cestus】<br><br>
                    　その向こうに見える<br>
                    【たくさんの笑顔】の為に・・・<br>
                  </p>
                  <div class="uline"></div>
                  <div class="doubleLine">
                    <!-- <h2>　i-nekka：大人の素敵雑貨　</h2> -->
                    <a href="<?php echo esc_url( home_url('05_inekka') ); ?>" class="brdTitleDec">
                      <h2>　■　i-nekka：<br>　　　　　大人の素敵雑貨　<i class="fas fa-link extLnkIcon colBlue"></i></h2>
                    </a>
                  </div>
                  <div class="uline"></div>
                  <div class="doubleLine">
                    <!-- <h2>　Aphrodite Cestus：クロコダイル　</h2> -->
                    <a href="<?php echo esc_url( home_url('06_acestus') ); ?>" class="brdTitleDec">
                      <h2>　■　Aphrodite Cestus：<br>　　　　　　クロコダイル　<i class="fas fa-link extLnkIcon colBlue"></i></h2>
                    </a>
                  </div>
                  <div class="uline"></div>
                </div>
              <?php //endif; ?>

            </div>
          </div>

          <!-- イメージ画像表示 -->
          <div class="flowerKnitImage" id="flowerKnitImage"></div>
        </div>
      </section>

      <!--  -->
      <!-- ブランド詳細説明セクション -->
      <section id="inekkaDtlExp">
        <div class="container">
<!-- 
<div class="areaChk" >000</div>
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
<div class="areaChk15">1500</div>
 -->
          <?php //if ( !$GB_MOBILE_FLAG ): ?>
            <div class="forPC">
              <div class="rectS" id="rectSPC4" data-rellax-zindex="0" data-rellax-speed="2"></div> <!-- 2 -->
              <div class="rectS" id="rectSPC1" data-rellax-zindex="0" data-rellax-speed="3"></div> <!-- 3 -->
              <div class="rectS" id="rectSPC3" data-rellax-zindex="0" data-rellax-speed="5"></div> <!-- 5 -->
              <div class="rectS" id="rectSPC2" data-rellax-zindex="0" data-rellax-speed="4"></div> <!-- 4 -->
            </div>
          <?php //else: ?>
            <div class="forMB">
              <?php if ( $GB_RELLAX_FLAG ): ?>
                <div class="rectS" id="rectSPC9" data-rellax-zindex="0" data-rellax-speed="2"></div>
                <div class="rectS" id="rectSPC6" data-rellax-zindex="0" data-rellax-speed="2.5"></div>
                <div class="rectS" id="rectSPC8" data-rellax-zindex="0" data-rellax-speed="2.8"></div> <!-- 3.4 -->
                <div class="rectS" id="rectSPC7" data-rellax-zindex="0" data-rellax-speed="3.1"></div>
              <?php else: ?>
                <div class="rectS" id="rectSPC9" data-rellax-zindex="0" data-rellax-speed="0"></div>
                <div class="rectS" id="rectSPC6" data-rellax-zindex="0" data-rellax-speed="0"></div>
                <div class="rectS" id="rectSPC8" data-rellax-zindex="0" data-rellax-speed="0"></div> <!-- 3.4 -->
                <div class="rectS" id="rectSPC7" data-rellax-zindex="0" data-rellax-speed="0"></div>
              <?php endif; ?>
            </div>
          <?php //endif; ?>
  
          <div class="brdDtlMsg">
            <?php //if ( !$GB_MOBILE_FLAG ): ?>
              <div class="forPC">
                <div class="cthCopy" id="cthCopy1">
                  <div class="hrzLine"></div>
                  <h2>i-nekka：大人の素敵雑貨</h2>
                  <img class="inekkaLogo" src="<?php echo esc_url( get_template_directory_uri().'/WaPlusCfg/Images/i-nekka/i-nekka_Edwardian_1024.jpg' ) ?>" alt="オリジナル商品販売事業・いーねっか、ブランドイメージを表すロゴの画像">
                </div>  
              </div>
            <?php //else: ?>
              <div class="forMB">
                <img class="inekkaLogoMB" id="inekkaLogoMB" src="<?php echo esc_url( get_template_directory_uri().'/WaPlusCfg/Images/i-nekka/i-nekka_Edwardian_1024.jpg' ) ?>" alt="オリジナル商品販売事業・いーねっか、ブランドイメージを表すロゴの画像">
                <div class="cthCopy" id="cthCopy6">
                  <div class="hrzLine"></div>
                  <h2>i-nekka：大人の素敵雑貨</h2>
                </div>  
              </div>
            <?php //endif; ?>

            <div class="forExample">
              <div id="forExample1">
                <?php //if ( !$GB_MOBILE_FLAG ): ?>
                  <div class="forPC">
                    <div class="uline"></div>
                    <p>　人と繋がっていたい！<br>
                      「いいな」と思う気持ちを共有したい！<br><br>                    
                      　こんな想いから、<br>
                      　姉妹2人で【i-nekka（イーネッカ）】を始めました。<br><br>
                      　縫うのが大好きな妹と、編むのが大好きな姉。<br>
                      『あったらいいな！』と思う”大人の素敵な小物”を、<br>
                      　一つ一つ想いを込めて丁寧に作っています。
                    </p>  
                  </div>
                <?php //endif; ?>
              </div>
              <div id="forExample6">
                <?php //if ( $GB_MOBILE_FLAG ): ?>
                  <div class="forMB">
                    <div class="uline"></div>
                    <p>　人と繋がっていたい！<br>
                      「いいな」と思う気持ちを共有したい！<br><br>                    
                      　こんな想いから姉妹2人で、<br>
                      【i-nekka（イーネッカ）】を始めました。<br><br>
                      　縫うのが大好きな妹と、<br>
                      　編むのが大好きな姉。<br><br>
                      『あったらいいな！』と思う<br>
                      【大人の素敵な小物】を、<br><br>
                      　一つ一つ<br>
                      　想いを込めて丁寧に作っています。
                    </p>  
                  </div>
                <?php //endif; ?>
              </div>

              <div id="forExample2">
                <?php //if ( !$GB_MOBILE_FLAG ): ?>
                  <div class="forPC">
                    <div class="uline"></div>
                    <ul>
                      <li>(1) 季節に応じて汎用的に使える【毛糸の編み物】</li>
                      <li>(2) 日本の伝統手芸である　　　【刺し子】を用いた各種小物</li>
                      <li>(3) 世界中で愛されている　　　【レースの編み物】</li>
                    </ul>
                    <p>
                      　日本の伝統手芸である【刺し子】では「完成形」となった際に、<br>
                      　世界中で愛されている【毛糸・レースの編み物】ではその「織り込みの過程」にて、<br>
                      「和Plus」のエッセンスが少しだけ加えられ良い意味での和洋文化の融合を感じる、<br>
                      　素敵なお品に創りあげて参ります。<br><br>
                      　　　　　　　　　　　　　　　　　　<a href="<?php echo esc_url( home_url('05_inekka') ); ?>">[ ... <i class="fas fa-info colBlue"></i> <i class="fas fa-link extLnkIcon colBlue"></i> ]</a>
                    </p>  
                  </div>
                <?php //endif; ?>
              </div>
              <div id="forExample7">
                <?php //if ( $GB_MOBILE_FLAG ): ?>
                  <div class="forMB">
                    <div class="uline"></div>
                    <ul>
                      <li>(1) 季節に応じて汎用的に使える<br>　　【毛糸の編み物】</li>
                      <li>(2) 日本の伝統手芸である　　　<br>　　【刺し子】による各種小物</li>
                      <li>(3) 世界中で愛されている　　　<br>　　【レースの編み物】</li>
                    </ul>
                    <p>
                      　日本の伝統手芸である【刺し子】では、<br>
                      「完成形」となった際に、<br><br>
                      　世界中で愛されている<br>
                      【毛糸・レースの編み物】では、<br>
                      「織り込みの過程」にて、<br><br>
                      「和Plus」のエッセンスを少しだけ加えて、<br>
                      　良い意味での和洋文化の融合を感じる、<br>
                      　素敵なお品に創りあげて参ります。<br><br>
                      　　　　　　　　　　　　<a href="<?php echo esc_url( home_url('05_inekka') ); ?>">[ ... <i class="fas fa-info colBlue"></i> <i class="fas fa-link extLnkIcon colBlue"></i> ]</a>
                    </p>  
                  </div>
                <?php //endif; ?>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--  -->
      <!-- ブランド詳細説明セクション -->
      <section id="ACestusDtlExp">
        <div class="container">
<!-- 
<div class="areaChk" >000</div>
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
<div class="areaChk15">1500</div>
 -->

          <div class="ACestusBGImg"></div>
          
          <div class="brdDtlMsg">

            <?php //if ( !$GB_MOBILE_FLAG ): ?>
              <div class="forPC">
                <div class="cthCopy" id="cthCopy2">
                  <div class="hrzLine"></div>
                  <h2>Aphrodite Cestus：クロコダイル</h2>
                  <img class="inekkaLogo" src="<?php echo esc_url( get_template_directory_uri().'/WaPlusCfg/Images/ACestus/AC_LOGO-WGWD.png' ) ?>" alt="オリジナル商品販売事業・アフロディーテケストス、ブランドイメージの美しさと品を象徴したロゴの画像">  
                </div>  
              </div>
            <?php //else: ?>
              <div class="forMB">
                <img class="inekkaLogoMB" id="ACestusLogoMB" src="<?php echo esc_url( get_template_directory_uri().'/WaPlusCfg/Images/ACestus/AC_LOGO-WGWD.png' ) ?>" alt="オリジナル商品販売事業・アフロディーテケストス、ブランドイメージの美しさと品を象徴したロゴの画像">
                <div class="cthCopy" id="cthCopy7">
                  <div class="hrzLine"></div>
                  <h2>Aphrodite Cestus：<br>　クロコダイル</h2>
                </div>  
              </div>
            <?php //endif; ?>

            <div class="forExample">
              <div id="forExample3">
                <?php //if ( !$GB_MOBILE_FLAG ): ?>
                  <div class="forPC">
                    <div class="uline"></div>
                    <div class="pdSalesDetail">
                      <p>「海外に有って日本には無い様々な魅力（From oversea）」その一つに、<br>
                      【クロコダイル】が有ります。<br>
                      【クロコダイル】は、<br>
                      　その生態系（絶滅危惧種）から「ワシントン条約」にて厳しく保護され、<br>
                      　取り扱いも制限されて居る為に非常に高価となり、<span class="whiteShadowLetter">一般的にはとても入手し難い品と成って居ります。</span><br><br>
                      　私共「和Plus」では、<br>
                      　現地パートナー様と深くお付き合いをさせて頂く事により、
                      </p>
                      <ul>
                        <li>(1) 食用・薬用として消費される【クロコダイル】の<span class="whiteShadowLetter">原皮を有効活用とし、</span></li>
                        <li>(2) ユニークで魅力的なアイディアを織り込み素敵な<span class="whiteShadowLetter">デザインに仕上げ、</span></li>
                        <li>(3) 出来る限りにお求め頂けやすいお値段にて</li>
                      </ul>
                      <p>
                        　広くお届けできる様に尽力して参ります。<br>
                      </p>
                    </div>
                  </div>
                <?php //endif; ?>
              </div>
              <div id="forExample8">
                <?php //if ( $GB_MOBILE_FLAG ): ?>
                  <div class="forMB">
                    <div class="uline"></div>
                    <div class="pdSalesDetail">
                      <p>「海外に有って日本には無い様々な魅力<br>　　　　　（From oversea）」<br><br>
                        　その一つに、<br>
                        【クロコダイル】が有ります。<br><br>
                        【クロコダイル】は、<br>
                        　その生態系（絶滅危惧種）から<br>
                        「ワシントン条約」にて厳しく保護され、<br>
                        　取り扱いも制限されて居る為に高価となり、<br>
                        　とても入手し難い品と成って居ります。<br><br>
                        　私共「和Plus」では現地パートナー様と、<br>
                        　深くお付き合いをさせて頂く事により、<br>
                      </p>
                      <ul>
                        <li>(1) 食用・薬用として消費される<br>
                          　【クロコダイル】原皮を有効活用し、</li>
                        <li>(2) ユニークで魅力的なアイディアを<br>
                          　　多く織り込み<br>
                          　　素敵なデザインに仕上げ、</li>
                        <li>(3) 出来る限りお求め頂きやすい<br>
                          　　お値段にて、</li>
                      </ul>
                      <p>
                        　広くお届けできる様に尽力して参ります。<br>
                      </p>
                    </div>
                  </div>
                <?php //endif; ?>
              </div>

              <div id="forExample4">
                <?php //if ( !$GB_MOBILE_FLAG ): ?>
                  <div class="forPC">
                    <div class="uline"></div>
                    <div class="pdSalesDetail">
                      <p>
                        　想いを新たにブランド【Aphrodite Cestus】を立上げ、<br>
                        　現地パートナー様と深い意思の疎通を図り、<span class="whiteShadowLetter">お互いの価値観・存在意義を認め合い、</span><br><br>
                        「引き延ばし硬く締まった状態」での製品が<span class="whiteShadowLetter">多い中、私共は最高のお品を求め、</span><br>
                        「手触り良くフワフワ」する究極の感触、<span class="whiteShadowLetter">取って置きの【クロコダイル】製品を、</span><br>
                        　数多く創造して参りたく思っております。<br><br>
                        　これからの【Aphrodite Cestus】にご期待下さい。<br><br>
                        　　　　　　　　　　　　　　　　　　<a href="<?php echo esc_url( home_url('06_acestus') ); ?>">[ ... <i class="fas fa-info colBlue"></i> <i class="fas fa-link extLnkIcon colBlue"></i> ]</a><br>
                      </p>
                    </div>
                  </div>
                <?php //endif; ?>
              </div>
              <div id="forExample9">
                <?php //if ( $GB_MOBILE_FLAG ): ?>
                  <div class="forMB">
                    <div class="uline"></div>
                    <div class="pdSalesDetail">
                      <p>
                        　想いを新たにブランド<br>
                        【Aphrodite Cestus】を立上げ、<br><br>
                        　現地パートナー様と深い意思の疎通を図り、<br>
                        　お互いの価値観・存在意義を認め合い、<br><br>
                        「引き延ばし硬く締まった」お品ではなく、<br>
                        「手触り良くフワフワ」する究極の感触、<br><br>
                        　とっておきの【クロコダイル】製品を、<br>
                        　数多く創造していきたいと思っております。<br><br>
                        【Aphrodite Cestus】にご期待下さい。<br><br>
                        　　　　　　　　　　　　<a href="<?php echo esc_url( home_url('06_acestus') ); ?>">[ ... <i class="fas fa-info colBlue"></i> <i class="fas fa-link extLnkIcon colBlue"></i> ]</a><br>
                      </p>
                    </div>      
                  </div>
                <?php //endif; ?>
              </div>

            </div>
          </div>
        </div>
      </section>

<!-- **************************************************************** -->
<!-- **************************************************************** -->
<!-- **************************************************************** -->