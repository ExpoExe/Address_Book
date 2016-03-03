/**
 * Created by Justin_NZXT on 3/2/2016.
 */


var $modal = $('#modal');

$.ajax('/url')
    .done(function(resp){
        $modal.html(resp.html).foundation('open');
    });