<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Title</title>
</head>

<body>

    <div class="container">
        <h1>LOGIN</h1>
        <form action="proses_login" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="">Username</label>
                <input type="text" class="form-control" name="username" id="" aria-describedby="helpId" placeholder="Username">
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="Password">
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-info" name="submit">
            </div>
            <div class="form-group">
                <label for="">you dont have an account?</label>
                <a href="registrasi">Klik here to regist</a>
               </div>

        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>