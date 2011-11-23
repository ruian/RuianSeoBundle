RuianSeoBundle
===================
[![Build Status](https://secure.travis-ci.org/ruian/RuianSeoBundle.png)](http://travis-ci.org/ruian/RuianSeoBundle)


* [Installation](#installation)
* [Use it](#use)
* [Todo](#todo)

<a name="installation"></a>

## Installation

### Step 1) Get the bundle

First, grab the RuianSeoBundle :

Add the following lines to your  `deps` file and then run `php bin/vendors
install`:

```
[RuianSeoBundle]
    git=git://github.com/ruian/RuianSeoBundle.git
    target=bundles/Ruian/SeoBundle
```

### Step 2) Register the namespaces

Add the following two namespace entries to the `registerNamespaces` call
in your autoloader:

``` php
<?php
// app/autoload.php
$loader->registerNamespaces(array(
    // ...
    'Ruian' => __DIR__.'/../vendor/bundles',
    // ...
));
```

### Step 3) Register the bundle

To start using the bundle, register it in your Kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Ruian\SeoBundle\RuianSeoBundle(),
    );
    // ...
)
```

<a name="use"></a>
## Use it

You can set your title and metas with the DIC

``` yaml
#/app/config/config.yml
ruian_seo:
    title: "My website title"
    metas:
        keywords: "Cool, stuff"
        description: "a cool description"
        ...: ...
    metas_http_equiv:
        charset: "utf8"
        ...: ...
```

Or with your controller

``` php
//... DefaultController.php
public function indexAction()
{
    // ...
    $this->get('ruian.seo.page')->setTitle("My website title");
    $this->get('ruian.seo.page')->setMeta('keywords', "Cool, stuff");
    $this->get('ruian.seo.page')->setMeta('description', "a cool description");
    $this->get('ruian.seo.page')->setMetaHttpEquiv('charset', 'utf8');
    // ...
)
```

And now see the result in your layout/view

## PHP

``` php
<html>
<head>
    <?php echo $view['ruian.seo.page']->renderTitle() ?>
    <?php echo $view['ruian.seo.page']->renderMetas() ?>
</head>
<body>
    <!-- ... -->
</body>
</html>
```
## TWIG

``` twig
<html>
<head>
    {{ ruian_seo_title() }}
    {{ ruian_seo_metas() }}
</head>
<body>
    <!-- ... -->
</body>
</html>
```



<a name="todo"></a>
## TODO
...