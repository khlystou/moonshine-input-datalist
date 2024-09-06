<?php

declare(strict_types=1);

namespace Khlystou\DatalistInputExtension\InputExtensions;

use MoonShine\InputExtensions\InputExtension;
use Illuminate\Support\Collection;

class Datalist extends InputExtension
{
    protected string $view = 'datalist::input-extensions.datalist';

    public function __construct(
        protected array|Collection $items,
        protected ?string $name
    )
    {
        parent::__construct($items);

        if (is_null($this->name)) {
            $this->name = str()->random();
        }

        $this->sData = [
            "input: \$refs.extensionInput",
            "init() {
                input.setAttribute('list', '{$this->getName()}')
            }"
        ];
    }

    public function getName(): ?string
    {
        return $this->name;
    }
}