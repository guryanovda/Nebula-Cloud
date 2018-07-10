<?php
/**
 * Created by PhpStorm.
 * User: dmitriyguryanov
 * Date: 10.07.2018
 * Time: 2:56
 */


namespace Kernel\Database;

include ("IDatabase.php");


class SQLite3 implements IDatabase
{

    public function __construct($connectParams)
    {
        parent::__construct($connectParams);
    }

    public function Query($query)
    {
        // TODO: Implement Query() method.
    }

    public function First($query)
    {
        // TODO: Implement First() method.
    }

    public function Execute($query)
    {
        // TODO: Implement Execute() method.
    }

    public function Fetch($result)
    {
        // TODO: Implement Fetch() method.
    }
}