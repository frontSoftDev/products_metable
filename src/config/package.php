<?php
	return [
		'install' => [
            'php artisan db:seed --class="\Marinar\ProductsMetable\Database\Seeds\MarinarProductsMetableSeeder" -n'
		],
		'remove' => [
            'php artisan db:seed --class="\Marinar\ProductsMetable\Database\Seeds\MarinarProductsMetableRemoveSeeder" -n'
		]
	];