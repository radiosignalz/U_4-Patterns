<?php

namespace app\FactoryMethod;
use app\interfaces\Storage;


abstract class Repository
{

    public function findById(int $id): array
    {
        $sql = "SELECT ALL FROM 'DB', id={int $id}";
        $storage = $this->getStorage();
        return $storage->query($sql);
    }
   abstract protected function getStorage(): Storage;

}



echo "FactoryMethod";

//class MysqlRepository extends Repository
//{
//protected function getStorage(): Storage
//{
//    return new MySqlStorage();
//
//}
//
//}
//class PgRepository extends Repository
//{
//    protected function getStorage(): Storage
//    {
//        return new PglStorage();
//
//    }
//
//}
//
//class SqlRepository extends Repository
//{
//    protected function getStorage(): Storage
//    {
//        return new SqlStorage();
//
//    }
//}

//interface Storage {
//    function query(string $sql):array;
//}

//class MySqlStorage implements Storage {
//    public function query(string $sql): array{
//        return [];
//    }
//
//
//}
//
//class PglStorage implements Storage {
//    public function query(string $sql): array{
//        return [];
//    }
//
//
//}
//class SqlStorage implements Storage {
//    public function query(string $sql): array{
//        return [];
//    }


