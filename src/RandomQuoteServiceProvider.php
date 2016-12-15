<?php namespace RonnyVo\RandomQuote;

use Illuminate\Support\ServiceProvider;

/**
 * A Laravel 5's package.
 *
 */
class RandomQuoteServiceProvider extends ServiceProvider {

    protected $vendorName = 'ronnyvo';

    protected $packageName = 'randomquote';

    protected $langPath = __DIR__.'/../lang';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadTranslationsFrom($this->langPath, $this->packageName);

        $this->publishes([
            $this->langPath => resource_path('lang/vendor/'.$this->vendorName.'/'.$this->packageName),
        ]);

//        include __DIR__.'/../routes.php';
//
//        // Register Views from your package
//        $this->loadViewsFrom(__DIR__.'/../views', $this->packageName);
//
//        // Register your asset's publisher
//        $this->publishes([
//            __DIR__.'/../assets' => public_path('vendor/'.$this->packageName),
//        ], 'public');
//
//        // Register your migration's publisher
//        $this->publishes([
//            __DIR__.'/../database/migrations/' => base_path('/database/migrations')
//        ], 'migrations');
//
//        // Publish your seed's publisher
//        $this->publishes([
//            __DIR__.'/../database/seeds/' => base_path('/database/seeds')
//        ], 'seeds');
//
//        // Publish your config
//        $this->publishes([
//            __DIR__.'/../config/config.php' => config_path($this->packageName.'.php'),
//        ], 'config');

        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //$this->mergeConfigFrom( __DIR__.'/../config/config.php', $this->packageName);

        //
    }

}
