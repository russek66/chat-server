<?php

namespace App\Controller;

use App\Database\MysqlConnection;
use App\DTO\MessageDTO;
use App\Msg\MsgGlobal;


class GlobalMsgController extends Controller
{

    public function __construct()
    {
        parent::__construct(
            new MsgGlobal(new MysqlConnection())
        );
    }

    public function setNewMsg(MessageDTO $messageDTO): void
    {
        $this->msgType->setNewMsg($messageDTO);
    }

    public function getNewMsg(): void
    {
        $this->msgType->getNewMsg();
    }
}