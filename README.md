Yii2  Preferences
===================


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-source "c006/yii2-preferences" "*"
```

or add

```
"c006/yii2-preferences": "*"
```

to the require section of your `composer.json` file.



**Next** check that a database connection is setup

**Run** this to setup the tables.

```
$ yii migrate --migrationPath=@vendor/c006/yii2-preferences/migrations
```

or if my console is installed

```$ yii migrate2 m000000_000000_c006_prefs```


Setup
-----


>
        'modules'    => [
            ...
            ...
            ...
            'preferences' => [
                'class' => 'c006\preferences\Module',
            ],
        ],







