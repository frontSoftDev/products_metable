<?php
    namespace Marinar\ProductsMetable\Database\Seeds;

    use Illuminate\Database\Seeder;
    use Marinar\Products\Models\Product;

    class MarinarProductsMetableRemoveSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run() {
            \App\AddVar::where('addvariable_type', Product::class)
                ->whereIn('var_name', ['meta_title', 'meta_description'] )
                ->delete();
            \App\Addon::wherePackage('marinar_products_metable')->delete();
        }
    }
