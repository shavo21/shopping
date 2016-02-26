$(document).ready(function(){
	$('#id-input-file-3').ace_file_input({
		style:'well',
		btn_choose:'Ընտրել Նկար',
		btn_change:null,
		no_icon:'ace-icon fa fa-cloud-upload',
		droppable:true,
		thumbnail:'small',
		preview_error : function(filename, error_code) {
		
		}

	}).on('change', function(){	});
	$('#id-input-file-4').ace_file_input({
		style:'well',
		btn_choose:'Ընտրել Նկար',
		btn_change:null,
		no_icon:'ace-icon fa fa-cloud-upload',
		droppable:true,
		thumbnail:'small',
		preview_error : function(filename, error_code) {
		
		}

	}).on('change', function(){	});
	$('#id-input-file-5').ace_file_input({
		style:'well',
		btn_choose:'Ընտրել Նկար',
		btn_change:null,
		no_icon:'ace-icon fa fa-cloud-upload',
		droppable:true,
		thumbnail:'small',
		preview_error : function(filename, error_code) {
		
		}

	}).on('change', function(){	});
	$('input[type="submit"]').prop('disabled', true);
     $('input[type="text"]').keyup(function() {
        if($(this).val() != '') {
           $('input[type="submit"]').prop('disabled', false);
        }
     });
    $('form').submit(function() {
  		$(this).find("button[type='submit']").prop('disabled',true);
	});
});