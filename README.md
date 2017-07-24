# HTTP Header Fields Constants for PHP

[![Latest Stable Version](https://img.shields.io/packagist/v/lmc/http-constants.svg?style=flat-square)](https://packagist.org/packages/lmc/http-constants)
[![Travis Build Status](https://img.shields.io/travis/lmc-eu/http-constants.svg?style=flat-square)](https://travis-ci.org/lmc-eu/http-constants)
[![Total Downloads](https://img.shields.io/packagist/dt/lmc/http-constants.svg?style=flat-square)](https://packagist.org/packages/lmc/http-constants)
[![License](https://img.shields.io/packagist/l/lmc/http-constants.svg?style=flat-square)](https://packagist.org/packages/lmc/http-constants)

The missing PHP constants definition for header fields of your HTTP requests and responses. 

Stop placing typos and repeating string identifiers of the headers in your code!

Could be used when interacting with headers using [pure PHP], [Guzzle], [Symfony HttpFoundation], [Zend HTTP], [Zend Diactoros] etc.

Contains constants for headers defined in [IANA list] (both Permanent and Provisional) and some common non-standard headers based on [Wikipedia list].

## Install

```sh
$ composer require lmc/http-constants
```

Note you will need to have [Composer](https://getcomposer.org/) installed to do this.

## Usage

```php
<?php

namespace My;

use Lmc\HttpConstants\Header;

class Example
{
    public function exampleWithGuzzle()
    {
        $client = new \GuzzleHttp\Client();
        
        $response = $client->request(
            'GET',
            'https://api.foo/bar',
             ['headers' => [Header::ACCEPT_ENCODING => 'gzip']]
       );

        echo $response->getHeaderLine(Header::CONTENT_TYPE);
    }

    public function exampleWithSymfonyHttpFoundation()
    {
        $response = new \Symfony\Component\HttpFoundation\Response();
            
        $response->headers->set(Header::ACCESS_CONTROL_ALLOW_ORIGIN, 'www.jobs.cz');
    }

    public function exampleWithPurePhp()
    {
        header(Header::CONTENT_TYPE . ': application/pdf');
        header(Header::CACHE_CONTROL .  ': no-cache, must-revalidate');
    }
}

```

## Changelog
For latest changes see [CHANGELOG.md](CHANGELOG.md) file. We follow [Semantic Versioning](http://semver.org/).

## License
The library is open source software licensed under the [MIT license](LICENCE.md).

[pure PHP]: http://php.net/manual/en/function.header.php
[Guzzle]: https://github.com/guzzle/guzzle
[Symfony HttpFoundation]: https://symfony.com/doc/current/components/http_foundation.html
[Zend HTTP]: https://zendframework.github.io/zend-http/
[Zend Diactoros]: https://zendframework.github.io/zend-diactoros/
[IANA list]: https://www.iana.org/assignments/message-headers/message-headers.xml
[Wikipedia list]: https://en.wikipedia.org/wiki/List_of_HTTP_header_fields
