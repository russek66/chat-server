<?php

namespace App\Core;

readonly class SaveMsgInDB
{

    public function __construct(private MessageDTO $messageDTO, private Database $database = new Database())
    {
        $this->save();
    }

    private function save(): void
    {
        $sql = "INSERT INTO msg (
                    user_name, 
                    user_msg, 
                    user_msg_creation_timestamp)
                VALUES (
                    :user_name, 
                    :user_msg, 
                    :user_msg_creation_timestamp)";

        $query = $this->database
            ?->getFactory()
            ?->getConnection()
            ?->prepare($sql);

        $query->execute([
            ':user_name' => $this->messageDTO->author,
            ':user_msg' => $this->messageDTO->msg,
            ':user_msg_creation_timestamp' => time()
        ]);

        if ($query->rowCount() <=> 1) {

        }
    }

}