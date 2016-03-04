<?php
/**
 * Created by PhpStorm.
 * User: Justin_NZXT
 * Date: 3/2/2016
 * Time: 4:51 PM
 */

include('core/init.php');


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
            <tr>
                <td><a href="contact.html">Justin Richard</a> </td>
                <td>justinr.cibacs@gmail.com</td>
                <td><ul>
                        <li>Home: 714 887 9451</li>
                        <li>Work: 987 654 3210</li>
                    </ul></td>                        <td><ul>
                        <li>564 New Britain Road</li>
                        <li>Doylestown, PA 18901</li>
                    </ul></td>
                <td>12/17/1995</td>
                <td>A PHP Developer.</td>
                <td>
                    <div class="button-group">
                        <a href="#" class="success button small" data-open="addContact">Edit</a>
                        <a href="#" class="alert button small">Delete</a>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
