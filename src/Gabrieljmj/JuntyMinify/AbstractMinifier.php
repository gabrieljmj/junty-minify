<?php
namespace Gabrieljmj\JuntyMinify;

use MatthiasMullie\Minify\Minify;
use Junty\Plugin\PluginInterface;

abstract class AbstractMinifier implements PluginInterface
{
    public function getCallback() : callable
    {
        $that = $this;

        return function (array $streams) use ($that) {
            foreach ($streams as $stream) {
                $minifier = $that->getMinifier();
                $contents = $stream->getContents();
                $minifier->add($contents);
                $stream->setContents($minifier->minify());
                $this->push($stream);
            }
        };
    }

    abstract protected function getMinifier() : Minify;
}