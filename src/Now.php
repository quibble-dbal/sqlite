<?php

namespace Quibble\Sqlite;

use Quibble\Dabble;

class Now extends Dabble\Now
{
    public function __construct()
    {
        parent::__construct('CURRENT_TIMESTAMP');
    }
}

