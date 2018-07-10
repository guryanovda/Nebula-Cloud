<?php
/**
 * Created by PhpStorm.
 * User: givy11
 * Date: 10/07/2018
 * Time: 23:53
 */

namespace Kernel;


class System
{
    public static function systemInit(){
        session_start();

    }

    public static function authorise($login,$password){

    }

    public static function isAuthorised(){
        if ($_SESSION['user']) {
            return true;
        }
        else{
            return false;
        }
    }
}