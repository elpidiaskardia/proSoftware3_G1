require('./bootstrap');
const ClassicEditor = require('@ckeditor/ckeditor5-build-classic');
ClassicEditor
    .create(document.querySelector('#content_publication'))
    .then(editor =>{
        console.log(editor);
    })
    .cath(error =>{
        console.error(error);
    });