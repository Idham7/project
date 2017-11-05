/*$(document).on('ready', function(){
	$("#input-sampul").fileinput({
		maxSize: 500,
	    resizeImage: true,
	    maxImageWidth: 200,
	    maxImageHeight: 200,
	    resizePreference: 'width'
	});
});*/

var data = {};

/*$(document).on('ready', function(){
  $('form').on('submit', function(event) {
    //resetErrors();
      //disable the default form submission
  event.preventDefault();
 
  //grab all form data  
  var formData = new FormData($(this)[0]);
 
  $.ajax({
    url: 'upload_jurnal.php',
    type: 'POST',
    data: formData,
    async: false,
    cache: false,
    contentType: false,
    processData: false,
    success: function (returndata) {
      alert(returndata);
    }
  });
 
  return false;;
  });
});*/
$(document).on('ready', function(){
$('form').on('submit', function() {
//$('input[type="submit"]').on('click', function() {
      resetErrors();
      var url = 'upload_jurnal.php';
      $.each($('form input, form select, form textarea'), function(i, v) {
          if (v.type !== 'submit' && v.type !== 'file') {
              data[v.name] = v.value;
          }
      });



      var formData = new FormData($(this)[0]);
      console.log(formData);

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
                    //window.location.href = 'index.php';

                    //form.submit();
                    console.log('SUCCESS');
                    window.location.href = 'index.php';
                } else {
                  $.each(resp, function(i, v) {
          console.log(i + " => " + v); // view in console for error messages
                      var msg = '<label class="error" for="'+i+'">'+v+'</label>';
                      $('input[name="' + i + '"], select[name="' + i + '"]').addClass('inputTxtError').after(msg);
                      if (resp.Abstrak) {
                        $('textarea[name="' + i + '"], select[name="' + i + '"]').addClass('inputTxtError').after(msg);
                      }

                  });
                  var keys = Object.keys(resp);
                  $('input[name="'+keys[0]+'"]').focus();
                }
                  
              //}
             // return false;
          }/*,
          error: function() {
              console.log('ada problem !');
          }*/
      });

      return false;
  });
});

function resetErrors() {
    $('form input, form select').removeClass('inputTxtError');
    $('label.error').remove();
}
