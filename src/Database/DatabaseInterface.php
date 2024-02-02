<?php

namespace App\Database;

interface DatabaseInterface
{

    public function connect();

    public function table(string $string): self;

    public function insert(array $string);
}