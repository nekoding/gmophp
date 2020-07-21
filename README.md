#  Gmo payment gateway php library
Library for easy access API GMOPG

## Installation
```
composer require nekoding/gmo-php
```

## Usage
**Example**  
>Entry transaction using credit card
```php
$shop = new Shop('https://pt01.mul-pay.jp/payment', 'your_shop_id', 'your_shop_pass');
$result = $shop->entryTran($param1, $param2, $param3, $param4);

print_r($result)
```
>Immediate Transaction using credit card
```php
$shop = new ImmediateShop('https://pt01.mul-pay.jp/payment', 'your_shop_id', 'your_shop_pass');

//You need to adding required parameter
$data = array(
  'token' => 'TOKEN_PAYMENT',
  'method'  => 1
)

// This function 'get()' will return response in Array
// if you want response in json you can use toJson()
// or if you want response in raw string you can use rawString()

$response = $shop->creditCard('ORDER-TEST', 'AUTH', 100, $data)->get();

print_r($response);

```

and many more.

##  Original Source

This repo just modification from :
> [k1LoW/gmo-pg-php](https://github.com/k1LoW/gmo-pg-php)

so the usage same as original source.
