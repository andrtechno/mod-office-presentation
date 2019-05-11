
# mod-office-presentation

Module for PIXELION CMS

[![Latest Stable Version](https://poser.pugx.org/panix/mod-office-presentation/v/stable)](https://packagist.org/packages/panix/mod-office-presentation)
[![Latest Unstable Version](https://poser.pugx.org/panix/mod-office-presentation/v/unstable)](https://packagist.org/packages/panix/mod-office-presentation)
[![Total Downloads](https://poser.pugx.org/panix/mod-office-presentation/downloads)](https://packagist.org/packages/panix/mod-office-presentation)
[![Monthly Downloads](https://poser.pugx.org/panix/mod-office-presentation/d/monthly)](https://packagist.org/packages/panix/mod-office-presentation)
[![Daily Downloads](https://poser.pugx.org/panix/mod-office-presentation/d/daily)](https://packagist.org/packages/panix/mod-office-presentation)
[![License](https://poser.pugx.org/panix/mod-office-presentation/license)](https://packagist.org/packages/panix/mod-office-presentation)


## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

#### Either run

```
php composer require --prefer-dist panix/mod-office-presentation "*"
```

or add

```
"panix/mod-office-presentation": "*"
```

to the require section of your `composer.json` file.

#### Add to web config.
```
'modules' => [
    'presentation' => ['class' => 'panix\mod\presentation\Module'],
],
```

#### Migrate
```
php yii migrate --migrationPath=vendor/panix/mod-office-presentation/migrations
```

### Author & License
- [Author](https://github.com/andrtechno)
- [License](https://github.com/andrtechno/engine/blob/master/LICENSE.md)

> [![PIXELION CMS!](https://pixelion.com.ua/uploads/logo.svg "PIXELION CMS")](https://pixelion.com.ua)  
<i>Content Management System "PIXELION CMS"</i>  
[www.pixelion.com.ua](https://pixelion.com.ua)

> The module is under development, any moment can change everything.
