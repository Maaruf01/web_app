$(function(){
    
    $(".userInfo").attr('readonly', true);
    $(".cta, #login, #register").slideDown(1500);

    $("#edit-profile").click(function()
    {
          $("#save-edit").show();
          $(".userInfo").attr('readonly', false);
   
    });

});