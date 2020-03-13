<?php 
if(!isset($username))
$username='';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:skyblue">
    <div class="form" style="margin-top: 100px;margin-left: 350px;margin-right: 300px;background-color:darkslategrey;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQGK_M4vdJQq1sdX4LDyU7NvRdM9eY4JZJYM0k9Gpse2YknSJTV" alt="user photo" style="margin-left: 220px;">
    <form action="process.php" method="POST" style="margin-left: 220px;">
        <br>
        Username
        <input placeholder="Username" type="text" name="username" value="<?php echo htmlspecialchars($username);?>"><br><br>
        <?php if(isset($username_error)) {?> <p><?php echo $username_error;?></p><?php } ?>
        Password
        <input placeholder="Password" type="password" name="password1"><br><br>
        <?php if(isset($password1_error)) {?> <p><?php echo $password1_error;?></p><?php } ?>
        Confirm password:
        <input placeholder="Password" type="password" name="password2"><br><br>
        <?php if(isset($password2_error)) {?> <p><?php echo $password2_error;?></p><?php } ?>
        <input type="submit" value="Register" style="background-color: blue; color: red;margin-left: 80px;"><br><br>  
    </form>
</div>
</body>
</html>