<?php declare(strict_types=1);

namespace WyriHaximus\Tests\PoolInfo;

use WyriHaximus\PoolInfo\PoolInfoInterface;
use WyriHaximus\PoolInfo\PoolInfoTrait;

final class PoolInfoStub implements PoolInfoInterface
{
    use PoolInfoTrait;

    protected function infoBusy(): int
    {
        return 1;
    }

    protected function infoCalls(): int
    {
        return 2;
    }

    protected function infoIdle(): int
    {
        return 3;
    }

    protected function infoSize(): int
    {
        return 4;
    }

    protected function infoTotal(): int
    {
        return 5;
    }
}
