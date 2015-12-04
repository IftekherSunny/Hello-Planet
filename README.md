# Hello Planet

Dummy Package For The Planet Framework.

## Installation Process

In order to install Hello Planet, just add

```json
 "sun/hello-planet": "1.*"
```
to your composer.json. Then run composer install or composer update.

Then in your config/provider.php add

```php
 'Sun\HelloProvider',
```

Then publish Hello Planet's assets with 

```
php planet publish
```
This command will publish all of the assets, views and config files.
