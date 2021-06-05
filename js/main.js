$(function(){
    
    $(".userInfo").attr('readonly', true);


    $("#edit-profile").click(function()
    {
          $("#save-edit").show();
          $(".userInfo").attr('readonly', false);
   
    });

    $('#login').submit(function(event){
        event.preventDefault()      
        $('#button').val('Please wait...') 

        $.ajax({
            url:'auth.php',
            method:'POST',
            data:$(this).serialize(),
            error:err=>{
                console.log(err)
                alert('An error occured') 
                $('#button').val('Login')
            },
            success:function(resp){
                if (resp == 1){
                    document.location.href= 'profile.php'
                }
                else{
                    alert("Incorrect username or password.")
                    $('#button').val('Login')
                }
            }
        });
        
    });
    
    $('#register').submit(function(event){
        event.preventDefault()      
        $('#submit').val('Please wait...') 
        
        $.ajax({
            url:'./add_user.php',
            method:'POST',
            data:$(this).serialize(),
            error:err=>{
                console.log(err)
                alert('An error occured') 
                $('#submit').val('Sign-up')
            },
            success:function(resp){
                if (resp == 1){
                    alert("Account created succesfully.")
                    $('#register')[0].reset()
                    $('#submit').val('Sign-up')
                }
            }
        });

    });

    
});