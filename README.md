<img align=right width="168" src="docs/gouef_logo.png">

# Currency
The `currency` package provides functionality to manage and validate different currency codes and their details. It contains a list of currency codes with information such as the name, symbol, and minor units (decimal places). You can use this package to retrieve currency information and validate whether a currency code exists. ([ISO 4217](https://en.wikipedia.org/wiki/ISO_4217))

[![Static Badge](https://img.shields.io/badge/Github-phpuef%2Fgithub--lib--template-blue?style=for-the-badge&logo=github&link=github.com%2Fphpuef%2Fcurrency)](https://github.com/phpuef/currency)

[![Packagist Downloads](https://img.shields.io/packagist/dt/phpuef/currency)](https://packagist.org/packages/phpuef/currency)
[![GitHub stars](https://img.shields.io/github/stars/phpuef/currency?style=social)](https://github.com/phpuef/currency/stargazers)
![PHPStan](https://github.com/phpuef/currency/actions/workflows/phpstan.yml/badge.svg)
[![Tests](https://github.com/phpuef/currency/actions/workflows/tests.yml/badge.svg)](https://github.com/phpuef/currency/actions/workflows/tests.yml)
[![codecov](https://codecov.io/github/phpuef/currency/branch/main/graph/badge.svg?token=YUG8EMH6Q8)](https://codecov.io/github/phpuef/currency)

## Versions
![Stable Version](https://img.shields.io/github/v/release/phpuef/currency?label=Stable&labelColor=green)
![GitHub Release](https://img.shields.io/github/v/release/phpuef/currency?label=RC&include_prereleases&filter=*rc*&logoSize=diago)
![GitHub Release](https://img.shields.io/github/v/release/phpuef/currency?label=Beta&include_prereleases&filter=*beta*&logoSize=diago)


## Features

- Search for a currency by its code (e.g., USD, EUR).
- Validate if a currency code exists.
- Return detailed information such as currency name, symbol, and minor units.

## Installation

```shell
composer require gouef/currency
```

## Usages

### Finding a currency
You can use the `FindCurrency` function to search for a currency by its code. It returns a pointer to the `Currency` object, which contains details like the name, symbol, and minor units.

```php
<?php

use Phpuef\Currency\Currencies;

class Example {

    public function get(string $code) {
        $currency = Currencies::FindCurrency($code);
        //
    }

}

```

### Validating a Currency Code
To check whether a currency code is valid, use the `ValidateCurrency` function. It returns `true` if the code exists and `false` otherwise.

```php
<?php

use Phpuef\Currency\Currencies;

class Example {

    public function validate(string $code): bool {
        return Currencies::ValidateCurrency($code);
    }

}
```


## Contributing

Read [Contributing](CONTRIBUTING.md)

## Contributors

<div>
<span>
  <a href="https://github.com/JanGalek"><img src="https://raw.githubusercontent.com/phpuef/currency/refs/heads/contributors-svg/.github/contributors/JanGalek.svg" alt="JanGalek" /></a>
</span>
<span>
  <a href="https://github.com/actions-user"><img src="https://raw.githubusercontent.com/phpuef/currency/refs/heads/contributors-svg/.github/contributors/actions-user.svg" alt="actions-user" /></a>
</span>
</div>

## Join our Discord Community! 🎉

[![Discord](https://img.shields.io/discord/1334331501462163509?style=for-the-badge&logo=discord&logoColor=white&logoSize=auto&label=Community%20discord&labelColor=blue&link=https%3A%2F%2Fdiscord.gg%2FwjGqeWFnqK
)](https://discord.gg/wjGqeWFnqK)

Click above to join our community on Discord!
