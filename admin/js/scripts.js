$(document).ready(function() {
  // CKEDITOR 5
  if (document.getElementById('body')) {
    ClassicEditor.create(document.querySelector('#body'))
      .then(editor => {
        // console.log(editor);
      })
      .catch(error => {
        console.error(error);
      });
  }

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

  // Loading Animation
  var div_box = "<div id='load-screen'><div id='loading'></div></div>";
  $('body').prepend(div_box);
  $('#load-screen')
    .delay(500)
    .fadeOut(100, function() {
      $(this).remove();
    });
});
