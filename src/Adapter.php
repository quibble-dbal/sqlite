<?php

/**
 * Database abstraction layer for SqLite.
 *
 * @package Quibble\Sqlite
 * @author Marijn Ophorst <marijn@monomelodies.nl>
 * @copyright MonoMelodies 2015, 2016
 */

namespace Quibble\Sqlite;

use Quibble\Dabble;

/** SqLite-abstraction class. */
class Adapter extends Dabble\Adapter
{
    public function __construct($dsn, $username = null, $password = null, array $options = [])
    {
        return parent::__construct("sqlite:$dsn", $username, $password, $options);
    }

    public function value($value)
    {
        if (is_bool($value)) {
            return $value ? 1 : 0;
        }
        return parent::value($value);
    }

    public function interval($unit, $amount) : string
    {
        return "datetime('now', '$unit {$amount}s";
    }

    public function random() : string
    {
        return 'RANDOM()';
    }

    public function now() : string
    {
        return 'CURRENT_TIMESTAMP';
    }
}

