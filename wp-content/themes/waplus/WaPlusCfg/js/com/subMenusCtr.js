
// 
// ****************************************************************************
// ****************************************************************************
// ****************************************************************************
// ****************************************************************************
// JavaScript 共通関数群
// １．subMenusDispCtr()       ：サブメニュー表示制御
// ２．subMENUDispErase( n )     ：サブメニューダイアログ、全消去／個別表示
// ３．getPosSubM_SubMnuErase()：サブメニュー本体・消去領域、位置取得関数
// ****************************************************************************
// ****************************************************************************
// ******************************************************************
// 【関数名】subMenusDispCtr()
//  機能：ナビゲーションメニュー内サブメニュー表示制御
//  引数：無し
//        mnuKind：ナビゲーションメニュー表示中ページ種別
//          １：事業理念ページ　　・HOMEメニュー配下サブメニュー無し
//          ０：事業理念ページ以外・HOMEメニュー配下サブメニュー有り（基本形式）
// ******************************************************************
// ******************************************************************
function subMenusDispCtr( mnuKind, navInterElms ) {

  // console.log( " >>>>> Enter subMenusCtr() " );
  // 
  // mnuKind：ナビゲーションメニュー表示中ページ種別
  //  １：事業理念ページ　　・HOMEメニュー配下サブメニュー無し
  //  ０：事業理念ページ以外・HOMEメニュー配下サブメニュー有り（基本形式）
  if ( mnuKind != 1 )  {
    // 
    // *****************************************************
    // *****************************************************
    // ヘッダー・ナビゲーションメニュー「Philosophy」Hover イベント認識
    // *****************************************************
    // ☛ サブメニュー表示
    document.getElementById( 'philoMenu'    ).addEventListener( 'mouseover', function(){
      subMENUDispErase( mnuKind, 1 );
    });
    // // ☛ サブメニュー消去
    document.getElementById( 'philoMenu'    ).addEventListener( 'click', function(){
      subMENUDispErase( mnuKind, 0 );
    });  
    document.getElementById( 'philoSubMenu' ).addEventListener( 'mouseleave', function(){
      subMENUDispErase( mnuKind, 0 );
    });
  }
  document.getElementById( 'mainArea'     ).addEventListener( 'mouseover', function(){
    // console.log( "\n MOUSE On【mainArea】TAG" );
    subMENUDispErase( mnuKind, 0 );
  });

  // 
  // *****************************************************
  // *****************************************************
  // ヘッダー・ナビゲーションメニュー「Business」Hover イベント認識
  // *****************************************************
  // ☛ サブメニュー表示
  document.getElementById  ( 'bizMenu'    ).addEventListener( 'mouseover', function(){
    subMENUDispErase( mnuKind, 2 );
  });
  // ☛ サブメニュー消去
  document.getElementById  ( 'bizMenu'    ).addEventListener( 'click', function(){
    subMENUDispErase( mnuKind, 0 );
  });
  document.getElementById  ( 'bizSubMenu' ).addEventListener( 'mouseleave', function(){
    subMENUDispErase( mnuKind, 0 );
  });

  // 
  // *****************************************************
  // *****************************************************
  // ヘッダー・ナビゲーションメニュー「avtivity」Hover イベント認識
  // *****************************************************
  // ☛ サブメニュー表示
  document.getElementById  ( 'actMenu'         ).addEventListener( 'mouseover', function(){
    subMENUDispErase( mnuKind, 3 );
  });
  // ☛ サブメニュー消去
  document.getElementById( 'actMenu'         ).addEventListener( 'click', function(){
    subMENUDispErase( mnuKind, 0 );
  });
  document.getElementById  ( 'activitySubMenu' ).addEventListener( 'mouseleave', function(){
    subMENUDispErase( mnuKind, 0 );
  });

  // 
  // *****************************************************
  // *****************************************************
  // ヘッダー・ナビゲーションメニュー「aboutUs」Hover イベント認識
  // *****************************************************
  // ☛ サブメニュー表示
  document.getElementById  ( 'abtMenu'        ).addEventListener( 'mouseover', function(){
    subMENUDispErase( mnuKind, 4 );
  });
  // ☛ サブメニュー消去
  document.getElementById  ( 'abtMenu'        ).addEventListener( 'click', function(){
    subMENUDispErase( mnuKind, 0 );
  });
  document.getElementById  ( 'aboutUSSubMenu' ).addEventListener( 'mouseleave', function(){
    subMENUDispErase( mnuKind, 0 );
  });

  // 
  // *****************************************************
  // *****************************************************
  // ヘッダー・ナビゲーションメニュー「News」Hover イベント認識
  // *****************************************************
  // ☛ サブメニュー表示
  document.getElementById  ( 'nwsMenu'     ).addEventListener( 'mouseover', function(){
    subMENUDispErase( mnuKind, 5 );
  });
  // ☛ サブメニュー消去
  document.getElementById  ( 'nwsMenu'     ).addEventListener( 'click', function(){
    subMENUDispErase( mnuKind, 0 );
  });
  document.getElementById  ( 'newsSubMenu' ).addEventListener( 'mouseleave', function(){
    subMENUDispErase( mnuKind, 0 );
  });

  // 
  // *****************************************************
  // *****************************************************
  // ヘッダー・ナビゲーションメニュー「Contact」Hover イベント認識
  // *****************************************************
  // ☛ サブメニュー全消去
  document.getElementById( 'contctMenu' ).addEventListener( 'mouseover', function(){
    subMENUDispErase( mnuKind, 0 );
  });

  // 
  // *****************************************************
  // ナビメニュー上部領域にて、サブメニュー消去
  // *****************************************************
  document.getElementById( 'subMnuErase' ).addEventListener( 'mouseover', function(){
    // console.log( " ! recognize UPPER ERASE AREA." );
    subMENUDispErase( mnuKind, 0 );
  });
  // 
  // *****************************************************
  // ナビメニュー各項目間領域にて、サブメニュー消去
  // *****************************************************
  // console.log( ` サブメニュー数【${navInterElms.length}】` );

  navInterElms.forEach( function( navInterElm ) {
    navInterElm.addEventListener( 'mouseover', function() {
      // console.log( " ! recognize INTERVAL of nav-MENU." );
      subMENUDispErase( mnuKind, 0 );  
    });
  })

}

