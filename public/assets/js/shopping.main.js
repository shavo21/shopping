$(document).ready(function(){
    window.id = $('#userAccount').attr('data-name');
    var token = $('.token').val();
    $.ajax({
        url: '/basket-count/'+id,
        type: 'GET',
        headers: {'X-CSRF-TOKEN': token},
        success:function(data){
            $('#boasket_count').html(data);
        }
    })
	$('.basket').click(function(){
		var id = $(this).attr('data-id');
		var token = $('.token').val();
		$.ajax({
            url: '/basket/'+id,
            type: 'GET',
            headers: {'X-CSRF-TOKEN': token},
            success:function(data){
            	$('#boasket_count').html(data);
            }
        })
	})
})