# last-smtp

SMTP Wordpress plugin that uses environment/constant variables configuration instead of database.
This is helpful specially if you manage multiple Wordpress websites in a single server.

How To:
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