<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 2018/11/16
 * Time: 16:34
 */
namespace Andrew\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','contact');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/contact.php','contact');
        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php')
        ]);
    }
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
       /* $this->mergeConfigFrom(
            __DIR__.'/path/to/config/courier.php', 'courier'
        );*/
    }
}