<?php
namespace Gabrieljmj\JuntyMinify;

use MatthiasMullie\Minify\{Minify, CSS};
use Gabrieljmj\JuntyMinify\AbstractMinifier;

class Css extends AbstractMinifier
{
    public function getName() : string
    {
        return 'css_minifier';
    }

    protected function getMinifier() : Minify
    {
        return new CSS();
    }
}