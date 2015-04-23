<?php

namespace Ninjaparade\Hashids;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class FilesystemServiceProvider extends ServiceProvider
{
    /**
     * {@inheritDoc}
     */
    public function register()
    {
        $this->registerConfig();
    }

    /**
     * Prepare the config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        // Publish config
        $config = realpath(__DIR__.'/../config/config.php');

        $this->mergeConfigFrom($config, 'ninjaparade.hashids');
        
        $this->publishes([
            $config => config_path('ninjaparade.hashids.php'),
        ], 'config');
    }

}
