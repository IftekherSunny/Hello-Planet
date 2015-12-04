<?php

namespace Sun;

use Sun\Contracts\Application as App;

class HelloProvider
{
    /**
     * @var \Sun\Contracts\Application
     */
    protected $app;

    /**
     * Create a new instance
     *
     * @param \Sun\Contracts\Application $app
     */
    public function __construct(App $app)
    {
        $this->app = $app;
    }

    /**
     * Bootstrap service
     */
    public function bootstrap()
    {
        //
    }

    /**
     * Register route
     */
    public function registerRoute()
    {
        return [
            __DIR__ . '/route.php',
        ];
    }

    /**
     * Publish assets
     *
     * @return array
     */
    public function publish()
    {
        return [
             __DIR__ .'/Views/index.blade.php'     =>  app_path() .'/Views/vendor/hello/index.blade.php',
             __DIR__ .'/Views/layout.blade.php'    =>  app_path() .'/Views/vendor/hello/layout.blade.php',
             __DIR__ .'/Assets/style.css'          =>  public_path() .'/vendor/hello/css/style.css',
             __DIR__ .'/../config/hello.php'       =>  config_path() .'/hello.php',
             __DIR__ .'/../migrations/20151204092538_create_messages_table.php' =>
                migrations_path() . '/20151204092538_create_messages_table.php',
        ];
    }
}