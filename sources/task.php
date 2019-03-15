<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Your task</title>
</head>
<body>
    <!--------------------Navbar----------------------------------->
    <nav class="navbar navbar-dark bg-dark justify-content-between">
        <div class="navbar-brand">
        Your Tasks
        </div>
        <div class='d-flex'>
            <button class='btn btn-outline-warning mx-3' data-toggle='modal' data-target='#newTask'>New task...</button>
            <form action="">
                <input class='btn btn-warning ' type="submit" value="Logout" name='logout'/>
            </form>
        </div>
    </nav>
    <!----------------Modal----------------------------------------->
    <div class="modal fade" id="newTask" role="dialog">
        <div class="modal-dialog">
    
      <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">List name</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <form action="task.php">
                    <div class="input-group">
                        <input type="text" name="listn" id="" class='form-control'/>
                        <div class="input-group-append">
                            <input type="submit" value="Done" name='newlist' class='btn btn-success'/>
                        </div>
                    </div>
                </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>




    <!---------------------Script------------------------------>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>