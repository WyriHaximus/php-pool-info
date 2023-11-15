<?php

declare(strict_types=1);

namespace WyriHaximus\Tests\PoolInfo;

use WyriHaximus\PoolInfo\PoolInfoInterface;
use WyriHaximus\PoolInfo\PoolInfoTrait;

final class PoolInfoStub implements PoolInfoInterface
{
    use PoolInfoTrait;

    private function infoBusy(): int
    {
        return 1;
    }

    private function infoCalls(): int
    {
        return 2;
    }

    private function infoIdle(): int
    {
        return 3;
    }

    private function infoSize(): int
    {
        return 4;
    }

    private function infoTotal(): int
    {
        return 5;
    }
}
