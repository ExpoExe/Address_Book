/**
 * Created by Justin_NZXT on 3/4/2016.
 */

$(document).ready(function(){


    //Loader img
    $('#loaderImg').show();

    //Show contacts
    showContacts();

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
function showContacts() {
    setTimeout("$('#contactContent').load('contacts.php', function(){$('#loaderImg').hide();})", 2000);
}
