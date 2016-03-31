$(document).ready(function(){
	$('.basket').click(function(){
		var id = $(this).attr('data-id');
		var token = $('.token').val();
		$.ajax({
            url: '/basket/'+id,
            type: 'GET',
            headers: {'X-CSRF-TOKEN': token},
            success:function(data){
            	
            }
        })
	})
})