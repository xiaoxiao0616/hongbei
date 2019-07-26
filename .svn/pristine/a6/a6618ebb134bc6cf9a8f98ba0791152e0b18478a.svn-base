$(document).ready(function() {
	$("#button").click(function(){
		
        var user_name=$("#user_name").val();
        var phone=$("#phone").val();
		var qq=$("#qq").val();
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



