

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DepartmentPage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
    

<body>

    <!--header-->
    <div class="container">
    <h1 style="background-color:rgba(255, 99, 71, 0.2); text-align:center;">Jazz's House</h1><br><br>
    </div>
    <!--header-->
    
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="list-group fixed">
                    <a class="list-group-item" href="#"><i class="fa fa-users" aria-hidden="true"></i>&nbsp; Customer</a>
                    <a class="list-group-item" href="menupage.php"><i class="fa fa-cutlery" aria-hidden="true"></i>&nbsp; Menu</a>
                    <a class="list-group-item" href="menuTypepage.php"><i class="fa fa-database" aria-hidden="true"></i>&nbsp; Menu Type</a>
                    <a class="list-group-item" href="proPage.php"><i class="fa fa-tags" aria-hidden="true"></i>&nbsp; Promotion</a>
                    <a class="list-group-item active" href="deptPage.php"><i class="fa fa-university" aria-hidden="true"></i>&nbsp; Department</a>
                    <a class="list-group-item" href="employeePage.php"><i class="fa fa-id-card" aria-hidden="true"></i>&nbsp; Employee</a>
                    <a class="list-group-item" href="#"><i class="fa fa-cog fa-fw" aria-hidden="true"></i>&nbsp; Setting</a>
                    <a class="list-group-item list-group-item-danger" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; Logout</a>
                </div>
            </div>
            <div class="col-9">
               
                
                <!--======condition start=====-->
                <?php
                    $act = (isset($_GET['act']) ? $_GET['act'] : '');
                    if($act=='add')
                    {
                        include('form_addDept.php');
                    }elseif($act=='edit'){
                        include('form_editDept.php');
                    }elseif($act=='addemp'){
                        include('form_addBelongto.php');
                    }elseif($act=='view'){
                        include('viewEmpOnDeptTable.php');
                    }elseif($act=='editstatus'){
                        include('form_editEmpstatus.php');
                    }else{?>
                        
                        <h2>Department</h2><br>
                        <!--======Add icon=====-->
                        <div class="section-intro">
                            <a class="btn btn-success" href="deptPage.php?act=add"> +Add Department</a>
                        </div>
                        <br>
                        <!--======Add icon end=====-->
                        <?php include('deptTable.php');
                    }?>
                
                <!--======condition end=====-->
            
                </div>
            </div>
        </div>
    </div>
    <!--footer-->
    <div class="container margin-botton">
    <h1 style="background-color:rgba(255, 99, 71, 0.2); text-align:center;"><br><br></h1>
    </div>
    <!--footer-->


 
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>