# Hello Planet

Demo Package For The [Planet Framework](http://planet.iftekhersunny.com)

## Installation Process

In order to install Hello Planet, just add

```json
 "sun/hello-planet": "1.*"
```
to your composer.json. Then run composer install or composer update.

In your config/provider.php add

```php
 'Sun\HelloProvider',
```

Then run the command to publish Hello Planet's assets

```
php planet publish
```
This command will publish all of the assets, views and config files.

After that, setup your database connection in the .env file and run the command

```
php planet migration:migrate
```

Everything done. Now, start built in web server by the command

```
php planet run
```

Visit the link to see Hello Planet Page 
 
 ```
 http://localhost:8000/hello
 ```
