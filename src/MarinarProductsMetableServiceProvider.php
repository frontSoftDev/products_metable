<?php
    namespace Marinar\ProductsMetable;

    use Illuminate\Support\ServiceProvider;

    class MarinarProductsMetableServiceProvider extends ServiceProvider {
        public function boot() {
            MarinarProductsMetable::preHandle();

            if(!\provider_url_check(config('marinar_products_metable.provider_route_prefixes')))
                return;
            $this->loadViewsFrom(__DIR__ . DIRECTORY_SEPARATOR . 'resources' . DIRECTORY_SEPARATOR . 'views', 'marinar_products_metable');
            $this->loadTranslationsFrom(__DIR__ . DIRECTORY_SEPARATOR . 'resources' . DIRECTORY_SEPARATOR . 'lang', 'marinar_products_metable');
            MarinarProductsMetable::handle();
        }

        public function register() {
            config(['marinar_products_metable.package_dir' => __DIR__]);
            $this->mergeConfigFrom(__DIR__ . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'marinar_products_metable.php', 'marinar_products_metable');
            $this->publishes([
                __DIR__ . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'marinar_products_metable.php' => config_path('marinar_products_metable.php'),
            ], 'config');
            $this->publishes([
                __DIR__ . DIRECTORY_SEPARATOR . 'resources' . DIRECTORY_SEPARATOR . 'lang' => resource_path('lang/vendor/marinar_products_metable'),
            ], 'translations');
            $this->publishes([
                __DIR__ . DIRECTORY_SEPARATOR . 'resources' . DIRECTORY_SEPARATOR . 'views' => resource_path('views/vendor/marinar_products_metable'),
            ], 'views');
            \PackagesSeeder::$package_seeders[] = \Marinar\ProductsMetable\Database\Seeds\MarinarProductsMetableSeeder::class;
        }
    }
