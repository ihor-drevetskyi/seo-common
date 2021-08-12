<div align="center">
<h1>
    Seo component [Symfony]
</h1>

<p>
    This is a Flex pack designed to easily create/edit seo elements.
</p>

[![Latest Stable Version](https://poser.pugx.org/ihor-drevetskyi/seo-common/v)](//packagist.org/packages/ihor-drevetskyi/seo-common)
[![Latest Unstable Version](https://poser.pugx.org/ihor-drevetskyi/seo-common/v/unstable)](//packagist.org/packages/ihor-drevetskyi/seo-common)
[![License](https://poser.pugx.org/ihor-drevetskyi/seo-common/license)](//packagist.org/packages/ihor-drevetskyi/seo-common)

[![Total Downloads](https://poser.pugx.org/ihor-drevetskyi/seo-common/downloads)](//packagist.org/packages/ihor-drevetskyi/seo-common)
[![Monthly Downloads](https://poser.pugx.org/ihor-drevetskyi/seo-common/d/monthly)](//packagist.org/packages/ihor-drevetskyi/seo-common)
[![Daily Downloads](https://poser.pugx.org/ihor-drevetskyi/seo-common/d/daily)](//packagist.org/packages/ihor-drevetskyi/seo-common)
</div>

Documentation
-------------

## Installation instructions and configuration:

### The easiest way to install is by using [Composer](https://getcomposer.org), run

```sh
composer require ihor-drevetskyi/seo-common
```

### Add SeoCommonBundle to your application kernel

If you don't use flex (you should), you need to manually enable bundle:
#### PHP:
```php
// config/bundles.php
return [
    // ...
    SeoCommonBundle\SeoCommonBundle::class => ['all' => true],
    // ...
];
```

## Basic description
<p>
  This package contains useful Traits for <a href="http://www.doctrine-project.org">Doctrine ORM</a> and Dto objects. 
</p>

<p>
  Your attention is also presented some entity classes, which will be useful for create/edit seo fields for different elements.
</p>

* [EntitySeo](../../../project_development/vendors/Page/Seo/SeoCommonBundle/src/Entity/EntitySeo.php)
* [EntitySeoInterface](../../../project_development/vendors/Page/Seo/SeoCommonBundle/src/Entity/EntitySeoInterface.php)

* [EntitySeoTranslation](../../../project_development/vendors/Page/Seo/SeoCommonBundle/src/Entity/EntitySeoTranslation.php)
* [EntitySeoTranslationInterface](../../../project_development/vendors/Page/Seo/SeoCommonBundle/src/Entity/EntitySeoTranslationInterface.php)

* [EntitySeoPattern](../../../project_development/vendors/Page/Seo/SeoCommonBundle/src/Entity/EntitySeoPattern.php)
* [EntitySeoPatternInterface](../../../project_development/vendors/Page/Seo/SeoCommonBundle/src/Entity/EntitySeoPatternInterface.php)

* [EntitySeoPatternTranslation](../../../project_development/vendors/Page/Seo/SeoCommonBundle/src/Entity/EntitySeoPatternTranslation.php)
* [EntitySeoPatternTranslationInterface](../../../project_development/vendors/Page/Seo/SeoCommonBundle/src/Entity/EntitySeoPatternTranslationInterface.php)

## Examples of using
<p>
    Include twig template to your base template in head section.
    To do this, add the line:
</p>

```
{% include '@SeoCommon/_head_meta.html.twig' %}
```

<p>
    Basic template example:
</p>

```html
{% apply spaceless %}
    <!DOCTYPE html>
    <html lang="{% if app.request.locale == 'ru' %}ru_RU{% elseif app.request.locale == 'en' %}en_US{% elseif app.request.locale == 'uk' %}ua_UA{% endif %}">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        {% include '@SeoCommon/_head_meta.html.twig' %}
        <!-- Stylesheets -->
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
    {% block body %}{% endblock %}
    <!-- JavaScripts -->
    {% block javascripts %}{% endblock %}
    </body>
    </html>
{% endapply %}
```

<p>
    To add a relation for element table with a seo table, use the trait SeoTrait and SeoTraitInterface.
</p>

<p>
    Add namespace to your entity;    
</p>

```php
use SeoCommonBundle\Entity\Traits\SeoTrait;
```

<p>
    Add trait to your entity;    
</p>

```php
use SeoTrait;
```

<p>
    Basic example:
</p>

```php
<?php

namespace SomeBundle\Entity;

use SeoCommonBundle\Entity\Traits\SeoTrait;
use SeoCommonBundle\Entity\Traits\SeoTraitInterface;

class SomeEntity implements SeoTraitInterface
{
    use SeoTrait;
}
```

## Latest updates

For notes about latest changes please
read [`CHANGELOG`](https://github.com/ihor-drevetskyi/seo-common/blob/main/CHANGELOG.md), for required changes in your
code please read [`UPGRADE`](https://github.com/ihor-drevetskyi/seo-common/blob/main/UPGRADE.md)
chapter of documentation.

## Requirements:

- Compatible with PHP `>=7.4` versions.
- Compatible with Symfony `>=5.3` versions.

## License

This package is available under the [MIT License (MIT)](LICENSE). Please see [License File](LICENSE) for more
information.

## Authors

The component was originally created by [Ihor Drevetskyi](https://www.facebook.com/ihor.drevetskyi).
<p>I am engaged in the development of packages in my free time.
I would be grateful for a little financial assistance (sponsorship) to my bank account:
</p>

<p>
<b>UAH: 4441114452235219</b> |
<b><a href="https://send.monobank.ua/EipFYXFSC">https://send.monobank.ua/EipFYXFSC</a></b>
</p>

<p>
<b>USD:</b> <br>
Beneficiary
<br>
IBAN <b>UA933220010000026205312221935</b><br>
Account No <b> 5375418805868072</b><br>
Receiver <b>DREVETSKYI IHOR</b><br>
Account with Institution<br>
Bank: <b>JSC UNIVERSAL BANK</b><br>
City: <b>KYIV, UKRAINE</b><br>
Swift code: <b>UNJSUAUKXXX</b><br>
Intermediary<br>
Bank: <b>DEUTSCHE BANK TRUST CO. AMERICAS</b><br>
City: <b>NEW YORK, USA</b><br>
Account number: <b>4452477</b><br>
Swift code: <b>BKTRUS33XXX</b><br>
Details of payment: <b>
- private transfer |
- transfer to own account |
- help to relative |
- honorarium |
- compensation for … 
</b><br>
</p>

## Contact information
[LinkedIn](https://www.linkedin.com/in/ihor-drevetskyi/) | [Telegram](https://t.me/IhorDrevetskyi) | [Facebook](https://www.facebook.com/ihor.drevetskyi) | <a href="mailto:ihor.drevetskyi@gmail.com">EMAIL</a>
