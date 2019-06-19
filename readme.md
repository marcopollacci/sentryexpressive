[![Maintainability](https://api.codeclimate.com/v1/badges/3a27910bfff075b01494/maintainability)](https://codeclimate.com/github/marcopollacci/sentryexpressive/maintainability)

[![Average time to resolve an issue](http://isitmaintained.com/badge/resolution/marcopollacci/sentryexpressive.svg)](http://isitmaintained.com/project/marcopollacci/sentryexpressive "Average time to resolve an issue") [![Percentage of issues still open](http://isitmaintained.com/badge/open/marcopollacci/sentryexpressive.svg)](http://isitmaintained.com/project/marcopollacci/sentryexpressive "Percentage of issues still open")

# Sentry Delegator for Zend Expressive Framework

## Install by Composer
```
composer require marcopollacci/sentryexpressive
```

## Usage

1) Set at your config sentry token (if null given, no exception where send to sentry). Es:
```php
return [
    'sentry' => [
        'dsn' => 'https://<your url>>/<your id>',
        'environment' => 'produzione' #optional
    ]
];
```
2) Enjoy it :D!

## Additional usage in try / catch statament

Code Example
```php
        try {
            throw new \Exception('something');
        }catch(\Exception $e){
            \Sentry\captureException($e);
            /* something else you want */
        }
```
