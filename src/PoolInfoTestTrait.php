<?php declare(strict_types=1);

namespace WyriHaximus\PoolInfo;

use function WyriHaximus\iteratorOrArrayToArray;
use WyriHaximus\TestUtilities\TestCase;

/**
 * @var TestCase
 */
trait PoolInfoTestTrait
{
    public function providePool(): iterable
    {
        yield [
            $this->poolFactory(),
        ];
    }

    /**
     * @test
     * @dataProvider providePool
     */
    public function assert_all_items_from_Info_are_returned_from_info_call(PoolInfoInterface $poolInfo): void
    {
        $items = iteratorOrArrayToArray($poolInfo->info());

        \ksort($items);

        self::assertSame(
            [
                Info::BUSY,
                Info::CALLS,
                Info::IDLE,
                Info::SIZE,
                Info::TOTAL,
            ],
            \array_keys(
                $items
            )
        );
    }

    /**
     * @test
     * @dataProvider providePool
     */
    public function assert_items_from_info_calls_are_all_intigers(PoolInfoInterface $poolInfo): void
    {
        foreach ($poolInfo->info() as $key => $value) {
            self::assertIsInt($value);
        }
    }

    abstract protected function poolFactory(): iterable;
}
