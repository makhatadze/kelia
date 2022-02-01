Dropzone.autoDiscover = false;


// Dropzone.prototype.defaultOptions.dictDefaultMessage = "Drop files here to upload";
// Dropzone.prototype.defaultOptions.dictFallbackMessage = "Your browser does not support drag'n'drop file uploads.";
// Dropzone.prototype.defaultOptions.dictFallbackText = "Please use the fallback form below to upload your files like in the olden days.";
// Dropzone.prototype.defaultOptions.dictFileTooBig = "File is too big ({{filesize}}MiB). Max filesize: {{maxFilesize}}MiB.";
// Dropzone.prototype.defaultOptions.dictInvalidFileType = "You can't upload files of this type.";
// Dropzone.prototype.defaultOptions.dictResponseError = "Server responded with {{statusCode}} code.";
// Dropzone.prototype.defaultOptions.dictCancelUpload = "Cancel upload";
// Dropzone.prototype.defaultOptions.dictCancelUploadConfirmation = "Are you sure you want to cancel this upload?";
// Dropzone.prototype.defaultOptions.dictRemoveFile = "Remove file";
// Dropzone.prototype.defaultOptions.dictMaxFilesExceeded = "You can not upload any more files.";

$(function () {
    'use strict';

    const limitFiles = $('#dpz-file-limits');
    const MAX_SIZE = 10;

    limitFiles.dropzone({
        paramName: 'file', // The name that will be used to transfer the file
        maxFilesize: MAX_SIZE, // MB
        maxThumbnailFilesize: MAX_SIZE, // MB
        dictMaxFilesExceeded: "თქვენ გადააჭარბეთ მაქსიმალური ფაილის ატვირთვის რაოდენობას",
        dictFileTooBig: "ფაილი დიდი ზომის არის {{filesize}} MB, მაქსიმალური ზომა: {{maxFilesize}} MB",
        acceptedFiles: 'image/*',
        dictDefaultMessage : "Drop files here to upload 1212916298126921",

        init: function() {
            this.on('success', function(file, message) {
                if (this.files.length > 1) {
                    this.removeFile(this.files[0]);
                }
                console.log('=====')
                console.log(file)
                console.log(message)
                console.log(this.files);
            });
        },
        thumbnail: function(file, dataUrl) {
            // Display the image in your file.previewElement
            $(file.previewElement).removeClass("dz-file-preview").addClass("dz-image-preview");
            $(file.previewElement).find(".dz-image img").attr("src",dataUrl);
            $("#preview").attr("src",dataUrl);
        },
    });

    $('meta[name="csrf-token"]').attr('content')
});
