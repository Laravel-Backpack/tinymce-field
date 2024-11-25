# backpack\tinymce-field

```
// TODO: Badge - Latest Version on Packagist
// TODO: Badge - Total Downloads
```

A field type for [Laravel Backpack](https://backpackforlaravel.com/) that uses the [TinyMCE](https://www.tiny.cloud/) WYSIWYG editor.

// TODO: screenshot

## Install

To install this package via Composer, run this command:

```bash
composer require backpack/tinymce-field
```

## Usage

In your CrudController, use the `tinymce` field type:

```php
CRUD::field([   // TinyMCE
    'name'  => 'description',
    'label' => 'Description',
    'type'  => 'tinymce',
    // optional overwrite of the configuration array
    // 'options' => [
        //'selector' => 'textarea.tinymce',
        //'skin' => 'dick-light',
        //'plugins' => 'image link media anchor'
    // ],
]);
```

**NOTE**: if you want to modify the toolbar buttons (add or remove), here is the default configured toolbar so you can modify it:

```php
'options' => ['toolbar' => 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent'],
```

Some buttons are related to specific plugins and need them to work, please read more about it here: [tiny mce available toolbar buttons](https://www.tiny.cloud/docs/advanced/available-toolbar-buttons/)

## Security

If you discover any security related issues, please email tabacitu@backpackforlaravel.com instead of using the issue tracker.

Please **[subscribe to the Backpack Newsletter](http://backpackforlaravel.com/newsletter)** so you can find out about any security updates, breaking changes or major features. We send an email every 1-2 months.

## License

TinyMCE is released under the GPL license. Please see the [TinyMCE licensing page](https://www.tiny.cloud/docs/tinymce/latest/license-key/) for more information. Means that if you use TinyMCE in your project, and you distribute that project, you need to make the source code of your project available under a GPL-compatible license or purchase a commercial TinyMCE license.

## Credits

- [Pedro Martins](https://github.com/pxpm)
- [Cristian Tabacitu](https://github.com/tabacitu)
