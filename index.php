<?php

    $link = new mysqli("localhost","root","","formdb");

    if (isset($_POST['submit'])) {
        $stm = "";
        $f_name = $_POST['name'];
        $f_id = $_POST['id'];
        $f_email = $_POST['email'];
        $f_dept = $_POST['dept'];
        $f_reg = $_POST['reg'];
        $f_sess = $_POST['sess'];
        $f_sex = $_POST['sex'];

        $stm = $link->prepare("insert into information(name,id,email,dept,reg,sess,sex) values(?,?,?,?,?,?,?)");

        $stm->bind_param("sssssss",$f_name,$f_id, $f_email,$f_dept,$f_reg,$f_sess, $f_sex);

        if($stm->execute()===true){
            echo "<script>alert('Data Submitted successfully')</script>";
        }

        else{
            echo "<script>alert('Process Failed')</script>";
        }

    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form With Database</title>
    
</head>
<body>
<h1>Hello There!</h1>
    <form action="" method="post">
        <table align="center" border="2">
            <tr>
                <td>
                    NAME
                </td>
                <td>
                    <input type="text" value="" name="name">
                </td>
            </tr>
            <tr>
                <td>
                    ID
                </td>
                <td>
                    <input type="text" value="" name="id">
                </td>
  
            <tr>
                <td>
                    EMAIL
                </td>
                <td>
                    <input type="text" value="" name="email">
                </td>
            </tr>
            <tr>
                <td>
                    DEPT.
                </td>
                <td>
                    <input type="text" value="" name="dept">
                </td>
            </tr>
            <tr>
                <td>
                    REG
                </td>
                <td>
                    <input type="text" value="" name="reg">
                </td>
            </tr>
            <tr>
                <td>
                    SESSION
                </td>
                <td>
                    <input type="text" value="" name="sess">
                </td>
            </tr>
            <tr>
                <td>
                    SEX
                </td>
                <td>
                    <input type="radio" name="sex" value="male" checked>Male&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="sex" value="female">Female&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="sex" value="female">Other<br>
                </td>
            </tr>
            <tr>
                <td>
                    &nbsp;
                </td>
                <td>
                    <input id="submit" type="submit" value="Submit" name="submit">&nbsp;&nbsp;&nbsp;
                    <input id="reset" type="reset" value="Reset" name="reset">&nbsp; &nbsp;&nbsp;
                    <a href="show.php"><input id="showdatabtn" type="button" value="Show Data" name="showdatabtn"></a>
                </td>
            </tr>
        </table>
	</form>
</body>
</html>