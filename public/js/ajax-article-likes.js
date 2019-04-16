console.log('JS bien chargé');

const id = $('#likes button').first().data('id');

const params = {
    url: 'http://blog.local/api/article/likes/1'


$.ajax(params).done(displayNewLikes);

function displayNewLikes(json){
    console.log('Retour de l\'appel AJAX');


}