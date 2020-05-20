jQuery(document).ready(function($){

    var mediaUploader;

    $( '#upload-button' ).on('click',function(e) {
        e.preventDefault();
        if( mediaUploader ){
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose a Logo',
            button: {
                text:'Choose Logo',
            },
            multiple: false
        });
        
        mediaUploader.on('select', function(){
            attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#logo-image').val(attachment.url);
        });

        mediaUploader.open();
    });
});

jQuery(document).ready(function($){

    var mediaUploader;

    $( '#footer-upload-button' ).on('click',function(e) {
        e.preventDefault();
        if( mediaUploader ){
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose a Footer Logo',
            button: {
                text:'Choose a Footer Logo',
            },
            multiple: false
        });
        
        mediaUploader.on('select', function(){
            attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#footer-logo-image').val(attachment.url);
        });

        mediaUploader.open();
    });
});