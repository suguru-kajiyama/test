$(function(){
  $("#make_user").click(function(){
    $.ajax({
      url:"make_user.php",
      type:"POST",
      datatype:"HTML",
      data:{
        name:$("#name").val(),
        password:$("#password").val(),
      },
      success:function(data,datatype){
        console.log(data);
      },
      error:function(){}
    });
  });
});
