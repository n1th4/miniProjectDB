<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>db_form_editMenu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<body>
    <?php
        include('connectPJ.php');

        ////เช็คว่า เพิ่มค่าอะไรไปในตัวแปรใน db ใดบ้าง
        //echo'<prev>';
        //print_r($_POST);
        //echo'<prev>';
        //exit();
        

        //ประกาศตัวแปรเพื่อเก็บค่า
        $menuID = $_POST["menuID"];
        $Promotion_Start = $_POST["Promotion_Start"];
        $Promotion_End = $_POST["Promotion_End"];
        $now = date("Y-m-d");
        
        if($Promotion_Start>=$now AND $Promotion_End>$now AND $Promotion_Start<$Promotion_End){//ช่วงโปรโมชั่น เริ่มต้องห้ามเกินปัจจุบันและสิ้นสุดห้ามมาก่อนปัจจุบัน และเริ่มห้ามเลยวันสิ้นสุด
        //แก้ไขข้อมูล menu
        $sql = "UPDATE  promotion_menu
        SET  Promotion_Start = '$Promotion_Start',Promotion_End = '$Promotion_End'
        WHERE menuID=$menuID";
        $result = mysqli_query($connectData, $sql) or die ("Error in query: $sql ".mysqli_error($connectData));

        if($Promotion_End < $now){
            $update = 'Hide';
        }else{
            $update = 'In Stock';
        }

        $sql2 = "UPDATE menus
            SET  Menu_Statu = '$update'
            WHERE Menu_Id=$menuID";
            $result2 = mysqli_query($connectData, $sql2) or die ("Error in query: $sql2 ".mysqli_error($connectData));
    }else{
            echo "<script type='text/javascript'>";
            echo "alert('Error! Please check date');";
            echo "window.location = 'proPage.php?ID=$menuID&act=edit';";
            echo "</script>";
    }
        //เช็คว่า my sql code ว่า insert ถูกต้องไหม
        //echo'<prev>';
        //echo $sql;
        //echo'<prev>';
        //exit();
    
        //ปิดการเชื่อมต่อ db
        mysqli_close($connectData);

        //JS แสดงข้อความเมื่อบันทึกเรียบร้อย และกระโดดไปหน้าฟอร์ม
        if($result){
            echo "<script type='text/javascript'>";
            echo "alert('Edit menu succesful');";
            echo "window.location = 'proPage.php';";
            echo "</script>";
        }else{
            echo "<script type='text/javascript'>";
            echo "alert('Error!');";
            echo "window.location = 'proPage.php';";
            echo "</script>";
        }

    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


</body>
</html>