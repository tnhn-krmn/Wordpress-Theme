<?php
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * MySQL ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'stuka' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'stuka' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', 'stuka2018' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'E!ic/wwAt_QD5|~UcYm8tPqLMR!@hw6^/0@;?d, Me(?Yw`i:~gjw&QXMShO=[_!' );
define( 'SECURE_AUTH_KEY',  'dBd$xyoeC^#F$!WnPp2[[pYJ.bwsfT$V{v{dr_Yk_>XG3?Dz9!4DGt#Aah$(W[2Q' );
define( 'LOGGED_IN_KEY',    'I~cy~C]VH65N|zi6UtAiyo:ai9?CL9@Vw^>[,~;yAxfM3xyYO:v.aaJSY~p|g^S>' );
define( 'NONCE_KEY',        '.cg<p3HF8.q;qn-u3B1<cGJ#^9ZD> ZbMw@E{E6LnGaln6O4KjpLw?Gz,N=1;Ukg' );
define( 'AUTH_SALT',        '(XYM-5a8 nj1y`*uUZeE*yP-D_5nEH.UZ-#qCT1k4vjIHUD,<XHg9p7o4XBxXSsJ' );
define( 'SECURE_AUTH_SALT', 'IzK}3rQ*NekwZY3!J8(g>/d{E 8gMw[fgf[SR(zu<r/0%06l?Vb:|7ZM%5[i*vsF' );
define( 'LOGGED_IN_SALT',   '%8&=}ks`rKHp5z^GSK(&vk6XVeUg;C#>&In15/jx4=&o^alE5Q<AEJzS-n+XY_1k' );
define( 'NONCE_SALT',       ';DwJi!vfK{zDS@1j(>WC&r)n2G~ZUPSd%:wa26g)vdHl(ildvB]TAV%j~gBe>8e<' );

/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';