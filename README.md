# adcumulus-php-client
A Client for Adcumulus API

This package is still in beta. Please, create a PR if you detects some error.

## Installation

```js
"require": {
    "bytelovers/adcumulus-php-client": "dev"
}
```

## Example

```php
$client = new Bytelovers\AdCumulus\Client(
    'API_DOMAIN',
    'API_KEY',
    'API_SECRET' //ONLY for Admin API
    );

$offer = $client->api('Admin\Offer');

try {
    $response = $offers->getById(<OFFER_ID>);

    var_dump($response);
} catch (Bytelovers\AdCumulus\Exception $e) {
    echo($e->getMessage());
}
```

## Supported
- Admin API

##TODO
* Affiliate API
* Advertiser API