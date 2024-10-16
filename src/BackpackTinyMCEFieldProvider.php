<?php

namespace Backpack\TinyMCEField;

use Illuminate\Support\ServiceProvider;
use Backpack\TinyMCEField\AutomaticServiceProvider;

class BackpackTinyMCEFieldProvider extends ServiceProvider
{
    use AutomaticServiceProvider;

    protected $vendorName = 'backpack';
    protected $packageName = 'tinymce-field';
    protected $commands = [];
}