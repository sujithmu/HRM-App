$(document).ready(function(){
	$('#indexform').validate({
	rules:
            {
                email : "required",
                comment:"required"
               
            },
             messages:{
                 email:"Enter email",
                 comment:"comments plaese"                 
             },
		
		submitHandler:function(form){
			$(form).ajaxSubmit({
				success: function(data){
			console.log(data);
			alert('Your comment was successfully added');
				},
				error: function(){
			console.log(data);
			alert('There was an error adding your comment');
		}
			});
		}
	});
	
	$('#indexbtn').click(function(){
		$('#indexform').submit();
	});
});