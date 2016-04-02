<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 10.02.16
 * Time: 16:08
 */

namespace perf2k2\yii\acsa;


use yii\db\Command;
use yii\db\Query;

class Db {

    public static function instance()
    {
        return \Yii::$app->db;
    }

    public static function command()
    {
        $command = new Command();
        $command->db = self::instance();
        return $command;
    }

    public static function query()
    {
        return new Query();
    }

    public static function transaction()
    {
        return self::instance()->beginTransaction();
    }
}