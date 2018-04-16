<?php
    include 'header.php';
    
?>


<?php
    if(isset($_GET['login'])){
     
        if(($_GET['login']== "failed") || ($_GET['login']== "invalid")){
            echo "please enter correct phone number";
        }
        else{
            echo "";
        }
    }  
?>
   
    <div id="loginform" style="text-align: center">
    <form id="cloform" action="../includes/setlogindetails.inc.php" method="post">
        <p>Please enter your phone number</p>
        <label for="name">Phone Number</label>
        <input type="text" class="form-control" name="name" id="name" required >
        <input class="btn btn-primary" type="submit" name="enter" id="enter" value="Enter" />
    </form>
    </div>
 
<?php
    include 'footer.php';
?>