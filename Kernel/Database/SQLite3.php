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
    private $db;

    public function __construct($connectParams)
    {
        $this->db = new \SQLite3($connectParams['filename']);
    }

    public function Query($query)
    {
        $query = \SQLite3::escapeString($query);
        return $this->db->query($query);
    }

    public function First($query)
    {
        $query = \SQLite3::escapeString($query);
        return $this->db->querySingle($query,true);
    }

    public function Execute($query)
    {
        $query = \SQLite3::escapeString($query);
        return $this->db->exec($query);
    }

    public function Fetch($result)
    {
        return $result->fetchArray(SQLITE3_ASSOC);
    }
}