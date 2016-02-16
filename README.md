# Simple Flash Messages

## Lets get started

## Installation

Install this package through composer

Simply run `composer require kagga/flash`

If using Laravel 5 add the service provider in `config/app.php`.

```php
'providers' => [
    Kagga\Flash\FlashServiceProvider::class
];
```

For convenience, add a facade alias to this same file at the bottom:

```php
'aliases' => [
    'Flash' => Kagga\Flash\Facade\Flash::class
];
```
## Usage

Within your controllers, before the redirect

```php
public function update()
{
    Flash::success('Update','Successfully Updated');

    return Redirect::home();
}
```

You may also do:

- `Flash::info('Title','Message')`
- `Flash::success('Title','Message')`
- `Flash::error('Title','Message')`
- `Flash::warning('Title','Message')`
- `Flash::overlay('Title',' Message', 'Level')` By default the level is success you can override if you specify a level.

This package will set a few keys in the session.

- 'message' - The session key.
- 'message_overlay' - The session key for an overlay.

Alternatively, if you're using Laravel, you may reference the `flash()` helper function, instead of the facade. Here's an example:

```php
public function store()
{

    flash()->success('Title','Message');

    return Redirect::home();
}
```

> This package makes use of sweetalert http://t4t5.github.io/sweetalert/

> Add the Javascript and css files from http://t4t5.github.io/sweetalert/ to your views

```html
@include('flash::flash')
```

If you need to modify the flash message partial, you can run:

```bash
php artisan vendor:publish
```

The package view will now be located in the `\resources\views\vendor\flash` directory.


