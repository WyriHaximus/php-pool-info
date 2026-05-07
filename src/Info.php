<?php

declare(strict_types=1);

namespace WyriHaximus\PoolInfo;

/** @api */
final class Info
{
    /**
     * The amount of workers busy handling calls.
     */
    public const string BUSY = 'busy';

    /**
     * The amount of calls queued.
     */
    public const string CALLS = 'calls';

    /**
     * The amount of workers idling waiting for calls.
     */
    public const string IDLE = 'idle';

    /**
     * The current pool size.
     */
    public const string SIZE = 'size';

    /**
     * The configured total pool size.
     *
     * This differs from SIZE as size might be lower for pools only starting workers
     * when there are calls to be handled.
     */
    public const string TOTAL = 'total';
}
