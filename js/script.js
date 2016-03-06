/**
 * Created by Justin_NZXT on 3/4/2016.
 */

$(document).ready(function(){


    //Loader img
    $('#loaderImg').show();

    //Show contacts
    showContacts();

    //Wake up Foundation
    var popup = new Foundation.Reveal($('#editContactModal2'));

    $.ajax('contacts.php')
        .done(function(data){
            console.log(data);
            document.getElementById('editContactModal2').innerHTML(data);
        });

    //Add Contact to DB
    $(document).on('submit', '#addContactForm', function(){
        $('#loaderImg').show();

        //Post the data from the form
        $.post("add_contact.php", $(this). serialize()).done(function(data){
            $('#addContactModal').foundation('close');
            showContacts();
        });
        return false;
    });

    //Edit Contact in DB
    $(document).on('submit', '#editContactForm', function(){
        $('#loaderImg').show();

        //Post the data from the form
        $.post("edit_contact.php", $(this). serialize()).done(function(data){
            $('#editContactModal').foundation('close');
            showContacts();
        });
        return false;
    });

    //Delete Contact from DB
    $(document).on('submit', '#deleteContactForm', function(){
        $('#loaderImg').show();

        //Post the data from the form
        $.post("delete_contact.php", $(this). serialize()).done(function(data){
            showContacts();
        });
        return false;
    });

});


//Load contacts for easy partial refresh
function showContacts(){
    setTimeout("$('#contactContent').load('contacts.php', function(){$('#loaderImg').hide();})", 1000);
}
