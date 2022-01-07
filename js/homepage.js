$('#submitText').submit(function(e) {
    e.preventDefault();

    $.ajax({
      url: './newSave.php',
      type: 'POST',
      data: $(this).serialize(),
      success: function(res) {
          alert(res);
       }  
    });
});