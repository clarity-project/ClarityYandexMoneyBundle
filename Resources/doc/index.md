ClarityPredictionIOBundle Emergency
==========================

Nice to see you learning our ClarityPredictionIOBundle!

**Basics**

* [Installation](#installation)
* [Usage](#usage)

<a name="installation"></a>

## Installation

### Step 1) Get the bundle

#### Simply using composer to install bundle (symfony from 2.1 way)

    "require" :  {
        // ...
        "clarity-project/yandex-money-bundle": "dev-master"
        // ...
    }

You can try to install ClarityYandexMoneyBundle with `deps` file (symfony 2.0 way) like here -  [Symfony doc](http://symfony.com/doc/2.0/cookbook/workflow/new_project_git.html#managing-vendor-libraries-with-bin-vendors-and-deps), 
or with help of `git submodule` functionality - [Git doc](http://git-scm.com/book/en/Git-Tools-Submodules#Starting-with-Submodules).
But it's not tested ways! If you can't do it - just send approve to us, or fork and edit this documentation to solve our doubts =)

### Step 2) Register the namespaces

If you install bundle via composer, use the auto generated autoload.php file and skip this step.
Else you may need to register next namespace manualy:

``` php
<?php
// app/autoload.php
$loader->registerNamespaces(array(
    // ...
    'Clarity\YandexMoneyBundle' => __DIR__ . '/../vendor/clarity-project/yandex-money-bundle/Clarity/YandexMoneyBundle',
    // ...
));
```

### Step 3) Register new bundle

Put new line into AppKernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Clarity\YandexMoneyBundle\ClarityYandexMoneyBundle(),
    );
    // ...
}
```

<a name="usage"></a>

## Usage (Under construction!)

For using client from [official PHP-SDK](https://github.com/yandex-money/yandex-money-sdk-php) as service in symfony you are need add configuration:

``` yml
# app/config/config.yml

# ...
yandex_money:
    client_id: YOUR_APP_CLIENT_ID
    redirect_uri: YOUR_APP_REDIRECT_URI
    client_secret: YOUR_APP_CLIENT_SECRET
    log_path: %kernel.root_dir%/logs/yandex_money.log
    scope: ['account-info', 'operation-history', 'operation-details']
# ... 
```


Thanks for reading & using! =)
