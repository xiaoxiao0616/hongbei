$(document).ready(function() {
	$("#button03").click(function(){

		
        var user_name=$("#user_name03").val();
        var phone=$("#phone03").val();
		var qq=$("#qq03").val();
        var url=window.location.href;
        $.ajax({
           url: "http://www.zqmarket.com/sendemail.php",
           data:{user_name:user_name,phone:phone,qq:qq,url:url},
           dataType:'jsonp', 
           jsonp:'callback',
           success:function(data){ 
                if(data.msg==true){
                  $('#button').attr('disabled',"true");
	            	  alert(data.message);
	              }else{
	            	  alert(data.message);
	              }
	        },
           });
		});
})



