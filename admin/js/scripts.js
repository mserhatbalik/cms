$(document).ready(function() {
  // CKEDITOR 5
  ClassicEditor.create(document.querySelector('#body')).catch(error => {
    console.error(error);
  });

  // View Posts Check ALL CHECKBOXES
  $('#selectAllBoxes').click(function(event) {
    if (this.checked) {
      $('.checkBoxes').each(function() {
        this.checked = true;
      });
    } else {
      $('.checkBoxes').each(function() {
        this.checked = false;
      });
    }
  });
});
