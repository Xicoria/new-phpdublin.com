## PHP Dublin New Site

This is the new website for PHPDublin being built in Laravel 5.1

### Using builtin Homestead
Laravel Homestead is now built into the project which allows for a unified
development environment for all who are helping to build the site.

To get started with Homestead you will first need to initialize it after
you can run composer install (one time job only), simply run 
```php vendor/bin/homestead make``` and it will generate a Homestead.yaml file
which you will then tweak to suit your requirements (hostname etc).

To start the Homestead virtual machine, run ```vagrant up```

For more details on Homestead check the docs out at http://laravel.com/docs/5.1/homestead
