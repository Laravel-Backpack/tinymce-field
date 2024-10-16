# backpack\tinymce-field

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

A TinyMCE field type for Laravel Backpack, using the [TinyMCE](https://www.tiny.cloud/) WYSIWYG editor.
## Install

You can install this package via composer using this command:

```bash
composer require backpack/tinymce-field
```

## Usage

In your CrudController, use the `tinymce` field type:

```php
CRUD::field('content')->type('tinymce');
```

Find more information on how to use this field in the [official Backpack for Laravel documentation](https://backpackforlaravel.com/docs/6.x/crud-fields#tinymce).

## License

TinyMCE is released under the GPL license. Please see the [TinyMCE licensing page](https://www.tiny.cloud/docs/tinymce/latest/license-key/) for more information. Means that if you use TinyMCE in your project, and you distribute that project, you need to make the source code of your project available under a GPL-compatible license or purchase a commercial TinyMCE license.


> ### Security updates and breaking changes
> Please **[subscribe to the Backpack Newsletter](http://backpackforlaravel.com/newsletter)** so you can find out about any security updates, breaking changes or major features. We send an email every 1-2 months.

## Security

If you discover any security related issues, please email tabacitu@backpackforlaravel.com instead of using the issue tracker.

Please **[subscribe to the Backpack Newsletter](http://backpackforlaravel.com/newsletter)** so you can find out about any security updates, breaking changes or major features. We send an email every 1-2 months.

## Credits

- [Cristian Tabacitu][link-author]
- [All Contributors][link-contributors]
