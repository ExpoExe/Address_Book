<?php
/**
 * Created by PhpStorm.
 * User: Justin_NZXT
 * Date: 3/4/2016
 * Time: 4:51 PM
 */

include('core/init.php');

//create database object
$db = new Database;

//create table for fresh start
$db->query("CREATE TABLE IF NOT EXISTS `contacts` (`id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, `first_name` VARCHAR(100) NOT NULL,
`last_name` VARCHAR(100) NOT NULL, `email` VARCHAR(100) NOT NULL, `home_phone` VARCHAR(50) NOT NULL, `work_phone` VARCHAR(50) NOT NULL, `address1` VARCHAR(100) NOT NULL,
 `address2` VARCHAR(100) NOT NULL, `city` VARCHAR(100) NOT NULL, `state` VARCHAR(50) NOT NULL, `zipcode` INT(30) NOT NULL, `dob` DATE NOT NULL,
  `comments` TEXT NOT NULL, `date_added` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP)");

$db->execute();

//query database to grab all contacts
$db->query("SELECT * FROM `contacts`");
//assign contacts to new object
$contacts = $db->resultset();

?>

<div class="row">
    <div class="large-12 columns">
        <table id="book">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Date of Birth</th>
                    <th>Comments</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach($contacts as $contact) : ?>
                <tr>
                    <td><?php echo $contact->first_name.' '.$contact->last_name; ?></td>
                    <td><?php echo $contact->email ?></td>
                    <td><ul>
                            <?php if($contact->home_phone) {echo '<li>Home: '.$contact->home_phone;} ?>
                            <?php if($contact->work_phone) {echo '<li>Work: '.$contact->work_phone;} ?>
                        </ul></td>                        <td><ul>
                            <li><?php echo $contact->address1 ?></li>
                            <?php if($contact->address2) {echo $contact->address2;} ?>
                            <li><?php echo $contact->city .', '. $contact->state .' '. $contact->zipcode; ?></li>
                        </ul></td>
                    <td><?php echo $contact->dob ?></td>
                    <td><?php echo $contact->comments ?></td>
                    <td>
                        <!-- Delete Button/Form -->
                        <form id="deleteContactForm" action="#" method="post">
                            <input type="hidden" name="id" value="<?php echo $contact->id; ?>" />
                            <input type="submit" class="alert button small" value="Delete"/>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php if(empty($contacts)) {echo 'No contacts to display.  Add some using the button above.';} ?>

    </div>
</div>
