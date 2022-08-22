<?php

namespace app\interfaces;
use app\FactoryMethod;
use app\repositories\MysqlRepository;

interface Storage
{
    function query(string $sql):array;
}
