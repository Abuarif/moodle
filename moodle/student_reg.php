<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>add new student</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/mystyle.css"> 
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>



    </head>


    <!-this is body  ->
    <body >

        <div class="container">
            <div style="background-color:#0f0f0f; margin-top:5px; margin-bottom:5px ">
                <nav class="nav nav-tabs nav-justified ">


                    <ul class="nav nav-pills navFont ">
                        <li role="presentation" class="label label-default"><a href="admin_home.php"class="navFont"><span class="glyphicon glyphicon-home"> Home</span></a></li>
                        <li role="presentation" class="active label label-default"><a href="student_reg.php" class="navFont">Student</a></li>
                        <li role="presentation" class="label label-default"><a href="lecturer_reg.php" class="navFont">Lecturer</a></li>
                        <li role="presentation" class="label label-default"><a href="course.php"class="navFont">Course</a></li>
                        <li role="presentation" class="label label-default"><a href="dept_entry.php"class="navFont">Department</a></li>
                        <li role="presentation" class="label label-default"><a href="building_reg.php"class="navFont">Building</a></li>
                        



                    </ul>
            </div>










            <aside>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h1>Add New Student</h1>
                        <br>
                    </div>
                    <div class="panel-body">


                        <div>

                            <form role="form" action="std_reg_entry.php" method="post">
                                <table width="400">
                                    <tr height="50"> 
                                        <td> Student ID:</td><td> <input type="text" maxlength="7"  required="required" placeholder="eg:120734x" name="id"></td>
                                    </tr>
                                    <tr height="50">                                                            
                                        <td>Name: </td><td><input type="text" maxlength="50"  required="required" placeholder="eg:Pavindu Chathuranga" name="name"></td>
                                    </tr>
                                    <tr height="50">

                                        <td>Email :</td><td> <input type="email" maxlength="50"  required="required" placeholder="eg:pavi@gmail.com" name="mail"></td>
                                    </tr>
                                    <tr height="50">
                                        <td>Contact Number:</td><td><input type="text" maxlength="10"  required="required" placeholder="eg:0711234532" name="phone"></td>
                                    </tr>
                                    <tr height="50">
                                        <td>Birthday:</td><td><input type="text" name="birthday" maxlength="10"  required="required"  placeholder="yyyy/mm/dd"></td>
                                    </tr>
                                    <tr height="50">

                                        <td>NIC:</td><td><input type="text" maxlength="10"  required="required" placeholder="eg:911670577v" name="nic"></td>
                                    </tr>

                                         <!---->
                                    <tr height="50">
                                        <td>Department:</td>
                                        <td>
                                            <select name="dept_id">


                                                <?php
                                                $servername = "localhost";
                                                $username = "root";
                                                $password ="";
                                                $dbname = "moodle";

                                                //Create connection
                                                $conn = mysqli_connect($servername, $username, $password, $dbname);
                                                //check connection
                                                if (!$conn) {

                                                    die("Connection failed:" . mysqli_connect_error());
                                                }
                                                $sql = "SELECT * FROM department";
                                                $result = mysqli_query($conn, $sql);

                                                if (mysqli_num_rows($result) > 0) {

                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo' <option value="' . $row["dept_id"] . '">' . $row["dept_name"] . '</option>';
                                                    }
                                                } else {
                                                    echo "0 results";
                                                }
                                                mysqli_close($conn);
                                                ?>
                                            </select>

                                        </td>
                                    </tr>
                                         <!---->

                                    <tr height="50">
                                        <td> Password:</td><td><input type="password" maxlength="30"  required="required" placeholder="password" name="pw"></td>
                                    </tr>
                                   

                                </table>
                                
                                    <input type="submit" value="submit" class="floatright">
                                
                            </form>


                        </div>




                    </div>
                </div>
            </aside>


        </div>
    </body>

</html>

