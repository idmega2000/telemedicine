<?php
session_start();
if(!isset($_SESSION['doctor-field']) || !isset($_SESSION['doctor-id'])){
        header("Location: ../pages/homepage.php");
}

$error= '';
        if (isset($_GET['change'])){
            if ($_GET['change']== 'failed'){
                $error = 'please enter correct old password';

            }
            
        }

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Change Password</title>

 
<!-- Bootstrap -->
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" style="style/css" />
    <link rel="stylesheet" href="../css/stylesheet.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" style="style/css"/>
    <link rel="stylesheet" href="../css/SecondStylesheet.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" style="style/css"/>
        <script type="text/javascript" language="javascript" src="../js/project.js?<?php echo date('l jS \of F Y h:i:s A'); ?>"></script>
    <script type="text/javascript" src="../jquery/jquery-2.1.4.min.js"></script>

    <link rel="stylesheet" href="../jquery-ui/jquery-ui.min.css" style="style/css" />

    <script type="text/javascript" src="../jquery-ui/jquery-ui.min.js"></script>


<script>
    



</script>



</head>

<body>
    



</body>
   <div class="thebody">
        <div id="formDiv" align="center" style="margin: 150px;">
            <form id="changePassForm" method="POST" onsubmit="return validatePassForm();" action="../includes/changepassword.inc.php" >
            <table class="bookingtable">
            <?php
                    if($error!=''){                                 
                    echo '<h5 class="text-danger text-center">'.$error.'</h5>';
                    }
                ?>
            <tr>
                <th>Old Password:</th>
                <td><input type="textbox" class="form-control" name="old-pass" id="oldPass" required></td>
            </tr>
            <tr>
                <th>New Password:</th>
                <td><input type="texbox" class="form-control" name="first-np" id="firstNP" minlength="6" maxlength="14" required></td>
            </tr>
            <tr>
                <th>Retype New Password : </th>
                <td><input id="secondNP" class="form-control" type="textbox" name="second-np" minlength="6" maxlength="14" required></td>
            </tr>

         
            <tr>
                <th></th>
                <td>
                    <input  class="btn btn-primary" type="submit" name="change-pass" id="changePassword" value="Change Password">
                </td>
            </tr>
            </table> 
            </form>
        </div>
        </div>




</body>
</html>