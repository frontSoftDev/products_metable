@Metable([
    'inputBag' => config('marinar_products.input_bag'),
    'lang_prefix' => 'marinar_products_metable::product',
    'object' => (isset($chProduct)? $chProduct : null)
])@endMetable
