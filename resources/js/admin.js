require ('./bootstrap');

/**
 * Handle File Uploads
 */

 $(function() {
    var bar = $('.bar');
    var percent = $('.percent');
    var status = $('#status');

    $('#uploader').ajaxForm({
        beforeSend: function() {
            status.empty();
            $('.progress').removeClass('hidden');
            var percentVal = '0%';
            bar.width(percentVal);
            percent.html(percentVal);
        },
        uploadProgress: function(event, position, total, percentComplete) {
            var percentVal = percentComplete + '%';
            bar.width(percentVal);
            percent.html(percentVal);
        },
        complete: function(xhr) {
            status.html(xhr.responseText);
        }
    });
});
