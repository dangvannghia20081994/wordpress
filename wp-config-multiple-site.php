<?php
/* Add any custom values between this line and the "stop editing" line. */
/** Multisite */
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'wordpress.test');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
define('FS_METHOD','direct');
define('COOKIE_DOMAIN', $_SERVER['HTTP_HOST']);
/* That's all, stop editing! Happy publishing. */
