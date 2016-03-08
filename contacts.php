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
$db->query("CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `home_phone` varchar(50) NOT NULL,
  `work_phone` varchar(50) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zipcode` int(30) NOT NULL,
  `dob` date NOT NULL,
  `comments` text NOT NULL,
  `img_name` varchar(50) NOT NULL,
  `img_data` blob NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;");

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
                <tr id="contactID<?php echo $contact->id ?>">
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
