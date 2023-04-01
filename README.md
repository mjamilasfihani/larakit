<p align="center"><a href="https://github.com/mjamilasfihani/laravel-devkit" _target="blank"><img src="https://via.placeholder.com/400x200" width="400" alt="Project Logo"></a></p>

<p align="center">
<a href="https://github.com/mjamilasfihani/laravel-devkit/actions/workflows/phpunit.yml"><img src="https://github.com/mjamilasfihani/laravel-devkit/workflows/PHPUnit/badge.svg" alt="PHPUnit Result"></a>
<a href="https://github.com/mjamilasfihani/laravel-devkit/actions/workflows/phpstan.yml"><img src="https://github.com/mjamilasfihani/laravel-devkit/workflows/PHPStan/badge.svg" alt="PHPStan Result"></a>
<a href="https://github.com/mjamilasfihani/laravel-devkit/actions/workflows/deptrac.yml"><img src="https://github.com/mjamilasfihani/laravel-devkit/workflows/Deptrac/badge.svg" alt="Deptrac Result"></a>
<a href="https://coveralls.io/github/mjamilasfihani/laravel-devkit?branch=develop"><img src="https://coveralls.io/repos/github/mjamilasfihani/laravel-devkit/badge.svg?branch=develop" alt="Coverage Result"></a>
</p>

## About

Laravel Devkit is a website project about ...?

## Prerequisites

Usage of `mjamilasfihani\laravel-devkit` requires the following:

- A [Laravel v9.x](https://laravel.com/docs/9.x) based project
- [Composer](https://getcomposer.org) for package management
- PHP 8.1+
- NodeJS 16.0+ | 18.0+
- ...?

## Usage

There is a few task before you can begin develop:

Configure the composer authentication:

```json
{
    "http-basic": {
        "mjamilasfihani.repo.repman.io": {
            "token": "4506d25a61b8c018a8e525256f4b26d73b5a34afec0869420cce0dcb10788a32"
        }
    }
}
```

Add these lines to your composer.json file:

```json
{
    "repositories": [
        {
            "type": "composer",
            "url": "https://mjamilasfihani.repo.repman.io"
        }
    ]
}
```

After the first step is done:

- First step
- Second
- ...?

To make sure CI/CD is working:

- Install `pcov` extension
- Install `redis` extension
- Create `build` folder in the root directory structure
- Run `composer ci` for passed all the tests
- `composer style` or `composer cs-fix` is fixing the style code
- `vendor\bin\rector process` is fixing the rector test
- For infection test, please run periodically (it's heavy test)
- To run infection just call `composer mutate`

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

[None](https://github.com/mjamilasfihani/laravel-devkit)
