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
 * * MySQL 設定
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

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'ichirinpla_raora' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'ichirinpla_zpsco' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '596scxtdjp' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'mysql2207.xserver.jp' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'SXrcs}@G_pMr-tR8IQl!FB4Gj!BG4.M|(4sDZrZa_`}@5n7>QtJX1@1-fecU,Zaf' );
define( 'SECURE_AUTH_KEY',  'uVGr^sg5h#n62]0Tw!_n$cvI=;=Uq!ZLe-$/z3XnZV-?04[p5s=Mk95@YG.2iXGj' );
define( 'LOGGED_IN_KEY',    'x|b<4Y]SB(2=sDV7v-%^I?SZ?Zf6@FOv)uK{Tg@,10I(fo7kEjVce}BQq{|K&?07' );
define( 'NONCE_KEY',        'LYMA`k1y4@(v0fKRNmndMIV97Qahlq^>v>TGlMQ5d89bD.dD(w_W%VI*Gp#nXp)g' );
define( 'AUTH_SALT',        '$AAU02ai1uUd.myydHV~`#Y7;gb*db79{fdr2%<t{e-`?MK/:s:|[H8#|m5.DjY$' );
define( 'SECURE_AUTH_SALT', 'E;ZTX/,ZKoCgA;z#r9K;`*4|-;g?UrI*UNZ^5OI/@KC!2vfDF~_ >juH( 5E_=bU' );
define( 'LOGGED_IN_SALT',   'p.,-77)Vf&~*Lfnn&aAh~n::79(AsnR&ON/^P: %y:(-9Xbt!,7;cu:%GoyM0CN=' );
define( 'NONCE_SALT',       'MkK,kiAs10,r=n;)~fgH*e-j5_o).6D}Ng#l0m]sL(!j:SY=<k_Q?0~j<{aK}>3w' );
define( 'WP_CACHE_KEY_SALT','oJaBl,5aN1=p:79WOamz3Qqc+U[FsNT=):r8zKbSVB]-1k*~%P>}%cqTEcYN@]I~' );

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
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
