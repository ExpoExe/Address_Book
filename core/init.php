<?php
/**
 * Created by PhpStorm.
 * User: Justin_NZXT
 * Date: 3/2/2016
 * Time: 4:52 PM
 */

//Config
require_once('config/config.php');

//Includes
require_once('inc/helper.php');

//Autoload
function __autoload($class_name){
    require_once('lib/'.$class_name.'.php');
}