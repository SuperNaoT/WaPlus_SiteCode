<?php

  //  $GB_menuPos = $args[ 'GB_menuPos'     ];
  global $GB_menuPos;
  global $GB_MOBILE_FLAG;
  
  // 
  // ギャラリー表示用画像設定ファイルの取込み
  if ( $GB_menuPos == 5 )  {
    include( get_template_directory() . "/WaPlusCfg/contents/01_subPages/gallery/galleryImgDef-iNekka.php" );
  } else  {
    include( get_template_directory() . "/WaPlusCfg/contents/01_subPages/gallery/galleryImgDef-ACestus.php" );
  }

?>
          <h2>■ 表示カテゴリー</h2>

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

          <!-- <script type="text/javascript">
          if ( document.querySelector( 'body' ).classList.contains('-all'  ) == true )  {
          console.log( "\n\n\n 画像「-all」選択された!　\n\n\n" );
          } else  {
          console.log( "\n\n\n 画像「-red/-green/-blue」選択された!　\n\n\n" );
          }
          </script> -->

          <div class="grid">
            <?php
              // echo " >>>>> subPage-galleryControl [ \$imageMaxCount ] [ " . $imageMaxCount . " ]" ;   // for DEBUG !!!
              // echo " >>>>> subPage-galleryControl [ \$redMaxCount   ] [ " . $redMaxCount . " ]" ;   // for DEBUG !!!

              $endJ = $imageMaxCount > $galleryStyleCount ? $imageMaxCount*3 : $galleryStyleCount*3;

              for( $i =0, $jIdx=0,
                   $rC=0, $bC=0, $gC=0 ; $i<$imageMaxCount ; $i++ ) {
                  
                // 
                // ページ内ランダム配置スタイルマッチングループ
                for( $j=$jIdx ; $j<$endJ ; $j++ )  {
                  $setFlg = 0;
                  // ***************************************************************
                  // ***************************************************************
                  // 
                  // 画像ファイル名生成
                  switch( $galleryBoxColor[$j%$galleryStyleCount] ) {
                    case "red":
                      // $rP = 1;
                      if ( $rC<$redMaxCount )  {
                        $imgFileName = $redImgFName[$rC];
                                                    $rC++;
                                                    $setFlg = 1;

                        $gBC = $galleryBoxColor[$j%$galleryStyleCount];
                        $gBS = $galleryBoxStyle[$j%$galleryStyleCount];      

                      //   echo "<br> (1) RED \$rC ☛ [ ".$rC." ] \$j ☛ [ ".$j." ]<br>";
                      // } else  {
                      //   echo " RED through!!! \$j ☛ [ ".$j." ]";
                      }
                      break;
                      // echo `!!! RED  ` . $imgFileName;   // for DEBUG !!!
                    case "blue":
                      // $bP = 1;
                      if ( $bC<$blueMaxCount )  {
                        $imgFileName = $blueImgFName[$bC];
                                                    $bC++;
                                                    $setFlg = 1;

                        $gBC = $galleryBoxColor[$j%$galleryStyleCount];
                        $gBS = $galleryBoxStyle[$j%$galleryStyleCount];      
                      //   echo "<br> (1) 　　BLUE \$bC ☛ [ ".$bC." ] \$j ☛ [ ".$j." ]<br>";
                      // } else  {
                      //   echo " BLUE through!!! \$j ☛ [ ".$j." ]";
                      }
                      break;
                      // echo `!!! BLUE ` . $imgFileName;   // for DEBUG !!!
                    case "green";
                      // $gP = 1;
                      if ( $gC<$greenMaxCount )  {
                        $imgFileName = $greenImgFName[$gC];
                                                      $gC++;
                                                      $setFlg = 1;

                        $gBC = $galleryBoxColor[$j%$galleryStyleCount];
                        $gBS = $galleryBoxStyle[$j%$galleryStyleCount];      
                      //   echo "<br> (1) 　　　　GREEN \$gC ☛ [ ".$gC." ] \$j ☛ [ ".$j." ]<br>";
                      // } else  {
                      //   echo " GREEN through!!! \$j ☛ [ ".$j." ]";
                      }
                      // echo `!!! BLUE ` . $imgFileName;   // for DEBUG !!!
                    default:
                  }

                  // ***************************************************************
                  // ***************************************************************
                  $jIdx = $j + 1;
                  if ( $setFlg == 1 )  {
                    // echo " > \$jIdx[ ".$jIdx." ]<br>";
                    break;
                  }
                }
            ?>

            <?php // if ( $setFlg == 1 ): echo " \$gBC [ ".$gBC. " ]<br>"; ?>
            <?php if ( $setFlg == 1 ): ?>
                <div class="item all <?php echo $gBC; echo $gBS; ?>">
                  <a data-lightbox= "<?php echo $gBC ?>" href="<?php echo $imgFileName ?>">
                    <div class="item__image">
                      <div class="-image" style="background-image: url( '<?php echo $imgFileName; ?>' )"></div>
                    </div>
                  </a>
                </div>
            <? endif; ?>

            <?php
              }       // for
            ?>
          </div>

