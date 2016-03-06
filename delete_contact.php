<?php
/**
 * Created by PhpStorm.
 * User: Justin_NZXT
 * Date: 3/4/2016
 * Time: 4:52 PM
 */

include('core/init.php');

//Create DB object
$db = new Database;

//Query
$db->query("DELETE FROM `contacts` WHERE id = :id");

//Bind for statement
$db->bind(':id', $_POST['id']);

if($db->execute()){
    echo 'Contact deleted.';
}else{
    'There was a problem deleting the Contact';
}