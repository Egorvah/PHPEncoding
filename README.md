# PHPEncoding

Detect encoding: windows-1251 and utf-8

### Install
composer
```
"egorvakh/phpencoding": "dev-master"
```
### For Laravel 4

Add service provider to app/config/app.php
```
'providers' => array(
		...
		'Egorvakh\PHPEncoding\EncodingServiceProvider',
)
```
Add aliase to app/config/app.php
```
'aliases' => array(
		...
    'Encoding'  =>  'Egorvakh\PHPEncoding\Facades\Encoding',
)
```
### Example
Laravel 4
```
\Encoding::detect('съешь ещё этих мягких французских булок');
```
Another
```
\Egorvakh\PHPEncoding\Encoding::detect('съешь ещё этих мягких французских булок');
```
