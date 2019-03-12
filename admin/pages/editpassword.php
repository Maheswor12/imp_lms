<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
    <h3>Change Password</h3>
    <b>it's a good idea to use a strong password that you are not using elsewhere</b><br><br>


    <form id="subject">
       <div class="form-group">
           <label for="exampleFormControlInput1"><b>Current:</b></label>
           <input type="text" class="form-control" name="subject_code" placeholder="Please Enter Current Password" required >
       </div>
       <div class="form-group">
           <label for="exampleInputEmail1"><b>New:</b></label>
           <input type="text" class="form-control" name=subject_title  aria-describedby="emailHelp" placeholder="Please Enter New Password" required >
       </div>
        <div class="form-group">
           <label for="exampleInputEmail1"><b>Re-type new:</b></label>
           <input type="text" class="form-control" name=category required aria-describedby="emailHelp" placeholder="Please Re-Enter New Password" >
       </div>
     
       <button type="submit" class="btn btn-primary"> Save Changes</button>
   </form>
</body>
</html>