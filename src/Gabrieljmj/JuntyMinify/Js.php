<?php
namespace Gabrieljmj\JuntyMinify;

use MatthiasMullie\Minify\{Minify, JS};
use Gabrieljmj\JuntyMinify\AbstractMinifier;

class Js extends AbstractMinifier
{
    public function getName() : string
    {
        return 'js_minifier';
    }

    protected function getMinifier() : Minify
    {
        return new JS();
    }
}