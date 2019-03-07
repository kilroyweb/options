# Package Has Moved

Please instead use https://github.com/binarycabin/options

# Options

Class-based select options for Laravel

## Installation

Add to providers:

KilroyWeb\Options\Providers\OptionServiceProvider::class,

publish config:

php artisan vendor:publish --tag=config

## Generate Permissions

php artisan make:option CLASSNAME

ie:

php artisan make:option County

## Display the option

$field->options(\App\Options\County::get('---')) !!}

