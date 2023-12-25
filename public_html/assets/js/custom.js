function readImage(input, previewId) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#' + previewId).attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$(document).ready(function() {

    $("#project_image").change(function() {
        readImage(this, 'project-preview');
    });



});