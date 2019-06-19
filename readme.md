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
