<?php

  // 
  // *********************************************
  // *********************************************
  // ■ カテゴリ別、年月日・アーカイブリスト用クエリの作成
  //【参考】「https://ateitexe.com/wordpress-category-archives/」
  // *********************************************
  // *********************************************
  // 》機能：クエリに因るアーカイブをカテゴリで絞り込む設定
  //       「get_posts」する前
  //       「pre_get_posts」にてアクションフックを設定
  // 
  // 【cat_slug】の説明
  // https://sample.com/?cat_slug=XXX
  // https://sample.com/2021/?cat_slug=XXX
  // https://sample.com/2021/01/?cat_slug=XXX
  // *********************************************
  function CatArchives( $query ) {
  
    // 
    //管理画面及びメインクエリ以外に影響させない。
    if ( is_admin() || !$query->is_main_query() )  { return; }

    // 
    // アーカイブ或いは、ブログ投稿のインデックスリスト表示のページ（トップページ・固定ページ）
    // if ( $query->is_archive() || $query->is_home() ) {
    if ( $query->is_archive() ) {

      // 
      // 【filter_input ( 型 , 変数名, フィルタ, オプション)】
      //  指定された名前のスーパーグローバル変数をオプションでフィルタリングし、
      //  値があれば値を返し、なければ「NULL」を返す
      $cat_slug = (string)filter_input(INPUT_GET, 'cat_slug'); //カテゴリスラッグを取得
      
        // $cat_slug = "news";       // for DEBUG!
      if ( $cat_slug != null )  {
        // echo "　　　?「\$cat_slug」☛【" . $cat_slug . "】<br>";   // for DEBUG !!!!!
        // echo "　　　?「\$cat_id」  ☛【" . get_category_by_slug( $cat_slug ) -> cat_ID . "】<br>";   // for DEBUG !!!!!
  
             $cat_id = get_category_by_slug( $cat_slug ) -> cat_ID; //スラッグからカテゴリIDを取得
        if ( $cat_id != 0 ) { //カテゴリIDがあれば
          $query->set( 'cat', $cat_id ); //指定カテゴリで絞り込む
          $query->set( 'orderby', 'date' ); //日付降順で並び替え
        }  
      }

      // echo " <<<<< Exit- CatArchives( 1 ) <<<<< <br><br>";
      return;
    }
    // echo " <<<<< Exit- CatArchives( 2 ) <<<<< <br><br>";
  }
  add_action( 'pre_get_posts', 'CatArchives' );

  // *********************************************
  // カテゴリ・年で絞った投稿数を取得
  // *********************************************
  function get_year_cat_archives_num( $cat_slug, $year ) {
    // echo "<br> >>>>> Enter get_year_cat_archive_num( " . $cat_slug . $year . " ) >>>>> <br>";    // for DEBUG !!!!!

    $cat_id = get_category_by_slug  ( $cat_slug )->cat_ID;

    //
    // 【$wpdb】 
    // データベースとのやりとりに使用される一連の関数が格納された、Wordpressのクラス
    global $wpdb;

    // 
    // 【$wpdb->get_var()】 
    //  》機能：データベースから変数を一つ返し、クエリの結果はすべてキャッシュされ後で使う事が可能
    //  》引数：SQL
    $cnt = $wpdb->get_var( $wpdb->prepare( "
      SELECT count(DISTINCT post.ID)
      FROM       $wpdb->posts AS post
      INNER JOIN $wpdb->term_relationships AS tm
      ON         post.ID = tm.object_id
      WHERE      post.post_status = 'publish'
             AND post.post_type = 'post'
             AND tm.term_taxonomy_id = %d
             AND DATE_FORMAT(post.post_date, '%Y') = '%s'
    ", $cat_id, $year ) );
    // echo " <<<<< Exit- get_year_cat_archive_num( " . $cnt . " ) <<<<< <br><br>";   // for DEBUG !!!!!

    return $cnt;
  }

  // *********************************************
  // カテゴリ・年・月で絞った投稿数を取得
  // *********************************************
  function get_month_cat_archives_num( $cat_slug, $year, $month ) {
    // echo "<br> >>>>> Enter get_month_cat_archive_num( " . $cat_slug . $year . $month . " ) >>>>> <br>";    // for DEBUG !!!!!

    $cat_id = get_category_by_slug( $cat_slug ) -> cat_ID;


    //
    // 【$wpdb】 
    // データベースとのやりとりに使用される一連の関数が格納された、Wordpressのクラス
    global $wpdb;

    // 
    // 【$wpdb->get_var()】 
    //  》機能：データベースから変数を一つ返し、クエリの結果はすべてキャッシュされ後で使う事が可能
    //  》引数：SQL
    $cnt = $wpdb->get_var( $wpdb->prepare("
      SELECT count(DISTINCT post.ID)
      FROM       $wpdb->posts AS post
      INNER JOIN $wpdb->term_relationships AS tm
      ON         post.ID = tm.object_id
      WHERE      post.post_status    = 'publish'
             AND post.post_type      = 'post'
             AND tm.term_taxonomy_id = %d
             AND DATE_FORMAT(post.post_date, '%Y%m') = '%s'
    ", $cat_id, $year.str_pad($month, 2, 0, STR_PAD_LEFT) ) );

    // echo " <<<<< Exit- get_month_cat_archive_num( " . $cnt . " ) <<<<< <br><br>";   // for DEBUG !!!!!
    return $cnt;
  }

  // *********************************************
  // 指定カテゴリの一番古い記事の投稿年を取得
  // *********************************************
  function   get_cat_oldest_year ( $cat_slug ) {
    // echo "<br> >>>>> Enter get_cat_oldest_year( " . $cat_slug . " ) >>>>> <br>";    // for DEBUG !!!!!
    $cat_id = get_category_by_slug( $cat_slug )->cat_ID;

    //
    // 【$wpdb】 
    // データベースとのやりとりに使用される一連の関数が格納された、Wordpressのクラス
    global $wpdb;

    // 
    // 【$wpdb->get_var()】 
    //  》機能：データベースから変数を一つ返し、クエリの結果はすべてキャッシュされ後で使う事が可能
    //  》引数：SQL
    $oldest_date = $wpdb->get_var( $wpdb->prepare("
      SELECT post.post_date
      FROM       $wpdb->posts AS post
      INNER JOIN $wpdb->term_relationships AS tm
      ON         post.ID = tm.object_id
      WHERE      post.post_status    = 'publish'
             AND post.post_type      = 'post'
             AND tm.term_taxonomy_id = %d
      ORDER BY   post.post_date ASC LIMIT 1
    " , $cat_id ) );
    // echo " <<<<< Exit- get_cat_oldest_year( " . $oldest_date . " ) <<<<< <br><br>";   // for DEBUG !!!!!

    return  idate('Y', strtotime($oldest_date) );
  }
  // *********************************************
  // *********************************************
  // *********************************************

  /****************************************
   指定カテゴリー、投稿数の取得関数
  *****************************************/
  function chkCategoryCount( $catName )  {
    $cateCount  = 0;
    $categories = get_categories( array( 'hide_empty' => false ) );// 記事数が0のカテゴリーも取得する
    foreach ($categories as $category):
      if ( $category->name == $catName )  {
        $cateCount = $category->category_count;
        // echo $catName . "の記事数は" . $cateCount . "です。";
        break;
      }
    endforeach;
    return $cateCount;
  }

  /****************************************
   カテゴリー一覧、ページネーション表示関数
  *****************************************/
  function categoryPagination( $end_size = 1, $mid_size = 2, $prev_next = true )  {
    // 
    // ブログの投稿やページのリクエストを扱うWordpressのクラス
    // 【参考】「https://ecco.co.jp/blog/wp_query/」
    global $wp_query;
    // 
    // ■ wordpress提供のページネーション表示関数
    // 【参考】「https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/paginate_links」
    //  【paginate_links()】
    //   》機能：アーカイブされた投稿ページのページ番号付きのリンクを取得
    //   》引数：書式を配列にて設定
    $page_format = paginate_links (
      array(
        // 現在のページ番号
        'current'   => max( 1, get_query_var( 'paged' ) ),
        // 全体のページ数
        'total'     => $wp_query->max_num_pages,
        // 戻り値の形式「array」は、表示の完全コントロールの為にページ送りのリンクを配列に入れて返す
        'type'      => 'array',
        // 前のページへのリンクとして表示する文字列
        'prev_text' => '《',//前へのリンク文言
        // 次のページへのリンクとして表示する文字列
        'next_text' => '》',//次へのリンク文言
        // ページ番号のリストの両端（最初と最後）に幾つのページ数字を表示するか
        'end_size'  => $end_size,//初期値：１  両端のﾍﾟｰｼﾞﾘﾝｸの数
        // 現在のページ番号の両側に幾つのページ数字を表示するか
        'mid_size'  => $mid_size,//初期値：２  現在のﾍﾟｰｼﾞの両端にいくつページリンクを表示するか（現在のページは含まない）
        // ページ番号リストの両端に「前へ」「次へ」のリンクを含むか
        'prev_next' => $prev_next,//初期値：true  リストの中に「前へ」「次へ」のリンクを含むか
      )
    );

    $code = '';
    if( is_array( $page_format ) )  {

      // 
      // ■ wordpress提供のメインクエリの変数を取得できる関数
      //  【get_query_var()】
      //   》機能：「paged」設定した場合、現在のページ番号を取得
      //   》引数：取得対象の変数種別（取得する変数キー）を指定
      $paged = get_query_var( 'paged' ) == 0 ? 1 : get_query_var( 'paged' );
      $code .= '<div class="pagination">'.PHP_EOL;
      $code .= '<ul>'.PHP_EOL;
      foreach ( $page_format as $page ) {
        $code .= '<li>'.$page.'</li>'.PHP_EOL;
      }
      $code .= '</ul>'.PHP_EOL;
      $code .= '</div>'.PHP_EOL;
      $code .= '<br><div class="pagination-total">'.$paged.'/'.$wp_query->max_num_pages.' </div>'.PHP_EOL;
    }
    wp_reset_query();
    return $code;
  }

?>