<?php
	return [
		'install' => [
            'php artisan db:seed --class="\Marinar\ProductsMetable\Database\Seeds\MarinarProductsMetableSeeder"'
		],
		'remove' => [
            'php artisan db:seed --class="\Marinar\ProductsMetable\Database\Seeds\MarinarProductsMetableRemoveSeeder"'
		]
	];