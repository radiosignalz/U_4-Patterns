<?php

namespace app\repositories;


use app\Storage\SqlStorage;
use app\Storage\MySqlStorage;
use app\Storage\PgLStorage;
Use app\FactoryMethod\Repository;
use app\interfaces\Storage;





class MysqlRepository extends Repository
{
    protected function getStorage(): Storage
    {
        return new MySqlStorage();

    }

}

class PgRepository extends Repository
{
    protected function getStorage(): Storage
    {
        return new PglStorage();

    }

}

class SqlRepository extends Repository
{
    protected function getStorage(): Storage
    {
        return new SqlStorage();

    }
}