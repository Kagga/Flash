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

This package makes use of sweetalert `http://t4t5.github.io/sweetalert/`

Add the Javascript and css files from `http://t4t5.github.io/sweetalert/` to your views

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

Or, for a general information flash, just do: `flash('Some message');`.

With this message flashed to the session, you may now display it in your view(s). Maybe something like:


> Note that this package is optimized for use with Twitter Bootstrap.

Because flash messages and overlays are so common, if you want, you may use (or modify) the views that are included with this package. Simply append to your layout view:

```html
@include('flash::flash')
```

If you need to modify the flash message partial, you can run:

```bash
php artisan vendor:publish
```

The package view will now be located in the `\resources\views\vendor\flash` directory.


