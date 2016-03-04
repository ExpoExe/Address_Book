/**
 * Created by Justin_NZXT on 3/2/2016.
 */


var $modal = $('#addContact');

$.ajax('/url')
    .done(function(resp){
        $modal.html(resp.html).foundation('open');
    });

$(document).ready(function(){
    //Loader img
    $('#loaderImg').show()

    //Show contacts
    showContacts();
});

function showContacts(){
    setTimeout("$('#contactContent').load('contacts.php', function(){$('#loaderImg').hide();})", 1000);
}
