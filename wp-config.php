<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * データベース設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** データベース設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp_waplusdev' );

/** データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** データベースのパスワード */
define( 'DB_PASSWORD', 'vortex21' );

/** データベースのホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'k U!;A;=nDisz6,},}Z`8R~Z>qNJs3]MGe]1+<1_>lrYe~I+W{C0q+t?8(,HO]?@' );
define( 'SECURE_AUTH_KEY',  'M/JdB+)dsJk]j%+=[1NV^:O<<J|ReI,84BAPOP6eZl#%`iCJ$31yuk)=Z<?<B)%x' );
define( 'LOGGED_IN_KEY',    'tc6?58Gp)U44XT(Q0*QI+SaxU(~96/6&^gV;~ XO:kt/G)~(&2In4k_xfjnFKH}%' );
define( 'NONCE_KEY',        '>Lu>`}=3kA`Y$>l![_pgyQggoSME|yq,uRE~%9XRC97C;tJ/)kWxH,k3gzra2C*g' );
define( 'AUTH_SALT',        'J]*50j9_=^I&I.i#+S#I}iPo<cm,.1QU~lSmo3E9[H[:rbYF[h5r-;$[3~|l5tCI' );
define( 'SECURE_AUTH_SALT', 'Y&RYu9S$3s9ItH){^<bwn*3B~(nNK[C=rwfQ_INl8?{}Tod3!~gjJq/>Bp8Ppa7g' );
define( 'LOGGED_IN_SALT',   'ozJy2Y#,Sm4@=5ji84mdMtQ~3iK?F@p<~5Vv=MlP>bgx.fbs&1/8T~@(: B)2~xn' );
define( 'NONCE_SALT',       '!XyGi|>GbnW&13|[DT?>.M(MdV}N2-[cv)Rj/dtMi%:ZZ+p00VwT!V~CptfKkFU[' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
/* ********** define( 'WP_DEBUG', false ); */
define( 'WP_DEBUG', true );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */

/** 利用メモリ拡張 **/
define( 'WP_MEMORY_LIMIT',     '256M' );
define( 'WP_MAX_MEMORY_LIMIT', '512M' );


/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
