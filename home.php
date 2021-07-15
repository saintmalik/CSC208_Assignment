<?php
include "config.php";

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
} else {
    $query = "SELECT * FROM students WHERE username = " . $_SESSION["username"];
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    $user_data = $row;
}

if (isset($_POST['but_logout'])) {
    session_destroy();
    header('Location: login.php');
}
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <meta name="author" content="Abdulmalik" />
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="strap.css">
</head>

<body>
<div class="container">
<div class="studentinfo">
    <div class="row">
        <div class="col-md-4">
            <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail" src="avatar.png"> 
        </div>
        <div class="col-md-6">
            <h4 class="stn">Student Informations</h4>
            <div class="table-responsive">
            <table class="table table-user-information">
                <tbody>
                    <tr>        
                        <td>
                            <strong>
                                Matric No/Username:                                               
                            </strong>
                        </td>
                        <td class="text-dark">
                        <?php echo $user_data['username']; ?>    
                        </td>
                    </tr>
                    <tr>    
                        <td>
                            <strong>
                                Name:                                                
                            </strong>
                        </td>
                        <td class="text-dark">
                        <?php echo $user_data['name']; ?>   
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                Group Of:                                               
                            </strong>
                        </td>
                        <td class="text-dark">
                        <?php echo $user_data['groupof']; ?>
                        </td>
                    </tr>

                    <tr>        
                        <td>
                            <strong>
                                Sex:                                                
                            </strong>
                        </td>
                        <td class="text-dark">
                        <?php echo $user_data['sex']; ?>
                        </td>
                    </tr>


                    <tr>        
                        <td>
                            <strong>
                                Phone Number:                                               
                            </strong>
                        </td>
                        <td class="text-dark">
                        <?php echo $user_data['phonenum']; ?>
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                Email:                                               
                            </strong>
                        </td>
                        <td class="text-dark">
                        <?php echo $user_data['email']; ?> 
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                Address:                                               
                            </strong>
                        </td>
                        <td class="text-dark">
                        <?php echo $user_data['address']; ?>
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                Next Of Kin:                                              
                            </strong>
                        </td>
                        <td class="text-dark">
                        <?php echo $user_data['nxtkin']; ?>
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                Next Of Kin Phone Number:                                              
                            </strong>
                        </td>
                        <td class="text-dark">
                        <?php echo $user_data['phonenum_nxtkin']; ?>
                        </td>
                    </tr>                                    
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
<br/>
<div class="button">
<a href="index.php"><button>Check Group 1 Coursemate </button></a><br/><br/>
<form method='post' action="">
<input type="submit" value="Logout" name="but_logout">
</form>
</div>
</div>

</body>

</html>
