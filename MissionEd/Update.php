<!DOCTYPE html>

<html>
    <head>
        <title>Update page</title>
       <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle"
                            data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand">MissionEd</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right"><li>
                    	<a href="#"> 
                                <span class="glyphicon glyphicon-log-in"></span> Home</a></li>
                        <li><a href="Update.php">
                                <span class="glyphicon glyphicon-user
                                      "></span> Update Info</a></li></ul>
                </div>
            </div>
        </nav>
         <div class="container">
            <div class="row row_style">
                <div class="col-xs-6">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: grey;">
                            <h1>Update Page</h1>
                            
                        </div>
                        <div class="panel-body">
                            <p class="text-warning"><h1>&nbsp;Update Info</h1></p>
                            <div class="container">
                            <div class="row">
                            <div class="col-xs-5">
                                <form action="Update2.php" method="POST">
                            <div class="form-group">
                                <label for="email">E-Mail</label>
                                <input type="email" id="email" name="email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="username" id="username" name="username" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="hackos">Hackos</label>
                                <input type="hackos" id="hackos" name="hackos" class="form-control">
                            </div>

                            
                            <button class="btn btn-secondary">
                                Update</button>
                                </form>
                        </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>
