<?php

declare(strict_types=1);

namespace WyriHaximus\PoolInfo;

/** @api */
interface PoolInfoInterface
{
    /** @return iterable<string, int> */
    public function info(): iterable;
}
