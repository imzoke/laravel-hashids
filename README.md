# Laravel 4 Hashids

This package uses the classes created by [hashids.org](http://hashids.org/)

## Installation
Begin by installing the package through Composer. Edit your project's `composer.json` file to require `imzoke/laravel-hashids`.

```php
"require": {
"imzoke/laravel-hashids": "1.x"
}
```

Next, update Composer from the Terminal:

```
composer update
```

Once the package has been installed you'll need to add the service provider. Open your `app/config/app.php` configuration file, and add a new item to the `provider
```php
'Imzoke\Hashids\HashidsServiceProvider'
```s` array.


After doing this you also need to add an alias. In your `app/config/app.php` file, add this to the `aliases` array.

```php
'Hashids' => 'Imzoke\Hashids\Facade'
```

Now last but not least you need to publish to package configuration from your Terminal:

```php
php artisan config:publish imzoke/laravel-hashids
```
This will publish Hashids' config to `app/config/packages/imzoke/laravel-hashids/`.

## Usage
Once you've followed all the steps and completed the installation you can use Hashids.

### Encoding
You can simply encrypt on id:

```php
Hashids::encode(1); // Returns yed94w
```

or multiple..

```php
Hashids::encode(1, 11, 21, 131); // Returns kac9fgux3
```

### Decoding
It's the same thing but the other way around:

```php
Hashids::decode('yed94w');

// Returns
array (size=1)
0 => int 1
```

or multiple..

```php
Hashids::decode('rou3tjjidqg');

// Returns
array (size=4)
0 => int 12
1 => int 13
2 => int 50
3 => int 1296
```
