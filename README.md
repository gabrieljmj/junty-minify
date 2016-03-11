junty-minify
============
Junty plugin for CSS and JS minification.

## Installation
```bash
$ composer require --dev gabrieljmj/junty-minify
```

## Usage
It is simple to use:
```php
use Gabrieljmj\JuntyMinify\{Css as CssMinifier, Js as JsMinifier};

// CSS
$junty->task('css_minify', function () {
    $this->src('./public/css/*.css')
        ->forStreams(new CssMinifier())
        ->forStreams($this->toDir('public/dist/css'));
});

// JS
$junty->task('js_minify', function () {
    $this->src('./public/js/*.js')
        ->forStreams(new JsMinifier())
        ->forStreams($this->toDir('public/dist/js'));
});
```