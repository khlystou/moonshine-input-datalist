## Input extension - display the datalist for input

Input extension - display the datalist for input

### Installation

```
composer require khlystou/moonshine-input-datalist
```

### Usage

```php
use Khlystou\DatalistInputExtension\InputExtensions\Datalist;

$cities = collect(['Minsk', 'Grodno', 'Gomel', 'Mogilev']);

Text::make('City')
    ->extension(new Datalist($cities)),
// or
Text::make('City')
    ->extension(new Datalist($cities, 'cities')),
```