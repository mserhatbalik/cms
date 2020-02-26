$(document).ready(function() {
  // CKEDITOR 5
  ClassicEditor.create(document.querySelector('#body')).catch(error => {
    console.error(error);
  });

  // THE REST
});
