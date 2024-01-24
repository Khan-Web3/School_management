<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>login</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container-fluid" id="bg-image">

        <div class="container">
            <form action="login_check.php" method="POST" class="py-4 px-3">
                <h1 class="text-center">login</h1>
                <h4>
                    <?php
                    error_reporting(0);
                    session_start();
                    session_destroy();
                     echo $_SESSION['loginmessage']
                      ?>
                </h4>
                <div class="mt-3">
                    <input type="text" placeholder="enter user name" class="form-control" name="username" />
                </div>

                <div class="mt-3">
                    <input type="password" placeholder="enter user password" class="form-control" name="password" />
                </div>

                <div class="mt-3">
                    <input type="submit" class="form-control btn btn-success" />
                </div>
            </form>
        </div>


    </div>

</body>

</html>