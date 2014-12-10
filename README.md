Yii2 fullcalendar wrapper
=========================
Fullcalendar wrapper for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist goryachev/yii2-fullcalendar "*"
```

or add

```
"goryachev/yii2-fullcalendar": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \goryachev\yii2fullcalendar\Calendar::widget([
    'plugin options'=>[options of fullcalendar]
]); ?>```

Full documentation of fullcalendar [here](http://fullcalendar.io/docs/)
