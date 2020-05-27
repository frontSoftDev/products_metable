<?php
    namespace Marinar\ProductsMetable\Database\Seeds;

    use Illuminate\Database\Seeder;

    class MarinarProductsMetableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            if(!($productsModule = \App\Module::wherePackage_prefix( 'marinar_products' )->first() )) {
                return;
            }
            $productsModule->addons()->updateOrCreate([
                'package' => 'marinar/products_metable',
            ], [
                'version' => '0.0.1',
                'package_prefix' => 'marinar_products_metable',
                'facade' => 'MarinarProductsMetable',
                'name' => 'Product metable',
//                'remove_commands' => 'composer remove marinar/products_metable -n -q'
            ]);

        }
    }
