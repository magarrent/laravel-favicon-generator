# Generate favicons from Images

[![Latest Version on Packagist](https://img.shields.io/packagist/v/magarrent/favicon-generator.svg?style=flat-square)](https://packagist.org/packages/magarrent/favicon-generator)

## Installation

```
Requires PHP Imagick
```

You can install the package via composer:

```bash
composer require magarrent/favicon-generator
```


## Usage

To use your own image and convert it to the different favicons versions, use these methods.
This will generate a "favicon" folder to your public_path with the different favicons formats and versions.
Will also generate some XML and webmanifest according to the web standards.

---
Use this methods in your own scenario, when you upload the image, or just a console command, whatever.
Just write your input path and optionally the public output path.
If you don't specify the output (2nd param), the favicons will be saved in ``public/favicons``

```php
$favicon = new FaviconGenerator('path-to-your-image', 'optional-public-dist-path');
$favicon->generateFaviconsFromImagePath();
```

Once you generated the icons, just write these line into your ``<head>`` section of your **HTML**

```php
{!! \Magarrent\FaviconGenerator\FaviconGenerator::generateHtmlMetaIcons() !!}
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Roadmap

 - Tests
 - Generate icons from Image class, not from String path

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Marc Garcia Torrent](https://github.com/magarrent)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