// 
// ********************************************
// ********************************************
// ヘッダー部「ナビゲーションメニュー・要素名」定義
// ********************************************
let menuElements = [
  "philoMenu",
  "bizMenu",
  "actMenu",
  "abtMenu",
  "nwsMenu"
];
// ヘッダー部「サブナビメニュー・要素名」定義
// ********************************************
let subMenuElements = [
  "philoSubMenu",
  "bizSubMenu",
  "activitySubMenu",
  "aboutUSSubMenu",
  "newsSubMenu"
];  
// ********************************************
// ********************************************

// ******************************************************************
// ******************************************************************
// ******************************************************************
// 【関数名】subMENUDispErase( n )
//  機能：サブメニューダイアログ、全消去
//  引数：1～ / 表示対象サブメニュー表示位置番号（１始まり）
//  　　　0　 / 全サブメニュー消去     
// ******************************************************************
// ******************************************************************
function subMENUDispErase( mnuKind, ifc )  {
  // console.log( ` >>>>> Start subMENUDispErase( ${ifc} ) >>>>>` );
  // 
  // サブメニュー全消去
  let is = mnuKind;
  for( let i=is ; i<5 ; i++ )  {
    document.getElementById( subMenuElements[i] ).style.opacity = "0";
    document.getElementById( subMenuElements[i] ).style.visibility = "hidden";
    document.getElementById( subMenuElements[i] ).style.zIndex  = "0";  
  }
  // 
  // 指定サブメニュー表示
  if ( ifc && ( ifc >= is && ifc < 6 ) )  {
    document.getElementById( subMenuElements[ifc-1] ).style.opacity = "1";
    document.getElementById( subMenuElements[ifc-1] ).style.visibility = "visible";
    document.getElementById( subMenuElements[ifc-1] ).style.zIndex  = "2";  
  }
  // console.log( ` <<<<< Exit  subMENUDispErase(-) <<<<<` );
}

// ******************************************************************
// ******************************************************************
// ******************************************************************
// 【関数名】getPosSubM_SubMnuErase()
//  機能：サブメニューの表示位置取得
//  　　　個別サブメニューダイアログ、表示位置、それぞれを取得
//  　　「document.getElementById(～).style.left」の設定
//  引数：無し
// ******************************************************************
// ******************************************************************
function getPosSubM_SubMnuErase( mnuKind ) {

  // console.log( "\n\n >>>>> Enter getPosSubM_SubMnuErase() >>>>>" );

  // 
  // *****************************************************
  // *****************************************************
  // サブメニュー消去領域位置（ナビメニュー上部）を、ナビゲーションメニュー位置から設定
  // *****************************************************
  // *****************************************************
  let navArea   = document.getElementById( 'navigation' );
  let subMErase =  navArea.getBoundingClientRect();
  // サブメニュー表示位置「CSS」設定
  document.getElementById( 'subMnuErase' ).style.left  = String(subMErase.left)+"px";
  document.getElementById( 'subMnuErase' ).style.width = String(navArea.clientWidth)+"px";

  //
  // 各種サブメニュー表示位置の設定
  // *****************************************************
  let tagtMnu;
  let sbmnPos;
  let is = mnuKind;
  for( let i=is ; i<5 ; i++ )  {
    // 
    //「サブメニュー」表示位置を「ヘッダー部・ナビメニュー」位置から取得
    tagtMnu = document.getElementById( menuElements[i] );
    sbmnPos =  tagtMnu.getBoundingClientRect();
    // サブメニュー表示位置「CSS」設定
    document.getElementById( subMenuElements[i] ).style.left = String((Math.round(sbmnPos.left)-20))+"px";
  }

  // console.log( " <<<<< Exit  getPosSubM_SubMnuErase() <<<<<" );

}

// 
// ********************************************************
// ********************************************************
// 
// 【難読化】JavaScript 難読化ツール利用
//    参照　：https://uxbear.me/obfuscator/
//    ツール：https://obfuscator.io/
// 
// ********************************************************
// ********************************************************
// 