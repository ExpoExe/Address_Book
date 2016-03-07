<?php
/**
 * Created by PhpStorm.
 * User: Justin_NZXT
 * Date: 3/4/2016
 * Time: 4:52 PM
 */

include('core/init.php');

//Clean up data before sending
if ( isset( $_POST[ 'first_name' ])) {
    $first_name = strip_tags(trim($_POST[ 'first_name' ]));
    }
if ( isset( $_POST[ 'last_name' ])) {
    $last_name = strip_tags(trim($_POST[ 'last_name' ]));
}
if ( isset( $_POST[ 'email' ])) {
    if (preg_match('/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/', $_POST[ 'email' ])) {
        $email = $_POST['email'];
    }else{
        $email = 'invalid email entered';
    }
}
if ( isset( $_POST[ 'home_phone' ])) {
    $home_phone = strip_tags(trim($_POST[ 'home_phone' ]));
}
if ( isset( $_POST[ 'work_phone' ])) {
    $work_phone = strip_tags(trim($_POST[ 'work_phone' ]));
}
if ( isset( $_POST[ 'address1' ])) {
    $address1 = strip_tags(trim($_POST[ 'address1' ]));
}
if ( isset( $_POST[ 'address2' ])) {
    $address2 = strip_tags(trim($_POST[ 'address2' ]));
}
if ( isset( $_POST[ 'city' ])) {
    $city = strip_tags(trim($_POST[ 'city' ]));
}
if ( isset( $_POST[ 'state' ])) {
    $state = strip_tags(trim($_POST[ 'state' ]));
}
if ( isset( $_POST[ 'zipcode' ])) {
    $zipcode = strip_tags(trim($_POST[ 'zipcode' ]));
}
if ( isset( $_POST[ 'dob' ])) {
    if (preg_match('/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/', $_POST[ 'email' ])) {
        $email = $_POST['email'];
    }else{
        $email = 'Invalid email format';
    }
    $dob = strip_tags(trim($_POST[ 'dob' ]));
}
if ( isset( $_POST[ 'comments' ])) {
    $comments = htmlentities(trim($_POST[ 'comments' ]) , ENT_NOQUOTES );
}

$db = new Database;

$db->query("INSERT INTO contacts (first_name, last_name, email, home_phone, work_phone, address1, address2, city, state, zipcode, dob, comments)
            VALUES (:first_name, :last_name, :email, :home_phone, :work_phone, :address1, :address2, :city, :state, :zipcode, :dob, :comments)");

//Bind values for the query
$db->bind(':first_name', $first_name);
$db->bind(':last_name', $last_name);
$db->bind(':email', $email);
$db->bind(':home_phone', $home_phone);
$db->bind(':work_phone', $work_phone);
$db->bind(':address1', $address1);
$db->bind(':address2', $address2);
$db->bind(':city', $city);
$db->bind(':state', $state);
$db->bind(':zipcode', $zipcode);
$db->bind(':dob', $dob);
$db->bind(':comments', $comments);

if($db->execute()){
    echo 'Contact added.';
}else{
    echo 'Error adding Contact.';
}