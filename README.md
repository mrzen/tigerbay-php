Tigerbay PHP
============



Usage
-----

### Initialize The Client
~~~php
use Mrzen\Tigerbay;

$config = (new Tigerbay\Config())->setBaseURL($baseURL)         // Required
                                 ->setClientId($clientId)       // Required
                                 ->setSecret($clientSecret)     // Required
                                 ->setTimeout(10.0)             // Optional

$client = new Tigerbay\Client($config);

// Get cache stats

$stats = $client->stats();

echo 'System contains ' . $stats->getItemCount() . ' tours';
~~~
