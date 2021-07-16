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
    
  // script for handling new user registation 
    $('#register').submit(function(event){
        event.preventDefault()      
        $('#sign-up').val('Please wait...') 

        $.ajax({
            url:'add_user.php',
            method:'POST',
            data:$(this).serialize(),
            error:err=>{
                console.log(err)
                alert('An error occured') 
                $('#sign-up').val('Sign-up')
            },
            success:function(resp){
                if (resp){
                    alert(resp + " successfully registered.")
                    document.location.href= 'login.php'
                }
                else{
                    alert("Not registered")
                    $('#sign-up').val('Sign-up')
                }
            }
        });

    });

    // handles editing user information 
    $('#profile-form').submit(function(event){
        event.preventDefault()      
        $('#save-edit').val('Please wait...') 

        $.ajax({
            url:'edit_user.php',
            method:'POST',
            data:$(this).serialize(),
            error:err=>{
                console.log(err)
                alert('An error occured') 
                $('#save-edit').val('Save')
            },
            success:function(resp){
                if (resp){
                    alert('Information updated successfully.')
                   $('#save-edit').val('Save')
                    $("#save-edit").hide();
                    $(".userInfo").attr('readonly', true);
                }
                else{
                    alert('Update failed.')
                    $('#save-edit').val('Save')
                }
            }
        });

    });
});