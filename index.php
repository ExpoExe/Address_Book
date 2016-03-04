<?php
/**
 * Created by PhpStorm.
 * User: Justin_NZXT
 * Date: 3/2/2016
 * Time: 4:51 PM
 */

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
                <a data-open="addContact" class="add-button button right large">Add Contact</a>

                <!-- Add Contact Modal -->
                <div class="large reveal" id="addContact" data-reveal>
                    <h2 class="text-center">Add Contact</h2>
                    <form>

                        <div class="row">
                            <div class="large-6 columns">
                                <label>
                                First Name <input type="text" placeholder="Enter First Name" />
                                </label>
                            </div>
                            <div class="large-6 columns">
                                <label>
                                Last Name <input type="text" placeholder="Enter Last Name" />
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-4 columns">
                                <label>
                                Email <input type="email" placeholder="Enter Email" />
                                </label>
                            </div>
                            <div class="large-4 columns">
                                <label>
                                Home Phone Number <input type="text" placeholder="Enter Home Phone" />
                                </label>
                            </div>
                            <div class="large-4 columns">
                                <label>
                                Work Phone Number <input type="text" placeholder="Enter Work Phone" />
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-6 columns">
                                <label>
                                Address 1 <input type="text" placeholder="Enter Address 1" />
                                </label>
                            </div>
                            <div class="large-6 columns">
                                <label>
                                Address 2 <input type="text" placeholder="Enter Address 2" />
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-4 columns">
                                <label>
                                City <input type="text" placeholder="Enter City" />
                                </label>
                            </div>
                            <div class="large-4 columns">
                                <label>
                                State
                                    <select>
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="CA">California</option>
                                        <option value="CO">Colorado</option>
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="DC">District Of Columbia</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="ID">Idaho</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IN">Indiana</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NV">Nevada</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="OH">Ohio</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="OR">Oregon</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="TX">Texas</option>
                                        <option value="UT">Utah</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WA">Washington</option>
                                        <option value="WV">West Virginia</option>
                                        <option value="WI">Wisconsin</option>
                                        <option value="WY">Wyoming</option>
                                    </select>
                                </label>
                            </div>
                            <div class="large-4 columns">
                                <label>
                                Zipcode <input type="text" placeholder="Enter Work Phone" />
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-4 columns">
                                <label>
                                Date of Birth <input type="text" placeholder="Enter Date of Birth" />
                                </label>
                            </div>
                            <div class="large-8 columns">
                                <label>
                                Comments <textarea type="text" placeholder="Enter Comments..."></textarea>
                                </label>
                            </div>
                        </div>

                        <input type="submit" class="add-button button center small" value="Add" />
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
