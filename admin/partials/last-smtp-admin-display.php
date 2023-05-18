<section id="last-smtp">
<h2>Support Area</h2>
<p>First of all, thank You for using <strong>Last SMTP</strong>. To get you started, just follow the instructions below.</p>

<h3>For multiple Wordpress websites</h3>
<p><strong>Step 1:</strong> Set your SMTP configuration in your centralized configuration file <em>ex. mail-config.php</em></p>
<pre>
define( 'SMTP_HOST',   'smtp.mailtrap.io' );     // The hostname of the mail server
define( 'SMTP_PORT',   '2525' );                 // SMTP port number - likely to be 25, 465 or 587
define( 'SMTP_USER',   'username_goes_here' );   // Username to use for SMTP authentication
define( 'SMTP_PASS',   'password_goes_here' );   // Password to use for SMTP authentication
define( 'SMTP_SECURE', 'tls' );                  // Encryption system to use - ssl or tls
define( 'SMTP_AUTH',    true );                  // Use SMTP authentication (true|false)
define( 'SMTP_DEBUG', 0);
</pre>
<p><strong>Step 2:</strong> Call that configuration file in your <em>wp-config.php</em></p>
<code>require_once '/path/to/your/mail-config.php';</code>
<p>The advantage of this is say you want to update your SMTP password. You don&#39;t have to make the changes on all websites you manage.</p>
<hr />
<h3>For single Wordpress website</h3>
<p>Just set your SMTP configuration directly in your <em>wp-config.php</em> file.</p>
<pre>
define( 'SMTP_HOST',   'smtp.mailtrap.io' );     // The hostname of the mail server
define( 'SMTP_PORT',   '2525' );                 // SMTP port number - likely to be 25, 465 or 587
define( 'SMTP_USER',   'username_goes_here' );   // Username to use for SMTP authentication
define( 'SMTP_PASS',   'password_goes_here' );   // Password to use for SMTP authentication
define( 'SMTP_SECURE', 'tls' );                  // Encryption system to use - ssl or tls
define( 'SMTP_AUTH',    true );                  // Use SMTP authentication (true|false)
define( 'SMTP_DEBUG', 0);       
</pre>

<h3>Logging</h3>
<p>First, make sure <code>define( 'WP_DEBUG', true);</code> was set to <code>true</code> in your <em>wp-config.php</em></p>
<p>If you make a send request. It will create <em>last-smtp.log</em> on your website root folder.<br />As a friendly reminder, don&#39;t forget to delete your <em>last-smtp.log</em> file and set <code>define( 'WP_DEBUG', false);</code> to <code>false</code> after you investigate your log file.</p>
<br />
<p>If you are having difficulty, technical issue or request, feel free to use the Chat support.</p>
</section>
<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="bec17708-0955-4cf6-85cb-155ea2a660a0";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
