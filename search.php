<?php
/**
 * Created by PhpStorm.
 * User: Justin_NZXT
 * Date: 3/8/2016
 * Time: 12:18 PM
 */

include('core/init.php');

if(!empty($_GET['q'])){
    //new DB object
    $db = new Database;
    //string to search
    $q = $_GET['q'];
    //query, execute, return
    $db->query("SELECT `id`, `first_name`, `last_name` FROM `contacts` WHERE (`first_name` LIKE '%$q%') OR (`last_name` LIKE '%$q%')");
    $results = $db->resultset();

    //organize results and encode to json
    $data_array = array();

    foreach ($results as $result) :

        $data_array[] = '<a href="#contactID'.$result->id.'">'.$result->first_name.' '.$result->last_name.'</a>';

    endforeach;

    echo json_encode($data_array);

}