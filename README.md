## Addon

Addon for adding `marinar/metable` functionality to `marinar/products`.

- [Installation](#installation)
- [Publish](#publish)
- [Remove](#remove)
- [GIT Repositories](#git-repositories)


## Instalation
1. Require the package
```bash
composer require marinar/products_metable
```

## Publish
- All
```bash
php artisan vendor:publish --provider="Marinar\ProductsMetable\MarinarProductsMetableServiceProvider"
```
- marinar_products_metable.php config
```bash
php artisan vendor:publish --tag=config --provider="Marinar\ProductsMetable\MarinarProductsMetableServiceProvider"
```
- Views - the blade templates - marinar_products_metable prefix
```bash
php artisan vendor:publish --tag=views --provider="Marinar\ProductsMetable\MarinarProductsMetableServiceProvider"
```
- Translations - marinar_products_metable prefix
```bash
php artisan vendor:publish --tag=translations --provider="Marinar\ProductsMetable\MarinarProductsMetableServiceProvider"
```

## Remove
Remove is automatic - see `conifg/package.php` for used commands
```bash
composer remove marinar/products_metable
```

## GIT Repositories
- Turshia - `ssh://lpackages@193.93.255.240/home/lpackages/gits/products_metable.git`
- Github - `git@github.com:frontSoftDev/products_metable.git`