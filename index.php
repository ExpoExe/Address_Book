<?php
/**
 * Created by PhpStorm.
 * User: Justin_NZXT
 * Date: 3/4/2016
 * Time: 4:51 PM
 * TECH ASSESSMENT
 * Please solve the test task described below and send us all the sources back together with the sql files that need to be executed to test it.

Write a small web-based application using php+html+css+javascript+mysql which maintains an address book that
stores name, email, address, home phone, work phone, birth date, and a comment field.

Requirements:
- Only the initial page may get html&css content from the server
- No operation may result a complete page reload after being initially loaded
- Every communication with the server must be done thru ajax calls
- No html over ajax calls, only json ( => content generation by js)
- OOP both in php and js is required
- No formatting by html, only by css
- The app must be able to run in any folder inside the web area, must not restrict to be placed in the root

Allowed 3rd party tools:
- jQuery, Sencha/ExtJS, Laravel

Good if:
- Uploading a photo for every contact is possible and is displayed
- Search feature added
- Practical db organizing
- Data validation+sanitization at both client and server side
- Using only prepared statements (PDO preferred)
- Database communication thru a db class instead of direct mysql* calls
- Nice, ergonomic, logical gui
- Pure json communication between browser and server back and forth
- You provide an online instance of the running application which can remain online for a few weeks, for easier testing
- Add as much security as you can
 */

//Include array of states to make form easier
include('core/init.php');

?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>PHP Address Book</title>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/foundation.css" />
        <link rel="stylesheet" href="css/app.css" />
    </head>
    <body>

        <!-- Header Start -->
        <div class="row">
            <div class="large-6 columns">
                <h1>PHP Address Book</h1>
            </div>
            <div class="large-6 columns right">
                <a data-open="addContactModal" class="add-button button right large">Add Contact</a>
                <!-- Add Contact Modal -->
                <div class="large reveal" id="addContactModal" data-reveal>
                    <h2 class="text-center">Add Contact</h2>
                    <form id="addContactForm" action="#" method="post"> <!-- COME BACK AND ADD ABIDE VALIDATION -->

                        <div class="row">
                            <div class="large-6 columns">
                                <label>
                                First Name <input name="first_name" type="text" placeholder="Enter First Name" />
                                </label>
                            </div>
                            <div class="large-6 columns">
                                <label>
                                Last Name <input name="last_name" type="text" placeholder="Enter Last Name" />
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-4 columns">
                                <label>
                                Email <input name="email" type="email" placeholder="Enter Email" />
                                </label>
                            </div>
                            <div class="large-4 columns">
                                <label>
                                Home Phone Number <input name="home_phone" type="text" placeholder="Enter Home Phone" />
                                </label>
                            </div>
                            <div class="large-4 columns">
                                <label>
                                Work Phone Number <input name="work_phone" type="text" placeholder="Enter Work Phone" />
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-6 columns">
                                <label>
                                Address 1 <input name="address1" type="text" placeholder="Enter Address 1" />
                                </label>
                            </div>
                            <div class="large-6 columns">
                                <label>
                                Address 2 <input name="address2" type="text" placeholder="Enter Address 2" />
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-4 columns">
                                <label>
                                City <input name="city" type="text" placeholder="Enter City" />
                                </label>
                            </div>
                            <div class="large-4 columns">
                                <label>
                                State
                                    <select name="state">
                                        <?php
                                        echo '<option>Select a State</option>';
                                        foreach ( $states as $value => $label ) :
                                            echo '<option value="' . $value . '" >' . $label . '</option>';
                                        endforeach;
                                        ?>
                                    </select>
                                </label>
                            </div>
                            <div class="large-4 columns">
                                <label>
                                Zipcode <input name="zipcode" type="text" placeholder="Enter Zipcode" />
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-4 columns">
                                <label>
                                Date of Birth <input name="dob" type="text" placeholder="YYYY-MM-DD" />
                                </label>
                            </div>
                            <div class="large-8 columns">
                                <label>
                                Comments <textarea name="comments" type="text" placeholder="Enter Comments..."></textarea>
                                </label>
                            </div>
                        </div>

                        <input name="submit" type="submit" class="add-button button small" value="Add" />
                    </form>
                    <button class="close-button" data-close aria-label="Close" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Add Contact Modal -->

            </div>
        </div>
        <!-- Header End -->
        <!-- Loading Image -->
        <div id="loaderImg">
            <img src="img/ajax-loader.gif">
        </div>

        <!-- Table Start -->
        <div id="contactContent"></div>
        <!-- Table End -->

        <script src="js/vendor/jquery.min.js"></script>
        <script src="js/vendor/what-input.min.js"></script>
        <script src="js/foundation.min.js"></script>
        <script src="js/app.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
