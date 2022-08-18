<?php
//Разработать и реализовать на PHP собственную ORM (Object-Relational Mapping —прослойку между
//базой данных и кодом) посредством абстрактной фабрики. Фабрики будут реализовывать
//интерфейсы СУБД MySQLFactory, PostgreSQLFactory, OracleFactory. Каждая фабрика возвращает
//объекты, характерные для конкретной СУБД. Пример компонентов:
//● DBConnection — соединение с базой,
//● DBRecrord — запись таблицы базы данных,
//● DBQueryBuiler — конструктор запросов к базе.
//Должна получиться гибкая система, позволяющая динамически менять базу данных и
//инкапсулирующая взаимодействие с ней внутри продуктов конкретных фабрик. Углубляться в детали
//компонента не обязательно — достаточно их наличия.
namespace app\AbstractFactoryMethod;

use app\interfaces\Storage;
use app\repositories\MysqlRepository;

abstract class AbstractFactoryMethod
{
    private $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }
        public function findById(int $id): array
    {
        $sql = "SELECT ALL FROM 'DB', id={int $id}";
        $storage = $this->getStorage();
        return $storage->query($sql);
    }

        abstract protected function getStorage(): Storage;



}
abstract class AbstractFactoryConnection extends AbstractFactoryMethod
{
    abstract public function createConnection (int $id): Storage;

}

