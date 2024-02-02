<?php

namespace App\Controller;

use App\Msg\MsgInterface;

class Controller
{

    public function __construct(protected MsgInterface $msgType)
    {
    }
}