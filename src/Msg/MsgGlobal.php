<?php

namespace App\Msg;

use App\Database\DatabaseInterface;
use App\Database\MysqlConnection;

readonly class MsgGlobal  implements MsgInterface
{

    public function __construct(private DatabaseInterface $databaseConn)
    {
    }

    public function setNewMsg($messageDTO): void
    {
        // TODO: Implement setNewMsg() method.
        new MsgGlobalSave($messageDTO, $this->databaseConn);
    }

    public function getNewMsg(): void
    {
        // TODO: Implement getNewMsg() method.
        new MsgGlobalGet($this->databaseConn);
    }
}