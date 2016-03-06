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
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach($contacts as $contact) : ?>
                <tr>
                    <td><a href="#"><?php echo $contact->first_name.' '.$contact->last_name; ?></a> </td>
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
                        <a id="editButton<?php echo $contact->id; ?>" class="edit-button success button small" data-open="editContactModal<?php echo $contact->id; ?>">Edit</a>

                        <!-- Edit Contact Modal -->
                        <div id="editContactModal<?php echo $contact->id; ?>" class="editContactModal large reveal" data-reveal>
                            <h2 class="text-center">Edit Contact</h2>
                            <form id="editContactForm" action="#" method="post"> <!-- COME BACK AND ADD ABIDE VALIDATION -->

                                <div class="row">
                                    <div class="large-6 columns">
                                        <label>
                                            First Name <input value="<?php echo $contact->first_name; ?>" name="first_name" type="text" placeholder="Enter First Name" />
                                        </label>
                                    </div>
                                    <div class="large-6 columns">
                                        <label>
                                            Last Name <input value="<?php echo $contact->last_name; ?>" name="last_name" type="text" placeholder="Enter Last Name" />
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-4 columns">
                                        <label>
                                            Email <input value="<?php echo $contact->email; ?>" name="email" type="email" placeholder="Enter Email" />
                                        </label>
                                    </div>
                                    <div class="large-4 columns">
                                        <label>
                                            Home Phone Number <input value="<?php echo $contact->home_phone; ?>" name="home_phone" type="text" placeholder="Enter Home Phone" />
                                        </label>
                                    </div>
                                    <div class="large-4 columns">
                                        <label>
                                            Work Phone Number <input value="<?php echo $contact->work_phone; ?>" name="work_phone" type="text" placeholder="Enter Work Phone" />
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-6 columns">
                                        <label>
                                            Address 1 <input value="<?php echo $contact->address1; ?>" name="address1" type="text" placeholder="Enter Address 1" />
                                        </label>
                                    </div>
                                    <div class="large-6 columns">
                                        <label>
                                            Address 2 <input value="<?php echo $contact->address2; ?>" name="address2" type="text" placeholder="Enter Address 2" />
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-4 columns">
                                        <label>
                                            City <input value="<?php echo $contact->city; ?>" name="city" type="text" placeholder="Enter City" />
                                        </label>
                                    </div>
                                    <div class="large-4 columns">

                                        <label>
                                            State
                                            <select name="state">
                                                <?php
                                                foreach ( $states as $value => $label ) :
                                                    if(!($value == $contact->state)) {
                                                        echo '<option value="' . $value . '" >' . $label . '</option>';
                                                    }else{
                                                        echo '<option value="' . $value . '" selected >' . $label . '</option>';
                                                    }
                                                endforeach;
                                                ?>
                                            </select>
                                        </label>
                                    </div>
                                    <div class="large-4 columns">
                                        <label>
                                            Zipcode <input value="<?php echo $contact->zipcode; ?>" name="zipcode" type="text" placeholder="Enter Zipcode" />
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-4 columns">
                                        <label>
                                            Date of Birth <input value="<?php echo $contact->dob; ?>" name="dob" type="text" placeholder="YYYY-MM-DD" />
                                        </label>
                                    </div>
                                    <div class="large-8 columns">
                                        <label>
                                            Comments <textarea name="comments" type="text" placeholder="Enter Comments..."><?php echo $contact->comments; ?></textarea>
                                        </label>
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="<?php echo $contact->id; ?>" />
                                <input name="submit" type="submit" class="edit-button button small" value="Update" />
                            </form>
                            <button class="close-button" data-close aria-label="Close" type="button">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!-- Edit Contact Modal -->

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
    </div>
</div>
