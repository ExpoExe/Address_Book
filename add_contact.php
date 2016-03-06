<?php
/**
 * Created by PhpStorm.
 * User: Justin_NZXT
 * Date: 3/4/2016
 * Time: 4:52 PM
 */

include('core/init.php');

$db = new Database;

//values for the query
//$fname = $_POST['first_name'];
//$lname = $_POST['last_name'];
//$email = $_POST['email'];
//$hphone = $_POST['home_phone'];
//$wphone = $_POST['work_phone'];
//$address1 = $_POST['address1'];
//$address2 = $_POST['addess2'];
//$city = $_POST['city'];
//$state = $_POST['state'];
//$zip = $_POST['zipcode'];
//$dob = $_POST['dob'];
//$comments = $_POST['comments'];

$db->query("INSERT INTO contacts (first_name, last_name, email, home_phone, work_phone, address1, address2, city, state, zipcode, dob, comments)
            VALUES (:first_name, :last_name, :email, :home_phone, :work_phone, :address1, :address2, :city, :state, :zipcode, :dob, :comments)");

//Bind values for the query
$db->bind(':first_name', $_POST['first_name']);
$db->bind(':last_name', $_POST['last_name']);
$db->bind(':email', $_POST['email']);
$db->bind(':home_phone', $_POST['home_phone']);
$db->bind(':work_phone', $_POST['work_phone']);
$db->bind(':address1', $_POST['address1']);
$db->bind(':address2', $_POST['address2']);
$db->bind(':city', $_POST['city']);
$db->bind(':state', $_POST['state']);
$db->bind(':zipcode', $_POST['zipcode']);
$db->bind(':dob', $_POST['dob']);
$db->bind(':comments', $_POST['comments']);

if($db->execute()){
    echo 'Contact added.';
}else{
    echo 'Error adding Contact.';
}