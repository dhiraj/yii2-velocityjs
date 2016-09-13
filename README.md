Yii 2 [Velocity.JS](https://github.com/julianshapiro/velocity) Asset Bundle
==============================================================================

This extension provides an assets bundle with [Velocity.js](https://github.com/julianshapiro/velocity)
for [Yii framework 2.0](http://www.yiiframework.com/) applications.

For license information check the [LICENSE](https://github.com/dhiraj/yii2-velocityjs/blob/master/LICENSE)-file.


Support
-------
* [GutHub issues](https://github.com/dhiraj/yii2-velocityjs/issues)

Installation
------------

The preferred way to install this extension is through [composer](https://getcomposer.org/).

Either run

```bash
composer require "dhiraj/yii2-velocityjs:~1.0"
```

or add

```
"dhiraj/yii2-velocityjs": "~1.0",
```

to the `require` section of your `composer.json` file.

Usage
-----

In view

```php
traversient\yii\velocityjs\AssetBundle::register($this);

```

or as dependency in your main application asset bundle

```php
class AppAsset extends AssetBundle
{
	// ...

	public $depends = [
		// ...
		'\traversient\yii\velocityjs\AssetBundle'
	];
}

```

and Velocity.js will be added to your page load.