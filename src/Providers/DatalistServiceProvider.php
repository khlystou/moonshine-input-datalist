<?php

declare(strict_types=1);

namespace Khlystou\DatalistInputExtension\Providers;

use Illuminate\Support\ServiceProvider;

final class DatalistServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'datalist');
    }
}
