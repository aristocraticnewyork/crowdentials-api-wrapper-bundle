Crowdvalley Crowdentials Api Wrapper Bundle
===========================================

Provides integration of the `crowdvalley/crowdentials-api-wrapper` library into
the Symfony2 framework.

## Installation

### Step 1: Download bundle using composer

Add it in your composer.json:

``` js
{
    "require": {
        "crowdvalley/crowdentials-api-wrapper": "dev-master"
    }
}
```

Now tell composer to download the bundle by running the command:

``` bash
$ php composer.phar update crowdvalley/crowdentials-api-wrapper
```

### Step 2: Enable the bundle

Enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Crowdvalley\CrowdentialsApiWrapperBundle\CrowdvalleyCrowdentialsApiWrapperBundle(),
    );
}
```

### Step 3: Configure the bundle

Add the following configuration to your `config.yml` file.

``` yaml
# app/config/config.yml
crowdvalley_crowdentials_api_wrapper:
    # Your private api key
    api_key: 'your-key'
    # The base url
    base_url: 'http://sandbox.crowdentials.com/cai/api/v2'
```

## Usage

Now you have access to the service `crowdentials_api`:

``` php
/** @var \Crowdvalley\Crowdentials\Api\Accreditation\Wrapper @api */
$api = $this->getContainer()->get('crowdentials_api');
```

You can read more about the api wrapper [here](https://github.com/crowdvalley/crowdentials-api-wrapper/).