<?php

namespace App\Services\GoodsSearch;

use App\Services\GoodsSearch\PlatformSearch\JdSearch;
use App\Services\GoodsSearch\PlatformSearch\PddSearch;
use App\Services\GoodsSearch\PlatformSearch\PlatformSearchInterface;
use App\Services\GoodsSearch\PlatformSearch\TbSearch;

class GoodsSearch
{
    private PlatformSearchInterface $platformSearch;

    public function setSearchStrategy(PlatformSearchInterface $strategy)
    {
        $this->platformSearch = $strategy;
    }

    public static function getSearchPlatform(string $keyword): PlatformSearchInterface
    {
        if (strpos($keyword, 'jd') !== false) {
            return new JdSearch();
        } elseif (strpos($keyword, 'tb') !== false || strpos($keyword, '淘宝') !== false) {
            return new TbSearch();
        } elseif (strpos($keyword, '拼多多') !== false) {
            return new PddSearch();
        } else {
            throw new \Exception("无法确定平台，请输入明确的平台关键词");
        }
    }

    public function search($keyword)
    {
        return $this->platformSearch->search($keyword);
    }
}
