<?php

namespace App\Msg;

use App\Database\DatabaseInterface;

class MsgGlobalGet
{

    public function __construct(private DatabaseInterface $DB)
    {
    }
}