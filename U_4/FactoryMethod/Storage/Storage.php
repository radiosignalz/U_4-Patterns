<?php
namespace app\Storage;
use app\interfaces\Storage;

class MySqlStorage implements Storage {
    public function query(string $sql): array{
        return [];
    }


}

class PglStorage implements Storage {
    public function query(string $sql): array{
        return [];
    }


}
class SqlStorage implements Storage
{
    public function query(string $sql): array
    {
        return [];
    }
}