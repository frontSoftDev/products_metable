<?php
    namespace Marinar\ProductsMetable;

    use Marinar\Metable\MarinarMetable;
    use Marinar\Products\Http\Requests\ProductRequest;

    class MarinarProductsMetable {
        public static function lang_path() {
            return __DIR__.DIRECTORY_SEPARATOR.'resources'.DIRECTORY_SEPARATOR.'lang';
        }

        public static function preHandle() {
        }


        public static function handle() {
        }

        public static function request($request, \Closure $next) {
            ProductRequest::$addon_validations['rules'] = array_merge(
                ProductRequest::$addon_validations['rules'],
                MarinarMetable::validation_rules( trans('marinar_products_metable::validation') )
            );

            ProductRequest::$addon_validations['messages'] = marinar_assoc_arr_merge(
                (array)trans('marinar_metable::validation'),
                (array)trans('marinar_products_metable::validation'),
                ProductRequest::$addon_validations['messages']
            );
            return $next($request);
        }
    }
