<?php
/**
 * Created by PhpStorm.
 * User: givy11
 * Date: 10/07/2018
 * Time: 23:53
 */

namespace Kernel;

include ('Database/SQLite3.php');

use Kernel\Database\SQLite3;

class System
{
    public static function systemInit()
    {
        session_start();
        $system = parse_ini_file("Nebula.ini", true);
        $translation = parse_ini_file("Languages/" . $system['Configuration']['language'] . ".ini", true);
        $system['Translation'] = $translation;
        if ($system['Configuration']['debug'] == true){
            error_reporting(E_ERROR || E_PARSE);
        }
        else{
            error_reporting();
        }
        return $system;
    }

    public static function authorise($login, $password, $configuration)
    {
        $array['filename'] = $configuration['Settings']['db_url'];
        $db = new SQLite3($array);
        $result = $db->Query('SELECT * FROM User WHERE login=$login AND password=$password');
        if ($result){
            $_SESSION['user'] = $login;
        }
    }

    public static function isAuthorised()
    {
        if ($_SESSION['user']) {
            return true;
        } else {
            return false;
        }
    }

    public static function authorisationRequired()
    {
        if (!System::isAuthorised()) :
            header("Location: login.php");
        endif;
    }

    public static function onlyForAnonimous()
    {
        if (System::isAuthorised()) :
            header("Location: index.php");
        endif;
    }
}
