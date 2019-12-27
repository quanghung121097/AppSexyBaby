<?php namespace SinKa\Sexybaby;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return  [
            'SinKa\Sexybaby\Components\Vote' => 'Vote',
        ];
    }

    public function registerSettings()
    {
    }
}
