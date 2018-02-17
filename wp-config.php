<?php
/**
 * إعدادات الووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define('DB_NAME', 'previewm_starofex');

/** اسم مستخدم قاعدة البيانات */
define('DB_USER', 'previewm_starofe');

/** كلمة مرور قاعدة البيانات */
define('DB_PASSWORD', 'r]RM6zJ!9gdf');

/** عنوان خادم قاعدة البيانات */
define('DB_HOST', 'localhost');

/** ترميز قاعدة البيانات */
define('DB_CHARSET', 'utf8mb4');

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define('DB_COLLATE', '');

/**#@+
 * مفاتيح الأمان.
 *
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'e%NMA$$!l1!X3J5eJ<dSZg9!/(|8^1WK Gnm1<^HMm gD#A{eayp-|l)j8XyB>In');
define('SECURE_AUTH_KEY',  'c amTS)JASF7kk[yC0V$3:?<%44vh[bu_8cUA4L01qS|loO|:1jeW+<;xZ#E^BHe');
define('LOGGED_IN_KEY',    '$E1V~@#9?LTO*=>#>MpitCs*7cTihO.Y^0c9eO0WVO|8o+MA?6$E%p9%eca+}(Yo');
define('NONCE_KEY',        '{CW/%-U$^&xfu}Pi@j(FzKIFAQY`/Z4N^=a,cxN+Av]`1+PeK@2ktD=KRdGyecv]');
define('AUTH_SALT',        ')FR{(C=al9{=^?lKT#2bj9cX!4hi/AxDMU.A>< u+s6cO:/?T<(qTmqv|_^{amT&');
define('SECURE_AUTH_SALT', '<?ZVRfP_SJ,i3hS &YujN?L[&$1&&]&v~XJqie2*{@*MwxC=nsNH(x?f+$I6uyD#');
define('LOGGED_IN_SALT',   'h;Sn`/r(IfJ`q%$^/O<M~md_-3a:`xw?XFeS`U7`]WjI$QFvKlb` u?%t1<~HF Z');
define('NONCE_SALT',       'D`m$IZLguW],tcQ0ZII5b#+J{0qTI04:K7*Xl)t#SczOhDBQ@W~#3if{aRHi957:');

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix  = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once(ABSPATH . 'wp-settings.php');