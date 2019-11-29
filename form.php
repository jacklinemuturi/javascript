<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>assignment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="assign.css">
</head>
<body>
    <h1 class="text-lg-center" style ="color:black;margin-top:130px;text-align:center">create New person</h1>
        <div class="row">
            <div class="col-6 col-md-4"></div>
            <div class="col-6 col-md-4" style="background-color:#f2f2f2;height:400px;">
                <!-- form work -->
            <form action="phpwork.php" method="$_POST">
                <div class = "form-group">
                <div>
                    <label for = "Username"></label>
                    <input type = "text" class = "form-control" id = "uname" name = "uname" placeholder = "Name">
                </div><br>
                <div class = "form-group">
                    <label for = "exampleInputEmail1"></label>
                    <input type = "email" name = "email" class = "form-control" id = "exampleInputEmail1" aria-describedby = "emailHelp" placeholder="Enter E-mail">
                    <small id = "emailHelp" class="form-text text-muted"></small>
                </div>
                <div>

                </div>
            </form>
        <div class = "col-6 col-md-3"></div>
        <button type = "submit" name = "login" class = "btn btn-primary" style = "width: 100%;margin-right:150px">log in</button>
        <h6 style = "margin-left:100px">Do not have an account?<a href = "signup.php">signup</a></h6>
        <p  style = "margin-left:190px">OR</p>
        <a href = "forgot.php" style="margin-left:140px">forgot password?</a>
        </div>

</div>
</body>
</html>