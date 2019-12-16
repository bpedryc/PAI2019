<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../Public/css/style.css" />
        <link rel="stylesheet" href="../Public/css/login.css" />
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <title>Teabuds</title>
    </head>

    <body>
        <div class="container">
            <div class="row h-100 justify-content-center align-items-center text-center">
                <div class="col-xs-12 col-md-4">
                    <img class="img-fluid" src="../Public/img/leaf_01.png">
                </div>
                <div class="col-xs-12 col-md-4">
                    <h1 class="title">TEABUDS</h1>
                    <form action="" class="">
                        <div class="form-group">
                            <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <button type="submit" class="login btn btn-primary">LOGIN</button>
                    </form>
                    <div class="register-group">
                        <p>Don't have an account yet?</p>
                        <button type="submit" class="register btn btn-primary">REGISTER</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
