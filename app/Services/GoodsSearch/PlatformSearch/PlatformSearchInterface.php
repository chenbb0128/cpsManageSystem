<?php

namespace App\Services\GoodsSearch\PlatformSearch;

interface PlatformSearchInterface
{
    public function search(string $keyword): array;
}
