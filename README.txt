=== Plugin Name ===
Contributors: ljfreelancer88
Donate link: https://codeandpixelfluent.com
Tags: mail, smtp
Requires at least: 3.0.1
Tested up to: 3.4
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

SMTP plugin that uses environment/constant variables configuration instead of database.

== Description ==

SMTP plugin that uses environment/constant variables configuration instead of database. This is helpful specially if you manage multiple Wordpress websites in a single server.

== Installation ==

Upload the `Last SMTP` plugin, activate it, and then configure your SMTP configurations on your config file, DONE!

```php
define( 'SMTP_HOST',   'smtp.mailtrap.io' );     // The hostname of the mail server
define( 'SMTP_PORT',   '2525' );                 // SMTP port number - likely to be 25, 465 or 587
define( 'SMTP_USER',   'username_goes_here' );   // Username to use for SMTP authentication
define( 'SMTP_PASS',   'password_goes_here' );   // Password to use for SMTP authentication
define( 'SMTP_SECURE', 'tls' );                  // Encryption system to use - ssl or tls
define( 'SMTP_AUTH',    true );                  // Use SMTP authentication (true|false)
define( 'SMTP_DEBUG', 0);
```

== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the /assets directory or the directory that contains the stable readme.txt (tags or trunk). Screenshots in the /assets
directory take precedence. For example, `/assets/screenshot-1.png` would win over `/tags/4.3/screenshot-1.png`
(or jpg, jpeg, gif).
2. This is the second screen shot


