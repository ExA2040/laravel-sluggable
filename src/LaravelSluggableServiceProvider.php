<?php

namespace ExA2040\LaravelSluggable;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class LaravelSluggableViewCounterServiceProvider extends LaravelServiceProvider {

  use \Illuminate\Console\AppNamespaceDetectorTrait;

  /**
   * Indicates if loading of the provider is deferred.
   *
   * @var bool
   */
  protected $defer = false;

  /**
   * Bootstrap the application events.
   *
   * @return void
   */
  public function boot()
  {
    $this->handleMigrations();
    $this->handleRoutes();
  }

  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register()
  {
    include __DIR__.'/Http/routes.php';
  }

  /**
   * Get the services provided by the provider.
   *
   * @return array
   */
  public function provides()
  {
    // Register events for view and like
    return array();
  }
  
  private function handleMigrations() {
    $this->publishes([
      realpath(__DIR__.'/migrations') => $this->app->databasePath().'/migrations',
    ]);
  }

  private function handleRoutes() {
    include __DIR__.'/Http/routes.php';
  }

}
