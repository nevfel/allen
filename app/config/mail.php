<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Mail Driver
	|--------------------------------------------------------------------------
	|
	| Laravel supports both SMTP and PHP's "mail" function as drivers for the
	| sending of e-mail. You may specify which one you're using throughout
	| your application here. By default, Laravel is setup for SMTP mail.
	|
	| Supported: "smtp", "mail", "sendmail"
	|
	*/

	'driver' => 'smtp',

	/*
	|--------------------------------------------------------------------------
	| SMTP Host Address
	|--------------------------------------------------------------------------
	|
	| Here you may provide the host address of the SMTP server used by your
	| applications. A default option is provided that is compatible with
	| the Postmark mail service, which will provide reliable delivery.
	|
	*/

	'host' => 'butamedya.com',

	/*
	|--------------------------------------------------------------------------
	| SMTP Host Port
	|--------------------------------------------------------------------------
	|
	| This is the SMTP port used by your application to delivery e-mails to
	| users of your application. Like the host we have set this value to
	| stay compatible with the Postmark e-mail application by default.
	|
	*/

	'port' => 587,

	/*
	|--------------------------------------------------------------------------
	| Global "From" Address
	|--------------------------------------------------------------------------
	|
	| You may wish for all e-mails sent by your application to be sent from
	| the same address. Here, you may specify a name and address that is
	| used globally for all e-mails that are sent by your application.
	|
	*/

	'from' => array('address' => 'support@allen-bg.eu', 'name' => 'Allen-bg'),

	/*
	|--------------------------------------------------------------------------
	| E-Mail Encryption Protocol
	|--------------------------------------------------------------------------
	|
	| Here you may specify the encryption protocol that should be used when
	| the application send e-mail messages. A sensible default using the
	| transport layer security protocol should provide great security.
	|
	*/

	'encryption' => '',

	/*
	|--------------------------------------------------------------------------
	| SMTP Server Username
	|--------------------------------------------------------------------------
	|
	| If your SMTP server requires a username for authentication, you should
	| set it here. This will get used to authenticate with your server on
	| connection. You may also set the "password" value below this one.
	|
	*/

	'username' => 'support@allen-bg.eu',

	/*
	|--------------------------------------------------------------------------
	| SMTP Server Password
	|--------------------------------------------------------------------------
	|
	| Here you may set the password required by your SMTP server to send out
	| messages from your application. This will be given to the server on
	| connection so that the application will be able to send messages.
	|
	*/

	'password' => 'Yw123qk93!',

	/*
	|--------------------------------------------------------------------------
	| Sendmail System Path
	|--------------------------------------------------------------------------
	|
	| When using the "sendmail" driver to send e-mails, we will need to know
	| the path to where Sendmail lives on this server. A default path has
	| been provided here, which will work well on most of your systems.
	|
	*/

	'sendmail' => '/usr/sbin/sendmail -bs',

	/*
	|--------------------------------------------------------------------------
	| Mail "Pretend"
	|--------------------------------------------------------------------------
	|
	| When this option is enabled, e-mail will not actually be sent over the
	| web and will instead be written to your application's logs files so
	| you may inspect the message. This is great for local development.
	|
	*/

	'pretend' => false,

);