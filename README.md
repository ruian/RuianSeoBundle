RuianSeoBundle
===================

* [Installation](#installation)
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
