<?php
    /**
     * Twigpack plugin for Craft CMS 3.x
     *
     * Twigpack is the conduit between Twig and webpack, with manifest.json &
     * webpack-dev-server HMR support
     *
     * @link      https://nystudio107.com/
     * @copyright Copyright (c) 2018 nystudio107
     */

    /**
     * Twigpack config.php
     *
     * This file exists only as a template for the Twigpack settings.
     * It does nothing on its own.
     *
     * Don't edit this file, instead copy it to 'craft/config' as 'twigpack.php'
     * and make your changes there to override default settings.
     *
     * Once copied to 'craft/config', this file will be multi-environment aware as
     * well, so you can have different settings groups for each environment, just as
     * you do for 'general.php'
     */

    return [
        // Global settings
        '*' => [
            // If `devMode` is on, use webpack-dev-server to all for HMR (hot module reloading)
            'useDevServer' => getenv('DEV_MODE'),
            // The JavaScript entry from the manifest.json to inject on Twig error pages
            'errorEntry' => 'app.js',
            // Manifest file names
            'manifest' => [
                'legacy' => 'manifest-legacy.json',
                'modern' => 'manifest.json',
            ],
            // Public server config
            'server' => [
                'manifestPath' => '@webroot/dist',
                'publicPath' => getenv('PUBLIC_PATH'),
            ],
            // webpack-dev-server config
            'devServer' => [
                'manifestPath' =>  getenv('DEVSERVER_PUBLIC'),
                'publicPath' => getenv('DEVSERVER_PUBLIC'),
            ],
            // Local files config
            'localFiles' => [
                'basePath' => '@webroot/',
                'criticalPrefix' => 'dist/criticalcss/',
                'criticalSuffix' => '_critical.min.css',
            ],
        ],
    ];
