<?php

namespace App\DTO;

readonly class MessageDTO
{

    public function __construct
    (
        public string $author,
        public string $msg
    ) {
    }


}