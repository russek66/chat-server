<?php

namespace App\Msg;

use App\Database\DatabaseInterface;
use App\DTO\MessageDTO;

readonly class MsgGlobalSave
{

    public function __construct
    (
        private MessageDTO $messageDTO,
        private DatabaseInterface $DB
    )
    {
        $this->DB
            ->table('msg')
            ->insert(
                [
                    'user_name' => $this->messageDTO->author,
                    'user_msg' => $this->messageDTO->msg,
                    'user_msg_creation_timestamp' => time()
                ]
            );
    }
}