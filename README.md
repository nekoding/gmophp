#  Gmo payment gateway php library
Library for easy access API GMOPG

## Instalation
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
and many more.

##  Original Source

This repo just modification from :
> [k1LoW/gmo-pg-php](https://github.com/k1LoW/gmo-pg-php)

so the usage same as original source.