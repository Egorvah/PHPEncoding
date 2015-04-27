# PHPEncoding

Detect encoding: windows-1251 and utf-8

FOR LARAVEL 4

INSTALL

Add service provider to app/config/app.php

'providers' => array(
		...
		'Egorvakh\PHPEncoding\EncodingServiceProvider',
)

Add aliase to app/config/app.php

'aliases' => array(
		...
    'Encoding'  =>  'Egorvakh\PHPEncoding\Facades\Encoding',
)

Use

\Encoding::detect('съешь ещё этих мягких французских булок');

