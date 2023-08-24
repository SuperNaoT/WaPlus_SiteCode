<?php

  // 
  // ギャラリー向け、【毛糸ニット商品】【レースニット商品】【刺し子商品】全画像数の登録
  $imageMaxCount    = 43;      // 13 + 14 + 16

  // ギャラリー内表示【毛糸ニット商品】画像ファイル名登録
  $blueMaxCount      = 13;       // 画像ファイル数
  $blueImgPath       = get_template_directory_uri() . "/WaPlusCfg/Images/Gallery/00_iNekka/00_yarnKnitting/";
  $blueImgFName [0]  = $blueImgPath . "yarnK (1).jpg";
  $blueImgFName [1]  = $blueImgPath . "yarnK (2).jpg";
  $blueImgFName [2]  = $blueImgPath . "yarnK (3).jpg";
  $blueImgFName [3]  = $blueImgPath . "yarnK (4).jpg";
  $blueImgFName [4]  = $blueImgPath . "yarnK (5).jpg";
  $blueImgFName [5]  = $blueImgPath . "yarnK (6).jpg";
  $blueImgFName [6]  = $blueImgPath . "yarnK (7).jpg";
  $blueImgFName [7]  = $blueImgPath . "yarnK (8).jpg";
  $blueImgFName [8]  = $blueImgPath . "yarnK (9).jpg";
  $blueImgFName [9]  = $blueImgPath . "yarnK (10).jpg";

  $blueImgFName [10] = $blueImgPath . "yarnK (11).jpg";
  $blueImgFName [11] = $blueImgPath . "yarnK (12).jpg";
  $blueImgFName [12] = $blueImgPath . "yarnK (13).jpg";

  // ギャラリー内表示【レースニット商品】画像ファイル名登録
  $redMaxCount      = 14;        // 画像ファイル数
  $redImgPath       = get_template_directory_uri() . "/WaPlusCfg/Images/Gallery/00_iNekka/01_laceKnitting/";
  $redImgFName [0]  = $redImgPath . "laceK (1).jpg";
  $redImgFName [1]  = $redImgPath . "laceK (2).jpg";
  $redImgFName [2]  = $redImgPath . "laceK (3).jpg";
  $redImgFName [3]  = $redImgPath . "laceK (4).jpg";
  $redImgFName [4]  = $redImgPath . "laceK (5).jpg";
  $redImgFName [5]  = $redImgPath . "laceK (6).jpg";
  $redImgFName [6]  = $redImgPath . "laceK (7).jpg";
  $redImgFName [7]  = $redImgPath . "laceK (8).jpg";
  $redImgFName [8]  = $redImgPath . "laceK (9).jpg";
  $redImgFName [9]  = $redImgPath . "laceK (10).jpg";

  $redImgFName [10] = $redImgPath . "laceK (11).jpg";
  $redImgFName [11] = $redImgPath . "laceK (12).jpg";
  $redImgFName [12] = $redImgPath . "laceK (13).jpg";
  $redImgFName [13] = $redImgPath . "laceK (14).jpg";

  // ギャラリー内表示【刺し子商品】画像ファイル名登録
  $greenImgPath       = get_template_directory_uri() . "/WaPlusCfg/Images/Gallery/00_iNekka/02_sashiko/";
  $greenMaxCount      = 16;
  $greenImgFName [0]  = $greenImgPath . "sashikoK (1).jpg";
  $greenImgFName [1]  = $greenImgPath . "sashikoK (2).jpg";
  $greenImgFName [2]  = $greenImgPath . "sashikoK (3).jpg";
  $greenImgFName [3]  = $greenImgPath . "sashikoK (4).jpg";
  $greenImgFName [4]  = $greenImgPath . "sashikoK (5).jpg";
  $greenImgFName [5]  = $greenImgPath . "sashikoK (6).jpg";
  $greenImgFName [6]  = $greenImgPath . "sashikoK (7).jpg";
  $greenImgFName [7]  = $greenImgPath . "sashikoK (8).jpg";
  $greenImgFName [8]  = $greenImgPath . "sashikoK (9).jpg";
  $greenImgFName [9]  = $greenImgPath . "sashikoK (10).jpg";

  $greenImgFName [10] = $greenImgPath . "sashikoK (11).jpg";
  $greenImgFName [11] = $greenImgPath . "sashikoK (12).jpg";
  $greenImgFName [12] = $greenImgPath . "sashikoK (13).jpg";
  $greenImgFName [13] = $greenImgPath . "sashikoK (14).jpg";
  $greenImgFName [14] = $greenImgPath . "sashikoK (15).jpg";
  $greenImgFName [15] = $greenImgPath . "sashikoK (16).jpg";


  // 
  // ギャラリー内サムネイル個別画像の形状ランダム定義
  // ★ 定義数
  $galleryStyleCount  = 30;

  $galleryBoxStyle[0] = " -w2 -h2";
  $galleryBoxStyle[1] = " -w2";
  $galleryBoxStyle[2] = " -w2";
  $galleryBoxStyle[3] = " -w2 -h2";
  $galleryBoxStyle[4] = " ";
  $galleryBoxStyle[5] = " ";
  $galleryBoxStyle[6] = " -h2";
  $galleryBoxStyle[7] = " -h2";
  $galleryBoxStyle[8] = " -w2";
  $galleryBoxStyle[9] = " -w2 -h2";

  $galleryBoxStyle[10] = " ";
  $galleryBoxStyle[11] = " -h2";
  $galleryBoxStyle[12] = " -w2";
  $galleryBoxStyle[13] = " -w2";
  $galleryBoxStyle[14] = " ";
  $galleryBoxStyle[15] = " -w2";
  $galleryBoxStyle[16] = " ";
  $galleryBoxStyle[17] = " -w2";
  $galleryBoxStyle[18] = " -w2";
  $galleryBoxStyle[19] = " ";

  $galleryBoxStyle[20] = " ";
  $galleryBoxStyle[21] = " -h2";
  $galleryBoxStyle[22] = " -w2";
  $galleryBoxStyle[23] = " -w2";
  $galleryBoxStyle[24] = " ";
  $galleryBoxStyle[25] = " ";
  $galleryBoxStyle[26] = " ";
  $galleryBoxStyle[27] = " -w2";
  $galleryBoxStyle[28] = " -w2";
  $galleryBoxStyle[29] = " ";

  // 
  // ギャラリー内サムネイル個別画像の表示種別ランダム定義
  $galleryBoxColor[0] = "blue";
  $galleryBoxColor[1] = "red";
  $galleryBoxColor[2] = "green";
  $galleryBoxColor[3] = "red";
  $galleryBoxColor[4] = "red";
  $galleryBoxColor[5] = "blue";
  $galleryBoxColor[6] = "red";
  $galleryBoxColor[7] = "green";
  $galleryBoxColor[8] = "green";
  $galleryBoxColor[9] = "blue";

  $galleryBoxColor[10] = "green";
  $galleryBoxColor[11] = "red";
  $galleryBoxColor[12] = "blue";
  $galleryBoxColor[13] = "blue";
  $galleryBoxColor[14] = "green";
  $galleryBoxColor[15] = "red";
  $galleryBoxColor[16] = "green";
  $galleryBoxColor[17] = "green";
  $galleryBoxColor[18] = "blue";
  $galleryBoxColor[19] = "blue";

  $galleryBoxColor[20] = "green";
  $galleryBoxColor[21] = "red";
  $galleryBoxColor[22] = "blue";
  $galleryBoxColor[23] = "blue";
  $galleryBoxColor[24] = "green";
  $galleryBoxColor[25] = "red";
  $galleryBoxColor[26] = "blue";
  $galleryBoxColor[27] = "green";
  $galleryBoxColor[28] = "red";
  $galleryBoxColor[29] = "blue";
?>

