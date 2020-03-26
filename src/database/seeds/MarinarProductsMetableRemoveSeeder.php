<?php
    namespace Marinar\ProductsMetable\Database\Seeds;

    use Illuminate\Database\Seeder;

    class MarinarProductsMetableRemoveSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run() {
            \App\Addon::wherePackage('marinar_products_metable')->delete();
            \App\AddVar::where('addvariable_type', "Marinar\\Products\\Models\\Product")
                ->whereIn('var_name', ['meta_title', 'meta_description'] )
                ->delete();
        }
    }
