<?php

declare(strict_types=1);

namespace WyriHaximus\PoolInfo;

use function array_keys;
use function ksort;

trait PoolInfoTestTrait
{
    /** @return iterable<array<PoolInfoInterface>> */
    public static function providePool(): iterable
    {
        yield [
            static::poolFactory(),
        ];
    }

    /**
     * @test
     * @dataProvider providePool
     */
    public function assertAllItemsFromInfoAreReturnedFromInfoCall(PoolInfoInterface $poolInfo): void
    {
        $items = [...$poolInfo->info()];

        ksort($items);

        self::assertSame(
            [
                Info::BUSY,
                Info::CALLS,
                Info::IDLE,
                Info::SIZE,
                Info::TOTAL,
            ],
            array_keys(
                $items,
            ),
        );
    }

    abstract protected static function poolFactory(): PoolInfoInterface;
}
