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

            //VALIDATIONS
            ProductRequest::$addon_validations['pipes']['marinar_products_metable'] = function($request, \Closure $next) {
                ProductRequest::$addon_validations['rules'] = array_merge(
                    MarinarMetable::validation_rules( trans('marinar_products_metable::validation') ),
                    ProductRequest::$addon_validations['rules']);
                ProductRequest::$addon_validations['messages'] = marinar_assoc_arr_merge(
                    (array)trans('marinar_metable::validation'),
                    (array)trans('marinar_products_metable::validation'),
                    ProductRequest::$addon_validations['messages']
                );
                return $next($request);
            };
            //END VALIDATIONS
        }
    }
