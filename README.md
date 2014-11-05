# TinyMail

[![Build Status](https://travis-ci.org/tsmsogn/TinyMail.svg?branch=master)](https://travis-ci.org/tsmsogn/TinyMail)

## Installation

Put your app plugin directory as `TinyMail`.

### Enable plugin

In 2.0 you need to enable the plugin your app/Config/bootstrap.php file:

```php
<?php
CakePlugin::load('TinyMail', array('bootstrap' => false, 'routes' => true));
?>
```

Enable admin routing in app/Config/core.php file:

```php
<?php
Configure::write('Routing.prefixes', array('admin'));
?>
```

## Lisence

The MIT License (MIT)
