<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<nav class="navbar navbar-default navbar-static-top nav-bg">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Hood Buddies</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
                <form action="login.php" method="post">
                    <ul class="nav navbar-nav navbar-right">
                <li><div class="form-group">
                        <input type="text" class="form-control" id="usr" placeholder="Username">
                    </div></li>
                <li><div class="form-group">
                        <input type="password" class="form-control" id="usr" placeholder="Password">
                    </div></li>
                <li><button class="btn bg-btn">Login</button> </li>
                    </ul>
                </form>

        </div><!--/.nav-collapse -->
    </div>
</nav>
</body>
</html>



