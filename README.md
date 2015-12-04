# Hello-Planet

Hello Planet Package For The Planet Framework.

## Installation Process

In order to install Hello Planet, just add

```
 "sun/hello-planet": "1.*"
```
to your composer.json. Then run composer install or composer update.

Then in your config/provider.php add

```
 'Sun\HelloProvider',
```

Then publish Hello Planet's assets with 

```
php planet publish
```
This command will publish all of the assets, views and config files.
