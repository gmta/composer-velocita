# Velocita Composer plugin

[![Packagist Version](https://img.shields.io/packagist/v/gmta/composer-velocita)](https://packagist.org/packages/gmta/composer-velocita)
[![Packagist Downloads](https://img.shields.io/packagist/dt/gmta/composer-velocita)](https://packagist.org/packages/gmta/composer-velocita)
![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/gmta/composer-velocita)
[![License](https://img.shields.io/github/license/gmta/composer-velocita)](https://github.com/gmta/composer-velocita/blob/master/LICENSE)

Fast and reliable Composer package downloads using Velocita: a caching reverse proxy that does not require you to
modify your projects.

## Getting Started

### Prerequisites

* PHP 7.4 or newer
* A running [Velocita Proxy](https://github.com/gmta/velocita-proxy) instance
* Composer 2

### Installation

Installation and configuration of the Velocita plugin is global, so you can use it for all projects that use Composer
without having to add it to your project's `composer.json`.

```
composer global config allow-plugins.gmta/composer-velocita true
composer global require gmta/composer-velocita
composer velocita:enable https://url.to.your.velocita.tld/
```

### Usage

After enabling and configuring Velocita, it is automatically used for all Composer projects when running `require`,
`update`, `install`, etcetera.

### Removal

Disable the plugin by executing:

```
composer velocita:disable
```

If you want to remove the plugin completely, execute:

```
composer global remove gmta/composer-velocita
```

## Authors

* Jelle Raaijmakers - [jelle@gmta.nl](mailto:jelle@gmta.nl) / [GMTA](https://github.com/GMTA)

## Contributing

Raise an issue or submit a pull request on [GitHub](https://github.com/gmta/composer-velocita).

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
