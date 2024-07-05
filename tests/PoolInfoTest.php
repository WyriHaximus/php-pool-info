<?php

declare(strict_types=1);

namespace WyriHaximus\Tests\PoolInfo;

use WyriHaximus\PoolInfo\PoolInfoInterface;
use WyriHaximus\PoolInfo\PoolInfoTestTrait;
use WyriHaximus\TestUtilities\TestCase;

/** @internal */
final class PoolInfoTest extends TestCase
{
    use PoolInfoTestTrait;

    private static function poolFactory(): PoolInfoInterface
    {
        return new PoolInfoStub();
    }
}
