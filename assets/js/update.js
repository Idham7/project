
var data = {};
$(document).on('ready', function(){
$('.datepicker').datepicker();
$('form').on('submit', function() {
//$('input[type="submit"]').on('click', function() {
      resetErrors();
      var url = 'update.php';
      $.each($('form input, form select, form textarea'), function(i, v) {
          if (v.type !== 'submit' && v.type !== 'file') {
              data[v.name] = v.value;
          }
      });

      console.log(data);

      var formData = new FormData($(this)[0]);

      $.ajax({
          dataType: 'json',
          type: 'POST',
          url: url,
          data: formData,
          contentType: false,
          processData: false,
          success: function(resp) {
            //console.log('im success');
            
              //if (resp === true) {
                    //console.log(window.location);
                    
                  	//successful validation


                  	//return false;
              //} else {
                if (resp.status == 'success') {
                    window.location.href = 'ubahdata_karyawan.php';

                    //form.submit();
                    
                    //window.location.href = 'index.php';
                } else {
                	//console.log(resp.Nomor_Urut);
                  $.each(resp, function(i, v) {
          console.log(i + " => " + v); // view in console for error messages
                      var msg = '<label class="error" for="'+i+'">'+v+'</label>';
                      $('input[name="' + i + '"], select[name="' + i + '"]').addClass('inputTxtError').after(msg);
                      //if (resp.Misi_Calon) {
                        $('textarea[name="' + i + '"], select[name="' + i + '"]').addClass('inputTxtError').after(msg);
                     //}

                  });
                  var keys = Object.keys(resp);
                  $('input[name="'+keys[0]+'"]').focus();
                }
                  
              //}
             // return false;
          },
          error: function() {
              console.log('ada problem !');
          }
      });

      return false;
  });
});

function resetErrors() {
    $('form input, form select, form textarea').removeClass('inputTxtError');
    $('label.error').remove();
}
