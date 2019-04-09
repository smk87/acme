<?php namespace Smk\Resources;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'smk',
            'description' => 'Provides company resource',
            'author' => 'Saqlain Mahmud',
            'icon' => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            '\Smk\Resources\Components\Links' => 'resourcesLinks'
        ];
    }
}