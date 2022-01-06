$('#submitText').submit(function(e) {
    e.preventDefault();

    $.ajax({
      url: './php/newSave.php',
      type: 'POST',
      data: $(this).serialize(),
      success: function(res) {
          alert(res);
       }  
    });
});