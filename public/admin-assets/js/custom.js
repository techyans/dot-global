//const ajax_url = 'https://stage.dotglobaltech.com/admin/';
const ajax_url = 'http://127.0.0.1:8000/admin/';
const token = $('meta[name="csrf-token"]').attr('content');

$('body').on('click','.media-all-page img', function(e){
    e.preventDefault();
    var view_img_id = $(this).attr('data-view_imgid');
    $.ajax({
        type: "POST",
        url: ajax_url+'view-media-details',
        data: {view_img_id:view_img_id},
        headers: {
            'X-CSRF-TOKEN': token
        },
        success: function (response) {
            $('.media-view-modal .modal-body').html(response);
            $('.media-view-modal').modal('show');
        }
    });
})

$('body').on('click','.copy-image-path',function(e){
    $('.image-path').select();
    document.execCommand('copy');
    $('.copy-image-path').text('Image Path Copied');
}); 

$('body').on('click','.update-image-details',function(e){
    let upd_media_id = $(this).attr('data-media_id');
    let media_alt_text = $('.media-alt-text').val().trim();
    let media_caption = $('.media-caption').val().trim();
    $('.media-result-response').html('');
    $.ajax({
        type: "POST",
        url: ajax_url+'update-media-details',
        data: {upd_media_id:upd_media_id,media_alt_text:media_alt_text,media_caption:media_caption},
        headers: {
            'X-CSRF-TOKEN': token
        },
        success: function (response) {
            $('.media-result-response').html(response);
        }
    });
});

$('body').on('click','.delete-image',function(e){
    if(confirm('Are you sure you want to delete')){
        let delete_media_id = $(this).attr('data-media_id');
        $.ajax({
            type: "POST",
            url: ajax_url+'delete-media',
            data: {delete_media_id:delete_media_id},
            headers: {
                'X-CSRF-TOKEN': token
            },
            success: function (response) {
                $(".media-all-page .all-media").load(document.URL +  " .media-all-page .all-media > *");
                $('.media-view-modal').modal('hide');
                $('.message-modal .modal-body').html(response);
                $('.message-modal').modal('show');
            }
        });
    }else{
        return false;
    }
});
