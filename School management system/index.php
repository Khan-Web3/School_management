<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>School Management System</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>


    <nav class="navbar navbar-expand-sm bg-success navbar-dark py-3 px-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">W School</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end " id="collapsibleNavbar">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-danger" href="login.php">login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid py-2" id="main">

        <label class="bg-info py-3 px-5 text-light">we teach students with care</label>

    </div>

    <div class="container-fluid mt-3" id="section1">
        <div class="row h-100">
            <div class="col-md-5 col-sm-12 h-100">
                <img src="images/cat-4.jpg" style="width: 100%; height:100%; background-size:cover; background-position:center;" />
            </div>
            <div class="col-md-7 col-sm-12">
                <h1 class="mt-3">welcome W-School</h1>
                <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam cumque
                    odit sequi impedit pariatur dolorum tenetur consequuntur libero obcaecati
                    aliquam fugiat, in laudantium iusto doloribus perferendis consectetur ex qui et?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam cumque
                    odit sequi impedit pariatur dolorum tenetur consequuntur libero obcaecati
                    aliquam fugiat, in laudantium iusto doloribus perferendis consectetur ex qui et?
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-3" id="card-box">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="card" style="width:300px">
                    <img class="card-img-top" src="images/team-1.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card" style="width:300px">
                    <img class="card-img-top" src="images/team-4.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card" style="width:300px">
                    <img class="card-img-top" src="images/team-3.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>