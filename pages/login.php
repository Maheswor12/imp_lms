
<?php 
$page_title = "LMS-login";
require_once('includes/header.php');
?>
<br><br><br>
<div class="container">
    <form  id="login">
       <div class="form-group">
           <label for="username"><b>Username</b></label>
           <input type="text" class="form-control" name="username" aria-describedby="emailHelp" required placeholder="Please Enter username">
<!--
           <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
-->
       </div>
       <div class="form-group">
           <label for="password"><b>Password</b></label>
           <input type="password" class="form-control" name="password" required placeholder="Please Enter Password">
       </div>
       <!--<div class="form-check">
           <input type="checkbox" class="form-check-input" name="remember_me" required>
           <label class="form-check-label" for="exampleCheck1">Remember me</label>
       </div>-->
       <button type="submit" class="btn btn-primary">Submit</button>
   </form>

    
</div>
<?php

require_once('includes/footer.php'); 
?>
<script>

$(document).ready(function(){
                  


    $('#login').submit(function(event){
       event.preventDefault();
        //alert('document id ready');                  

        $.post({
            url: 'user_login.php',
            data: $('#login').serialize(),
            datatype: 'text',
            success: function(response){
        //console.log(response);
                if(response==='admin'){
               window.location.replace('admin/index.php');
        }else if(response==='student'){
            window.location.replace('student/index.php');
        }else if(response==='teacher'){
           window.location.replace('teacher/index.php');
        }else{
            window.location.replace('login.php?type=error');
        }
            }
        });
    });
});
</script>

