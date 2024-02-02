<?php

namespace App\Msg;

interface MsgInterface
{

    public function setNewMsg($messageDTO): void;

    public function getNewMsg(): void;

}