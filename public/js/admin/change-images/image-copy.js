function readURL(input) {
    if (input.files && input.files[0]) {
        const imagePreview = $(input).closest('.position-relative').find('.imagePreview');
        const reader = new FileReader();
        reader.onload = function (e) {
            $(imagePreview).css('background-image', 'url(' + e.target.result + ')');
            $(imagePreview).hide();
            $(imagePreview).fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$(document).ready(function () {
    $(document).on('change', '.uploadImage', function () {
        readURL(this);
    });

    // Remove image function for both image uploads
    function attachRemoveButtonListener(selector, defaultImageUrl) {
        $(selector).on('click', function () {
            const imagePreview = $(this).closest('.position-relative').find('.imagePreview');
            imagePreview.removeAttr('style');
            imagePreview.css('background-image', 'url(' + defaultImageUrl + ')');
        });
    }

    // Attach remove listeners (if you have buttons for removing images)
    attachRemoveButtonListener('.remove-button1', 'images/no-img-avatar.png');
    attachRemoveButtonListener('.remove-button2', 'images/no-img-avatar.png');
});


$(document).ready(function () {

    $(document).on('change', '.uploadImage', function () {
        readURL(this);
    });

    $('.remove-img').on('click', function () {
        var imageUrl = "images/no-img-avatar.png";
        $('#avatar-preview, .imagePreview').removeAttr('style');
        $('.imagePreview').css('background-image', 'url(' + imageUrl + ')');
    });

    $('#addAnhLienQuan').on('click', function () {
        let container = $('#variantContainer');
        let newBox = $('<div>').addClass('variantColor d-flex align-items-center').html(`
            <div class="mb-3 w-25 file-input-wrapper" style="margin-right: 18px; width: 110px !important;">
                <input type="file" accept=".png, .jpg, .jpeg" multiple name="post_vi[relatedPhotos][]" class="form-control relatedPhotos">
                <div class="custom-button"><i class="nav-icon fas fa-upload"></i></div>
                <img src="#" alt="Preview Image" style="display: none;">
                <button class="remove-button" type="button" style="display: flex;">&times;</button>
            </div>
        `);
        let fileInput = newBox.find('input[type="file"]');
        let removeButton = newBox.find('.remove-button');
        attachFileInputListener(fileInput);
        attachRemoveButtonListener(removeButton);
        container.append(newBox);
    });

    $('input[name="post_vi[relatedPhotos][]"]').each(function () {
        attachFileInputListener(this);
    });

    $('.remove-button').each(function () {
        attachRemoveButtonListener(this);
    });

})