# A lightweight package to send alert messages

This is a lightweight package to send alert messages in Laravel apps.

This is how it can be used:

```php
class MyController
{
    public function store()
    {
        // …

        alert('My message');

        return back();
    }
}
```

In your view you can do this:

```blade
@if (alert()->check())
    <div>
        {{ alert()->message }}
    </div>
@endif
```

## Installation

You can install the package via composer:

```bash
composer require kcdev/laravel-alert
```

## Usage

Here is an example on how to alert a message.

```php
class MyController
{
    public function store()
    {
        // …

        alert('My message');

        return back();
    }
}
```

In your view you can use it like this

```blade
@if(alert()->check())
    <div>
        {{ alert()->message }}
    </div>
@endif
```


### Displaying message

This is typically used to style the output in your HTML.

```php
class MyController
{
    public function store()
    {
        // …

        alert()->success('My message');

        return back();
    }
}
```

In your view you can use like this:

```blade
@if (alert()->check())
    <div class="{{ alert()->success ? 'success' : 'error' }}">
        {{ alert()->message }}
    </div>
@endif
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email amiruddinmarmul@gmail.com instead of using the issue tracker.

## Credits

- [Amir Marmul](https://github.com/amirmarmul)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
