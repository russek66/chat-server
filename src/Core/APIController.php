<?php

namespace App\Core;

class APIController
{

    public function setNewMsg(MessageDTO $messageDTO): void
    {
        new SaveMsgInDB($messageDTO);
    }

    public function getNewMsg(MessageDTO $messageDTO): void
    {
        new GetMsgFromDB();
    }
}