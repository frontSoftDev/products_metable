## Addon

Addon for adding `marinar/metable` functionality to `marinar/products`.

- [Installation](#installation)
- [Hooking-to](#hooking-to)
- [Publish](#publish)
- [Remove](#remove)
- [GIT Repositories](#git-repositories)


## Installation
1. Require the package
```bash
composer require marinar/products_metable
```

## Hooking to
1. Pipeline hooks
- `request` at `InfopageRequest` - for request pre work and pre scripts

2. Properties
`InfopageRequest`
- `$addon_validations['rules']` = for extending array with validation rules
- `$addon_validations['messages']` = for extending array with validation messages

3. Template hooks

Template | Hook  | Use
:---: | :---: | :---:
product | product_last | Add `Metable` component

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
Remove is automatic - see `config/package.php` for used commands
```bash
composer remove marinar/products_metable
```

## GIT Repositories
- Turshia - `ssh://lpackages@193.93.255.240/home/lpackages/gits/products_metable.git`
- Github - `git@github.com:frontSoftDev/products_metable.git`