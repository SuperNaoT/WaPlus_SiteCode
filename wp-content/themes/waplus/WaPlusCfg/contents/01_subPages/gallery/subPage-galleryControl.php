<?php

        //  $GB_menuPos = $args[ 'GB_menuPos'     ];
  global $GB_menuPos;
  global $GB_MOBILE_FLAG;

  // 
  // ギャラリー表示用画像設定ファイルの取込み
  if ( $GB_menuPos == 5 )  {
    require( get_template_directory() . "/WaPlusCfg/contents/01_subPages/gallery/galleryImgDef-iNekka.php" );
  } else  {
    require( get_template_directory() . "/WaPlusCfg/contents/01_subPages/gallery/galleryImgDef-ACestus.php" );
  }

?>
          <h3>■ 表示カテゴリー</h3>

          <ul class="sort-btn">
            <?php if ( $GB_menuPos == 5 ): ?>
              <li class="btnchangeline btn eachBtn all active">全て</li>
              <li class="btnchangeline btn eachBtn blue" >ニット編み物</li>
              <li class="btnchangeline btn eachBtn red"  >レース編み物</li>
              <li class="btnchangeline btn eachBtn green">刺し子・他</li>
            <?php else:  ?>
              <li class="btnchangeline btn eachBtn all active">BangKok</li>
              <li class="btnchangeline btn eachBtn blue" >Temple</li>
              <li class="btnchangeline btn eachBtn red"  >Town</li>
              <li class="btnchangeline btn eachBtn green">Restaurant</li>
            <?php endif; ?>
          </ul>

          <!-- お顔が見える様に、スタイル設定 -->
          <div class="dline"></div>

          <div class="grid">
            <?php

              $endJ = $imageMaxCount > $galleryStyleCount ? $imageMaxCount*3 : $galleryStyleCount*3;

              for( $i =0, $jIdx=0,
                   $rC=0, $bC=0, $gC=0 ; $i<$imageMaxCount ; $i++ ) {
                  
                // 
                // ページ内ランダム配置スタイルマッチングループ
                for( $j=$jIdx ; $j<$endJ ; $j++ )  {
                     $setFlg = 0;
                  // 
                  // 画像ファイル名生成
                  switch( $galleryBoxColor[$j%$galleryStyleCount] ) {
                    case "red":
                      if ( $rC<$redMaxCount )  {
                        $imgFileName = $redImgFName[$rC];
                                                    $rC++;
                                                    $setFlg = 1;

                        $gBC = $galleryBoxColor[$j%$galleryStyleCount];
                        $gBS = $galleryBoxStyle[$j%$galleryStyleCount];      
                      }
                      break;
                    case "blue":
                      if ( $bC<$blueMaxCount )  {
                        $imgFileName = $blueImgFName[$bC];
                                                    $bC++;
                                                    $setFlg = 1;

                        $gBC = $galleryBoxColor[$j%$galleryStyleCount];
                        $gBS = $galleryBoxStyle[$j%$galleryStyleCount];      
                      }
                      break;
                    case "green";
                      if ( $gC<$greenMaxCount )  {
                        $imgFileName = $greenImgFName[$gC];
                                                      $gC++;
                                                      $setFlg = 1;

                        $gBC = $galleryBoxColor[$j%$galleryStyleCount];
                        $gBS = $galleryBoxStyle[$j%$galleryStyleCount];      
                      }
                    default:
                  }

                  $jIdx = $j + 1;
                  if ( $setFlg == 1 )  {
                    break;
                  }
                }
            ?>

            <?php if ( $setFlg == 1 ): ?>
                <div class="item all <?php echo $gBC; echo $gBS; ?>">
                  <a data-lightbox= "<?php echo $gBC ?>" href="<?php echo esc_url( $imgFileName ) ?>">
                    <div class="item__image">
                      <div class="-image" style="background-image: url( '<?php echo esc_url( $imgFileName ); ?>' )"></div>
                    </div>
                  </a>
                </div>
            <?php endif; ?>

            <?php
              }       // for
            ?>
          </div>

