<?php

class Repository
{

    public function findById(int $id)
    {
        $sql = "...";
        return (new MysqlStorage())->query($sql);
    }
}

interface Storage {
pubic function query(string $sql):array;
}

class MysqlStorage {
        pubic function query(string $sql):array
{
return [];

}

}
class PgStorage {
pubic function query(string $sql):array
{
    return [];

}
    class SqlStorage {
pubic function query(string $sql):array
{
    return [];

}

}
